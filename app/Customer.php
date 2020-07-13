<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->hasOne(User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function shippings(){
        return $this->hasMany(Shipping::class);
    }
}
