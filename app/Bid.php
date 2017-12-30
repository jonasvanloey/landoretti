<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'end_date','title','image_path','buyout_price','min_est_price','max_est_price','description','condition','origin','year','width','height','depth'
    ];
    public function biedings(){
        return $this->hasMany(Bieding::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    //
}
