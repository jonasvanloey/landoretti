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
        $bids = DB::table('bids')->where('deleted_at',NULL)->orderBy('updated_at')->get();
        return view('art.index',compact('bids'));
    }
    public function add(){
        return view('art/add');
    }
    public function store( ArtRequest $data){
        $art = new Bid();
        $art->user_id=Auth::user()->id;
        $art->end_date=$data->end_date;
        $art->style=$data->style;
        $art->description=$data->description;
        $art->condition=$data->condition;
        $art->width=$data->width;
        $art->height=$data->height;
        $art->depth=$data->depth;
        $art->year=$data->year;
        $art->origin=$data->origin;
        $art->min_est_price=$data->min_est_price;
        $art->max_est_price=$data->max_est_price;
        $art->buyout_price=$data->buyout_price;
        $photoName = time().'i.'.$data->image->getClientOriginalExtension();
        $data->image->move(public_path('storage/bids'), $photoName);
        $art->image_path=$photoName;
        $sphotoName = time().'s.'.$data->signature_image->getClientOriginalExtension();
        $data->signature_image->move(public_path('storage/bids'), $sphotoName);
        $art->signature_image_path=$sphotoName;
        if($data->optional_image)
        {
            $ophotoName = time().'.'.$data->optional_image->getClientOriginalExtension();
            $data->optional_image->move(public_path('storage/bids'), $ophotoName);
            $art->optional_image_path=$ophotoName;
        }
        $art->auction_title=$data->title;
        $art->is_active=1;
        $art->save();
        return redirect('art');
    }
    public function addToWatchlist($id){
        $bid=DB::table('bids')->where('id',$id)->get();
//        var_dump($bid[0]->id);
        $wl = new Watchlist();
        $wl->user_id=Auth::user()->id;
        $wl->bid_id=$bid[0]->id;
        $wl->save();
        return redirect('art');
    }
    public function detail(Bid $bid){
        return view('art.detail',compact('bid'));
    }
    //
}
