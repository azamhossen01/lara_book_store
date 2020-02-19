@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--3 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Shopping Cart</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="index.html">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Shopping Cart</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                            <form action="{{route('update_cart_data')}}" method="post"> 
                            @csrf 
                    <div class="table-content wnro__table table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                       
                                <tbody id="add_to_cart2">
                                
                               
                                </tbody>
                            
                            
                        </table>
                    </div>
               
                <div class="cartbox__btn">
                    <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                        {{-- <li><a href="#">Coupon Code</a></li>
                        <li><a href="#">Apply Code</a></li> --}}
                        <li><button type="submit" class="btn btn-success">Update Cart</button></li>
                    <li><a href="{{route('checkout')}}">Check Out</a></li>

                    </form> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cartbox-total d-flex justify-content-between">
                        <ul class="cart__total__list">
                            <li>Cart total</li>
                            {{-- <li>Sub Total</li> --}}
                        </ul>
                        <ul class="cart__total__tk">
                            <li id="cart_total"></li>
                            {{-- <li>BDT 70</li> --}}
                        </ul>
                    </div>
                    <div class="cart__total__amount">
                        <span>Grand Total</span>
                        <span id="grand_total"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

@endsection

@push('js')
    <script>
         $(document).ready(function(){
            get_cart_info();
            get_total_on_edit();
    });

    function get_cart_info(){
        $.ajax({
            type : 'get',
            url : "{{route('get_cart_data')}}",
            dataType : 'json',
            success : function(data){
                console.log(data);
                var html = ``;
                $.each(data,function(key,value){
                    // console.log(value);
                    // console.log(value.associatedModel.image);
                    html += `
                    <tr>
                        <td class="product-thumbnail"><a href="#">
                        <img src="{{asset('images/books')}}/${value.associatedModel.image}" alt=""> 
                            
                        </a></td>
                        <td class="product-name"><a href="#">${value.associatedModel.title}</a></td>
                        <td class="product-price"><span class="amount">BDT ${value.price}</span></td>
                        <td class="product-quantity"><input type="number" name="qty[]" value="${value.quantity}"  onchange="get_sub_total(this.value,${key})"></td>
                        <input type="hidden" name="row_ids[]" value="${key}" />
                        <td class="product-subtotal" id="product_subtotal">BDT ${(value.quantity * value.price)}</td>
                        <td class="product-remove"><a href="#" onclick="delete_to_cart_from_edit(${key})">X</a></td>
                    </tr>
                `;
                });
                
                $('#add_to_cart2').html(html);
            }
        });
    }


    function delete_to_cart_from_edit(row_id){
        // alert(row_id);
        if(row_id){
            $.ajax({
                type : 'get',
                url : "{{route('delete_to_cart')}}",
                data : {row_id:row_id},
                success : function(data){
                    get_cart_info();
                    get_cart_data();
                    get_total_on_edit();
                }
            });
        }
    }

    function get_sub_total(qty,row_id){
        if(qty && row_id){
            $.ajax({
                type : 'get',
                url : "{{route('get_sub_total')}}",
                data : {qty:qty,row_id:row_id},
                success : function(data){
                    console.log(data);
                    $('#product_subtotal').text("BDT "+data);
                    get_total_on_edit();
                }
            });
        }
    }

    function get_total_on_edit(){
        $.ajax({
            type : 'get',
            url : "{{route('get_total')}}",
            success : function(data){
                console.log(data);
                
                $('#grand_total').text("BDT "+data);
                $('#cart_total').text("BDT "+data);
                
            }
        });
    }

    
    
    </script>
@endpush



