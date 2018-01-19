<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Http\Requests\ArtRequest;
use App\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArtController extends Controller
{
    public function index(){
        $q=Bid::query();
        if(request()->has('find')){
            $str = request('find');
            $q->where('auction_title','LIKE','%'.$str.'%');
        }
        if(request()->has('style')){
           $style = request('style');
//            var_dump($style);
            $q->where(function ($query) use ($style)
            {
                    foreach ($style as $s)
                {
//                    var_dump($s);
                    //you can use orWhere the first time, dosn't need to be ->where
                    $query->orWhere('style',$s);
                }
            });
        }
        if(request()->has('media')){
           $media = request('media');
//            var_dump($style);
            $q->where(function ($query) use ($media)
            {
                    foreach ($media as $m)
                {
//                    var_dump($s);
                    //you can use orWhere the first time, dosn't need to be ->where
                    $query->orWhere('media',$m);
                }
            });
        }
        if(request()->has('era')){
            $era=request('era');
            $q->where(function ($query) use ($era){
                foreach ($era as $e)
                {
                    if($e==='Pre-war'){
                        $query->orWhere('year','<',1940);
                    }
                    if($e==='1940-1950'){
                        $query->orWhereBetween('year',[1939,1960]);
                    }
                    if($e==='1960-1980'){
                        $query->orWhereBetween('year',[1959,1990]);
                    }
                    if($e==='1990-present'){
                        $query->orWhere('year','>',1989);
                    }
                }
            });

        }
        if(request()->has('price')){
            $price=request('price');
            $q->where(function ($query) use ($price){
                foreach ($price as $p)
                {
                    if($p==='-5000'){
                        $query->orWhere('min_est_price','<',5001);
                    }
                    if($p==='5000–10000'){
                        $query->orWhereBetween('min_est_price',[5000,10000]);
                    }
                    if($p==='10000–25000'){
                        $query->orWhereBetween('min_est_price',[9999,25000]);
                    }
                    if($p==='50000–100000'){
                        $query->orWhereBetween('min_est_price',[24999,100000]);
                    }
                    if($p==='Above'){
                        $query->orWhere('min_est_price','>',99999);
                    }
                }
            });

        }
        if(request()->has('endingf')){
            $ending=request('endingf');
            $q->where(function ($query) use ($ending){
                foreach ($ending as $e)
                {
                    if($e==='this_week'){
                        $today=date('Y-m-d');
                        $newdate = strtotime ( '-7 day' , strtotime ( $today ) ) ;
                        $newdate2 = date ( 'Y-m-j' , $newdate );
                        $newdatef = strtotime ( '+7 day' , strtotime ( $today ) ) ;
                        $newdatef2 = date ( 'Y-m-j' , $newdate );


                        $query->orWhereBetween('end_date',[$today,$newdatef2]);;
                    }
                    if($e==='newly_listed'){
                        $query->orderBy('updated_at','DESC');
                    }
                    if($e==='Purchase_now'){
                        $query->whereNotNull('buyout_price');
                    }
                }
            });

        }



        if(request()->has('ending')){
            if(request('ending')==='soonest'){
                $q->orderBy('end_date','ASC')->get();

            }
            if(request('ending')==='latest'){
                $q->orderBy('end_date','DESC')->get();

            }

        }
        elseif (request()->has('new_auctions')){
            $q->orderBy('updated_at','DESC')->get();

        }
        elseif (request()->has('popular_auctions')){

           $q->whereHas('biedings',function($query){
               $query->select(DB::raw('count(*) as c'))->groupBy('bid_id')->orderBy('c');
           });

        }
        else{
            $bids = DB::table('bids')->where('deleted_at',NULL)->where('approved',1)->orderBy('updated_at')->get();

        }
        $bids = $q->where('deleted_at',NULL)->where('sold',0)->where('approved',1)->orderBy('updated_at')->get();

      return view('art.index',compact('bids'));
    }
    public function add(){
        if(!Auth::guest()){
            return view('art/add');
        }
        else{
            return redirect('/register');
        }

    }
    public function store( ArtRequest $data){
        if(!Auth::guest()) {
            $art = new Bid();
            $art->user_id = Auth::user()->id;
            $art->end_date = $data->end_date;
            $art->style = $data->style;
            $art->media = $data->media;
            $art->description = $data->description;
            $art->condition = $data->condition;
            $art->width = $data->width;
            $art->height = $data->height;
            $art->depth = $data->depth;
            $art->year = $data->year;
            $art->origin = $data->origin;
            $art->min_est_price = $data->min_est_price;
            $art->max_est_price = $data->max_est_price;
            $art->buyout_price = $data->buyout_price;
            $photoName = time() . 'i.' . $data->image->getClientOriginalExtension();
            $data->image->move(public_path('storage/bids'), $photoName);
            $art->image_path = $photoName;
            $sphotoName = time() . 's.' . $data->signature_image->getClientOriginalExtension();
            $data->signature_image->move(public_path('storage/bids'), $sphotoName);
            $art->signature_image_path = $sphotoName;
            if ($data->optional_image) {
                $ophotoName = time() . '.' . $data->optional_image->getClientOriginalExtension();
                $data->optional_image->move(public_path('storage/bids'), $ophotoName);
                $art->optional_image_path = $ophotoName;
            }
            $art->auction_title = $data->title;
            $art->is_active = 1;
            $art->save();
            return redirect('art');
        }
        else{
            return redirect('/register');
        }
    }
    public function addToWatchlist($id){
        if(!Auth::guest()) {
            $bid = DB::table('bids')->where('id', $id)->get();
//        var_dump($bid[0]->id);
            $wl = new Watchlist();
            $wl->user_id = Auth::user()->id;
            $wl->bid_id = $bid[0]->id;
            $wl->save();
            return redirect('art');
        }
        else{
            return redirect('/register');
        }


    }
    public function detail(Bid $bid){
        return view('art.detail',compact('bid'));
    }
    //
}
