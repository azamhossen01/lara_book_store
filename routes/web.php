<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ShopController@home_page')->name('/');
// Route::get('/', function () {
//     return view('frontend.home');
// })->name('/');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');

// Route::get('shop_grid',function(){
//     return view('frontend.shop_grid');
// })->name('shop_grid');
Route::get('shop_grid/{id}','ShopController@shop_grid')->name('shop_grid');

Route::get('single_product/{id}','ShopController@single_product')->name('single_product');
Route::get('writer_books/{id}','ShopController@writer_books')->name('writer_books');
Route::get('customer_login','ShopController@customer_login')->name('customer_login');
Route::get('customer_register','ShopController@customer_register')->name('customer_register');

//customer registration route
Route::post('customer_registration','ShopController@customer_registration')->name('customer_registration');
Route::post('check_customer_login','CustomerLoginController@check_customer_login')->name('check_customer_login');

// get single book data
Route::get('get_book','ShopController@get_book')->name('get_book');

// blog
Route::get('blog_details/{blog_id}','ShopController@blog_details')->name('blog_details');
Route::get('blog','ShopController@blog')->name('blog');

// blog comment
Route::post('post_comment','ShopController@post_comment')->name('post_comment');

// about page
Route::get('about','ShopController@about')->name('about');

// cart route
Route::get('add_to_cart','CartController@add_to_cart')->name('add_to_cart');
Route::get('get_cart_data','CartController@get_cart_data')->name('get_cart_data');
Route::get('delete_to_cart','CartController@delete_to_cart')->name('delete_to_cart');
Route::get('get_total','CartController@get_total')->name('get_total');
Route::get('get_sub_total','CartController@get_sub_total')->name('get_sub_total');
Route::get('checkout','CartController@checkout')->name('checkout');
Route::post('update_cart_data','CartController@update_cart_data')->name('update_cart_data');

Route::post('order_placed','CartController@order_placed')->name('order_placed');

Route::get('cart','ShopController@cart')->name('cart');



Route::get('wishlist',function(){
    return view('frontend.wishlist');
})->name('wishlist');

Route::get('error404',function(){
    return view('frontend.error404');
})->name('error404');

Route::get('faq',function(){
    return view('frontend.faq');
})->name('faq');

// Route::get('about',function(){
//     return view('frontend.about');
// })->name('about');

Route::get('portfolio',function(){
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('portfolio_details',function(){
    return view('frontend.portfolio_details');
})->name('portfolio_details');

Route::get('team',function(){
    return view('frontend.team');
})->name('team');

// Route::get('blog',function(){
//     return view('frontend.blog');
// })->name('blog');

// Route::get('blog_details',function(){
//     return view('frontend.blog_details');
// })->name('blog_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

// Route::get('get_book','BookController@get_book')->name('get_book');
Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('change_category_status/{cat_id}','CategoryController@change_category_status')->name('change_category_status');
    Route::resource('categories','CategoryController');
    Route::get('change_writer_status','WriterController@change_writer_status')->name('writers.status.update');
    Route::resource('writers','WriterController');
    // Route::get('change_book_status/{book_id}','BookController@change_book_status')->name('change_book_status');
    Route::get('change_book_status','BookController@change_book_status')->name('books.status.update');
    Route::get('change_blog_status/{blog_id}','BlogController@change_blog_status')->name('change_blog_status');
    Route::resource('books','BookController');
    Route::resource('customers','CustomerController');
    Route::resource('orders','OrderController');
    Route::resource('blogs','BlogController');
});
