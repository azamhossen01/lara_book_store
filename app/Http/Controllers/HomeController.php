<?php

namespace App\Http\Controllers;

use App\Book;
use App\Order;
use App\Writer;
use App\Category;
use App\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book_count = count(Book::all());
        $order_count = count(Order::all());
        $writer_count = count(Writer::all());
        $customer_count = count(Customer::all());
        // return $customer_count;
        return view('backend.dashboard',compact('book_count','order_count','writer_count','customer_count'));
    }

   

    
}
