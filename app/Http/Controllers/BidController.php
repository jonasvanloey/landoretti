<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Bieding;
use App\Http\Requests\bidRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    //
    public function makebid($id, bidRequest $data){
//        var_dump($id);
        Bieding::insert([
            'user_id'=>Auth::user()->id,
            'bid_price'=>$data['bid'],
            'bid_id'=>$id
        ]);
        return redirect('art');
    }
    public function buynow(Bid $id){
        Bieding::insert([
            'user_id'=>Auth::user()->id,
            'bid_price'=>$id->buyout_price,
            'bid_id'=>$id->id
        ]);
        $title = $id->auction_title;
        $id->delete();
        return view('art.thank',compact('title'));
    }
}
