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
        // return $book;
        $items = Cart::getContent();
        // return $items;
        
        foreach($items as $key=>$item){
            if($item->associatedModel->id == $book->id){
                if($request->qty){
                    // return '1st';
                    Cart::update($key, array(
                        'quantity' => array(
                            'relative' => false,
                            'value' => $request->qty
                        ),
                      ));
                }else{
                    // return '2nd';
                    Cart::update($key, array(
                    'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
                  ));
                }
                // return $item->quantity;
                

                
                  return '1';
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
        return '1';
    }

    public function get_total(){
        return Cart::getTotal();
    }

    public function get_sub_total(Request $request){
        $book = Cart::get($request->row_id);
        return ($book->price * $request->qty);
    }
}
