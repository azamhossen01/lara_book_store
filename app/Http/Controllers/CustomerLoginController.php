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
        $password = Hash::make($request->password);
        $customer = Customer::where(['email'=>$email])->first();
        if(Hash::check($password, $customer->password)) {
            return true;
        }
        // return $customer;
    }
}
