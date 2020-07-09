<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
