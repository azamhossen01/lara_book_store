<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
