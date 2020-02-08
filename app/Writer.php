<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{

    protected $table = 'writers';

    protected $fillable = ['name','email','phone','address','description','dob','image','status'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
