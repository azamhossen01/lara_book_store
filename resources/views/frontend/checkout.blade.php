@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Checkout</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="index.html">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Checkout</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
        @if(Auth::check() == true)
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="customer_details">
                    <h3>Billing details</h3>
                <form action="{{route('order_placed')}}" method="post">
                    @csrf
                    <div class="customar__field">
                        {{-- <div class="margin_between"> --}}
                            <div class="input_box">
                                <label>Full name <span>*</span></label>
                            <input type="text" required value="{{Auth::user()->name}}" name="name">
                            </div>
                            
                        {{-- </div> --}}
                        {{-- <div class="input_box">
                            <label>Company name <span>*</span></label>
                            <input type="text" name="company_name">
                        </div>
                        <div class="input_box">
                            <label>Country<span>*</span></label>
                            <input type="text" name="country">
                        </div> --}}
                        <div class="input_box">
                            <label>Address <span>*</span></label>
                        <input type="text" required placeholder="Street address" name="address" value="{{Auth::user()->customer->address}}">
                        </div>
                        {{-- <div class="input_box">
                            <input type="text"  placeholder="Apartment, suite, unit etc. (optional)">
                        </div> --}}
                        <div class="input_box">
                            <label>District<span>*</span></label>
                            <input type="text" value="{{Auth::user()->customer->district}}" required name="district">
                        </div>
                        <div class="input_box">
                            <label>Postcode / ZIP <span>(Optional)</span></label>
                            <input type="text" name="postal_code">
                        </div>
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Phone <span>*</span></label>
                            <input type="text" required name="phone" value="{{Auth::user()->customer->phone}}">
                            </div>

                            <div class="input_box space_between">
                                <label>Email address <span>*</span></label>
                            <input type="email" name="email" value="{{Auth::user()->customer->email}}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Place Order</button>
               
                    {{-- <div class="create__account">
                        <div class="wn__accountbox">
                            <input class="input-checkbox" name="createaccount" value="1" type="checkbox">
                            <span>Create an account ?</span>
                        </div>
                        <div class="account__field">
                            <form action="#">
                                <label>Account password <span>*</span></label>
                                <input type="text" placeholder="password">
                            </form>
                        </div>
                    </div> --}}

                </div>

                {{-- <div class="customer_details mt--20">
                    <div class="differt__address">
                        <input name="ship_to_different_address" value="1" type="checkbox">
                        <span>Ship to a different address ?</span>
                    </div>
                    <div class="customar__field differt__form mt--40">
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>First name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box space_between">
                                <label>last name <span>*</span></label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Company name <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="input_box">
                            <label>Country<span>*</span></label>
                            <select class="select__option">
                                <option>Select a country…</option>
                                <option>Afghanistan</option>
                                <option>American Samoa</option>
                                <option>Anguilla</option>
                                <option>American Samoa</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                            </select>
                        </div>
                        <div class="input_box">
                            <label>Address <span>*</span></label>
                            <input type="text" placeholder="Street address">
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>
                        <div class="input_box">
                            <label>District<span>*</span></label>
                            <select class="select__option"> 
                                <option>Select a country…</option>
                                <option>Afghanistan</option>
                                <option>American Samoa</option>
                                <option>Anguilla</option>
                                <option>American Samoa</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                            </select>
                        </div>
                        <div class="input_box">
                            <label>Postcode / ZIP <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Phone <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box space_between">
                                <label>Email address <span>*</span></label>
                                <input type="email">
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                <div class="wn__order__box">
                    <h3 class="onder__title">Your order</h3>
                    <ul class="order__total">
                        <li>Product</li>
                        <li>Total</li>
                    </ul>
                    <ul class="order_product">
                        @forelse($items as $key=>$item)
                        
                    <li>{{$item->associatedModel->title}} ({{$item->price}}) × {{$item->quantity}}<span>BDT {{$item->price*$item->quantity}}</span></li>
                        @empty 

                        @endforelse
                        {{-- <li>Buscipit at magna × 1<span>BDT 48.00</span></li>
                        <li>Buscipit at magna × 1<span>BDT 48.00</span></li>
                        <li>Buscipit at magna × 1<span>BDT 48.00</span></li> --}}
                    </ul>
                    <ul class="shipping__method">
                        <li>Cart Subtotal <span>BDT {{$sub_total}}</span></li>
                        <li id="delivey_charge">Delivery Charge <span>BDT 50</span></li>
                        {{-- <li>Shipping 
                            <ul>
                                <li>
                                    <input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
                                    <label>Flat Rate: BDT 48.00</label>
                                </li>
                                <li>
                                    <input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
                                    <label>Flat Rate: BDT 48.00</label>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                    <ul class="total__amount">
                    <li>Order Total  <span id="order_total"> {{$sub_total}}</span></li>
                    </ul>
                </div>
                <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                    <div class="card">
                        <div class="card-header">
                            <h3>Purchase Type</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 ml-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="purchase_type" required type="radio" value="borrow_book" id="borrow_book" checked>
                                        <label class="form-check-label" for="borrow_book">
                                          Borrow Book (Get back 70% when return)
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input"  name="purchase_type" type="radio" value="full_purchase" id="full_purchase" >
                                        <label class="form-check-label" for="full_purchase">
                                          Full Purchase
                                        </label>
                                      </div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h3>Payment Methods</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 ml-3">
                                    <div class="form-check">
                                        <input class="form-check-input" name="payment_method" required type="radio" value="cash_on_delivery" id="cash_payment" checked>
                                        <label class="form-check-label" for="cash_payment">
                                    <img src="{{asset('frontend/images/logo/cash.png')}}" width="10%" alt="">
                                          Cash On Delivery
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input"  name="payment_method" type="radio" value="bkash" id="bkash_payment" >
                                        <label class="form-check-label" for="bkash_payment">
                                    <img src="{{asset('frontend/images/logo/bkash.png')}}" width="10%" alt="">
                                          Bkash Payment
                                        </label>
                                        
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input"  name="payment_method" type="radio" value="pickup_method" id="pickup_method" >
                                        <label class="form-check-label" for="pickup_method">
                                    <img src="{{asset('frontend/images/logo/pickup.png')}}" width="10%" alt="">
                                          Pickup Method
                                        </label>
                                      </div>
                                      <div class="form-group" id="transaction_no" style="display:none">
                                          <input type="text"  name="transaction_id" id="transaction_id" placeholder="Transaction ID" class="form-control">
                                      </div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="payment">
                        <div class="che__header" role="tab" id="headingOne">
                              <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>Direct Bank Transfer</span>
                              </a>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="payment-body">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</div>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="che__header" role="tab" id="headingTwo">
                              <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Cheque Payment</span>
                              </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="che__header" role="tab" id="headingThree">
                              <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>Cash on Delivery</span>
                              </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="payment-body">Pay with cash upon delivery.</div>
                        </div>
                    </div> --}}
                    {{-- <div class="payment">
                        <div class="che__header" role="tab" id="headingFour">
                              <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>PayPal <img src="{{asset('frontend')}}/images/icons/payment.png" alt="payment images"> </span>
                              </a>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="payment-body">Pay with cash upon delivery.</div>
                        </div>
                    </div> --}}
                </div>
            </form>
            </div>
        </div>
        @else 
        <div class="row">
            <div class="col-lg-12">
                <div class="wn_checkout_wrap">
                    <div class="checkout_info">
                        <span>Already Registered ?</span>
                        <a class="showlogin" href="JavaScript:void(0)">Click here to login</a>
                    </div>
                    <div class="checkout_info">
                        <span>Don't you have register yet ?</span>
                        <a class="" href="{{route('customer_register')}}" style="color: #e59285;
    font-size: 12px;">Click here to register</a>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <div class="checkout_login">
                    <form class="wn__checkout__form" action="{{route('login')}}" method="post">
                        @csrf 
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>

                            <div class="input__box">
                                <label>email <span>*</span></label>
                                <input type="text" name="email">
                                {{-- <small class="text-danger">{{$errors->first('email')}}</small> --}}
                            </div>

                            <div class="input__box">
                                <label>password <span>*</span></label>
                                <input type="password" name="password">
                                {{-- <small class="text-danger">{{$errors->first('password')}}</small> --}}
                            </div>
                            <div class="form__btn">
                                <button type="submit">Login</button>
                                {{-- <label class="label-for-checkbox">
                                    <input id="rememberme" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost your password?</a> --}}
                            </div>
                        </form>
                    </div>
                    {{-- <div class="checkout_info">
                        <span>Have a coupon? </span>
                        <a class="showcoupon" href="#">Click here to enter your code</a>
                    </div>
                    <div class="checkout_coupon">
                        <form action="#">
                            <div class="form__coupon">
                                <input type="text" placeholder="Coupon code">
                                <button>Apply coupon</button>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        @endif
        
    </div>
</section>

@endsection

@push('js')

    <script>
        // $('#defaultCheck2').click(function(){
        //         if($(this).prop("checked") == true){
        //         $('#transaction_no').show();
        //         $("#transaction_id").prop('required',true);
        //         $("#defaultCheck1").prop('required',false);
        //     }
        //     else if($(this).prop("checked") == false){
        //         $('#transaction_no').hide();
        //         $("#transaction_id").prop('required',false);
        //         $("#defaultCheck1").prop('required',true);
        //     }
        // });
        $(document).ready(()=>{
            
         total = $('#order_total').text();
         total_with_delivery_charge = (parseInt(total)+50);
        //  total_without_delivery_charge = (parseInt(total)-70);
        $('#order_total').text('BDT ' + total_with_delivery_charge);
        });
        $('#bkash_payment').click(function(){
            $('#transaction_no').show();
            $("#cash_payment").prop('required',false);
            $("#transaction_id").prop('required',true);
            $('#delivey_charge').show();
            $('#order_total').text('BDT ' + total_with_delivery_charge);
        });

        $('#cash_payment').click(function(){
            $('#transaction_no').hide();
            $("#transaction_id").prop('required',false);
            $('#delivey_charge').show();
            $('#order_total').text('BDT ' + total_with_delivery_charge);
            
        });

        $('#pickup_method').click(()=>{
            $('#transaction_no').hide();
            $('#delivey_charge').hide();
            $('#order_total').text('BDT ' + total);
        });
    </script>

@endpush



