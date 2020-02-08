<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected   $table = 'books';

    protected $fillable = ['title','category_id','writer_id','price','description','marks','status','image'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
