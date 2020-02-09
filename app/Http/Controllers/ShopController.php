<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_grid(){
        $categories = Category::where('status',1)->get();
        return view('frontend.shop_grid',compact('categories'));
    }

    public function home_page(){
        $categories = Category::where('status',1)->get()->take(5);
        $books = Book::where('status',1)->get();
        $recents = Book::orderBy('id', 'desc')->take(8)->get();
        return view('frontend.home',compact('books','categories','recents'));
    }
}
