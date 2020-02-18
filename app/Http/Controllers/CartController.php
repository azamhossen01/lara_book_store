<?php

namespace App\Http\Controllers;

use Cart;
// use Darryldecode\Cart\Cart;
use App\Book;
use App\Order;
use App\Shipping;
use Carbon\Carbon;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function update_cart_data(Request $request){
        foreach($request->row_ids as $key=>$row_id){
            Cart::update($row_id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->qty[$key]
                ),
              ));
        }
        return redirect()->back();
    }

    public function checkout(Request $request){
        $items = Cart::getContent();
        $sub_total = Cart::getSubTotal();
        // return $sub_total;
         return view('frontend.checkout',compact('items','sub_total'));
    }

    public function order_placed(Request $request){
        
        // return $request;
        $shipping = new Shipping;
        $shipping->customer_id = Auth::user()->customer->id;
        $shipping->name = $request->name;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->address;
        $shipping->company_name = $request->company_name;
        $shipping->country = $request->country;
        $shipping->district = $request->district;
        $shipping->postal_code = $request->postal_code;
        $shipping->save();
        
        $order = new Order;
        $order->shipping_id = $shipping->id;
        $order->customer_id = Auth::user()->customer->id;
        $order->payment_method = $request->payment_method;
        $order->transaction_id = $request->transaction_id;
        $order->total = Cart::getTotal();
        $order->save();

        $items = Cart::getContent();
        foreach($items as $key=>$item){
            $order_detail = new OrderDetail;
            $order_detail->order_id = $order->id;
            $order_detail->book_id = $item->associatedModel->id;
            $order_detail->qty = $item->quantity;
            $order_detail->sub_total = ($item->price*$item->quantity);
            $order_detail->save();
        }
        Cart::clear();
        Alert::alert('Successs', 'Order Placed Successfully', 'success');
        return redirect()->route('/');
    }
}
