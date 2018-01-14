<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','street','city','nr','postcode','vat_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function biedings(){
        return $this->hasMany(Bieding::class);
    }
    public function watchlists(){
        return $this->hasMany(Watchlist::class);
    }
    public function bids(){
        return $this->hasMany(Bid::class);
    }
}
