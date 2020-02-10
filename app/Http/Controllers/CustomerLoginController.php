<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerLoginController extends Controller
{
    public function check_customer_login(Request $request){
    //return    $request;
        $email = $request->email;

        $customer = Customer::where(['email'=>$email])->first();
        if($customer == true){
            if(Hash::check($request->password,$customer->password)) {
                return redirect()->route('/');
            } else {
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
        
    }
}
