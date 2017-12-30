<?php

namespace App\Http\Controllers;

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
}
