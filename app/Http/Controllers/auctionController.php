<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class auctionController extends Controller
{
    public function index(){

            $pending = DB::table('bids')->where('pending',1)->where('user_id',Auth::user()->id)->get();
            $refused = DB::table('bids')->where('pending',0)->where('user_id',Auth::user()->id)->where('approved',0)->get();
            $active = DB::table('bids')->where('pending',0)->where('user_id',Auth::user()->id)->where('approved',1)->get();
            $ldate = date('Y-m-d');

            $expired = DB::table('bids')->where('pending',0)->where('user_id',Auth::user()->id)->where('end_date','<',$ldate)->get();
            $sold= DB::table('bids')->where('pending',0)->where('user_id',Auth::user()->id)->where('sold',1)->get();

        return view('myauctions/index',compact('pending','refused','active','sold','expired'));
    }
    //
}
