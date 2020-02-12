<?php

namespace App\Http\Controllers;

use App\Book;
// use Darryldecode\Cart\Cart;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $book = Book::findOrFail($request->book_id);
        $items = Cart::getContent();
        foreach($items as $key=>$item){
            if($item->associatedModel->id == $book->id){
                // return $item->quantity;
                Cart::update($key, array(
                    'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
                  ));
                  return;
            }
        }
        
        Cart::add(array(
            'id' => time(), // inique row ID
            'book_id' => $book->id,
            'name' => $book->title,
            'price' => $book->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $book
        ));
        
    }

    public function get_cart_data(){
         $items = Cart::getContent();
         return $items->toArray();
    }

    public function delete_to_cart(Request $request){
        // return $request->row_id;
        Cart::remove($request->row_id);
        return true;
    }
}
