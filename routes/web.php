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
Route::get('shop_grid','ShopController@shop_grid')->name('shop_grid');


Route::get('single_product',function(){
    return view('frontend.single_product');
})->name('single_product');

Route::get('my_account',function(){
    return view('frontend.my_account');
})->name('my_account');

Route::get('cart',function(){
    return view('frontend.cart');
})->name('cart');

Route::get('checkout',function(){
    return view('frontend.checkout');
})->name('checkout');

Route::get('wishlist',function(){
    return view('frontend.wishlist');
})->name('wishlist');

Route::get('error404',function(){
    return view('frontend.error404');
})->name('error404');

Route::get('faq',function(){
    return view('frontend.faq');
})->name('faq');

Route::get('about',function(){
    return view('frontend.about');
})->name('about');

Route::get('portfolio',function(){
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('portfolio_details',function(){
    return view('frontend.portfolio_details');
})->name('portfolio_details');

Route::get('team',function(){
    return view('frontend.team');
})->name('team');

Route::get('blog',function(){
    return view('frontend.blog');
})->name('blog');

Route::get('blog_details',function(){
    return view('frontend.blog_details');
})->name('blog_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::get('change_category_status/{cat_id}','CategoryController@change_category_status')->name('change_category_status');
    Route::resource('categories','CategoryController');
    Route::get('change_writer_status','WriterController@change_writer_status')->name('writers.status.update');
    Route::resource('writers','WriterController');
    // Route::get('change_book_status/{book_id}','BookController@change_book_status')->name('change_book_status');
    Route::get('change_book_status','BookController@change_book_status')->name('books.status.update');
    Route::resource('books','BookController');
});
