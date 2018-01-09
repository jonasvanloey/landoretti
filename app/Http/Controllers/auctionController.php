<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class auctionController extends Controller
{
    public function index(){
        $pending = DB::table('bids')->where('pending',1)->get();
        $refused = DB::table('bids')->where('pending',0)->where('approved',0)->get();
        $active = DB::table('bids')->where('pending',0)->where('approved',1)->get();
        $ldate = date('Y-m-d');

        $expired = DB::table('bids')->where('pending',0)->where('end_date','<',$ldate)->get();
        $sold= DB::table('bids')->where('pending',0)->where('sold',1)->get();
        return view('myauctions/index',compact('pending','refused','active','sold','expired'));
    }
    //
}
