<?php

namespace App\Http\Controllers;

use Cart;
use App\Blog;
use App\Book;
use App\Writer;
use App\Comment;
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
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        return view('frontend.home',compact('books','categories','recents','all_categories','blogs'));
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
        return $request;
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

    public function get_book(Request $request){
        $book = Book::findOrFail($request->book_id);
        return $book;
    }

    public function cart(){
        $items = Cart::getContent();
        return view('frontend.cart',compact('items'));
    }

    public function blog(){
        $blogs = Blog::where('status',1)->get();
        $recent_blogs = Blog::orderBy('id', 'desc')->take(5)->get();
        return view('frontend.blog',compact('blogs','recent_blogs'));
    }

    public function blog_details($id){
        $blog = Blog::findOrFail($id);
        $comments = $blog->comments->where('parent_id',null);
        $recent_blogs = Blog::orderBy('id', 'desc')->take(5)->get();
        return view('frontend.blog_details',compact('blog','recent_blogs','comments'));
    }

    public function post_comment(Request $request){
        // return $request;
        $message = $request->comment??$request->replay;
        // return $message;
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->blog_id = $request->blog_id;
        $comment->parent_id = $request->parent_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $message;
        $comment->is_replay = $request->is_replay;
        // return $comment;
        $comment->save();
        return redirect()->back();
    }


}
