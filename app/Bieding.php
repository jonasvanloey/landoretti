<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieding extends Model
{
    protected $fillable = [
        'bid_price',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function bid() {
        return $this->belongsTo(Bid::class);
    }
    //
}
