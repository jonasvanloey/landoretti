<?php

namespace App\Http\Controllers;

use App\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class watchlistController extends Controller
{
    public function index(){
        $watchlist = Watchlist::with('bid')->where('user_id',Auth::user()->id)->get()->values()->all();
        return view('watchlist.index',compact('watchlist'));
//        var_dump($watchlist);
    }
    public function delete(){
        $list =Input::get('watchlist');
        foreach ($list as $l){
            $item = DB::table('watchlists')->where('id',$l);
            $item->delete();

        }
        return redirect('watchlist');


    }
    public function deleteall(){
        $item=DB::table('watchlists')->where('user_id',Auth::user()->id);
        $item->delete();
        return redirect('watchlist');
    }
    //
}
