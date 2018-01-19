<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q=Bid::query();
        $q->whereHas('biedings',function($query){
            $query->select(DB::raw('count(*) as c'))->groupBy('bid_id')->orderBy('c');
        });
        $bids = $q->where('deleted_at',NULL)->where('sold',0)->where('approved',1)->orderBy('updated_at')->take(4)->get();
//        var_dump($bids);
        return view('home.index',compact('bids'));
    }
}
