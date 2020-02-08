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

Route::get('/', function () {
    return view('frontend.home');
})->name('/');
Route::get('contact',function(){
    return view('frontend.contact');
})->name('contact');

// Route::get('shop_grid',function(){
//     return view('frontend.shop_grid');
// })->name('shop_grid');
Route::get('shop_grid','HomeController@shop_grid')->name('shop_grid');

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
    Route::resource('categories','CategoryController');
    Route::resource('writers','WriterController');
});
