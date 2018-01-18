<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    //
    public function index(){
        if(!Auth::guest()) {
            $us = DB::table('users')->where('id', Auth::user()->id)->get();
            $user = $us[0];
            $active = DB::table('bids')->where('pending', 0)->where('approved', 1)->where('user_id', Auth::user()->id)->get();

            return view('profile.index', compact('user', 'active'));
        }
        else{
            return redirect('/register');
        }
    }
}
