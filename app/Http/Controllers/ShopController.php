<?php

namespace App\Http\Controllers;

use App\Book;
use App\Writer;
use App\Category;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class ShopController extends Controller
{
    public function shop_grid($cat_id){
        // return $id;
        $category = Category::findOrFail($cat_id);
        $categories = Category::where('status',1)->get();
        $books = Book::where(['status'=>1,['category_id',$cat_id]])->get();
        return view('frontend.shop_grid',compact('categories','books','category'));
    }

    public function home_page(){
        $categories = Category::where('status',1)->get()->take(5);
        $all_categories = Category::where('status',1)->get();
        $books = Book::where('status',1)->get();
        $recents = Book::orderBy('id', 'desc')->take(8)->get();
        return view('frontend.home',compact('books','categories','recents','all_categories'));
    }

    public function single_product($book_id){
        // return $book_id;
        $categories = Category::where('status',1)->get();
        $book = Book::findOrFail($book_id);
        return view('frontend.single_product',compact('book','categories'));
    }

    public function writer_books($writer_id){
        $writer = Writer::findOrFail($writer_id);
        $categories = Category::where('status',1)->get();
        $books = Book::where(['status'=>1,['writer_id',$writer_id]])->get();
        
        return view('frontend.writer_books',compact('categories','books','writer'));
    }

    public function customer_login(){
        return view('frontend.login');
    }
    public function customer_register(){
        return view('frontend.register');
    }

    public function customer_registration(Request $request){
        // return $request;
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|unique:customers',
            'phone' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->save();
        Alert::alert('Success', 'User Registration Successfull', 'success');
        return redirect()->route('customer_login');
    }
}
