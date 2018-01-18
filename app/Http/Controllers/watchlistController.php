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
        if(!Auth::guest()) {
            if (request()->has('active')) {
                $watchlist = Watchlist::whereHas('bid', function ($query) {
                    $query->where('is_active', 1);
                })->where('user_id', Auth::user()->id)->get()->values()->all();
            } elseif (request()->has('ended')) {
                $watchlist = Watchlist::whereHas('bid', function ($query) {
                    $query->where('is_active', 0);
                })->where('user_id', Auth::user()->id)->get()->values()->all();

            } else {
                $watchlist = Watchlist::with('bid')->where('user_id', Auth::user()->id)->get()->values()->all();
            }
            return view('watchlist.index', compact('watchlist'));
        }else{
            return redirect('/register');
        }
//        var_dump($watchlist);
    }
    public function delete(){
        if(!Auth::guest()) {
            $list = Input::get('watchlist');
            foreach ($list as $l) {
                $item = DB::table('watchlists')->where('id', $l);
                $item->delete();

            }
            return redirect('watchlist');
        }else{
            return redirect('/register');
        }


    }
    public function deleteall(){
        if(!Auth::guest()) {
            $item = DB::table('watchlists')->where('user_id', Auth::user()->id);
            $item->delete();
            return redirect('watchlist');
        }else{
            return redirect('/register');
        }
    }
    //
}
