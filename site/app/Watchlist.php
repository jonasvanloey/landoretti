<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function bid() {
        return $this->belongsTo(Bid::class);
    }
    //
}
