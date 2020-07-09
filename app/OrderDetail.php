<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

    protected $guarded = [];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
