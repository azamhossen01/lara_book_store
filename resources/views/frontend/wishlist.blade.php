@extends('frontend.layouts.app')

@section('title','Wishlist')


@section('content')

<div class="ht__bradcaump__area bg-image--5 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Wishlist</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="index.html">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Wishlist</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="wishlist-area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table wnro__table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"><span class="nobr">Product Name</span></th>
                                        <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                        <th class="product-add-to-cart"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#">
                                            {{-- <img src="{{asset('frontend')}}/images/product/sm-3/1.jpg" alt=""> --}}
                                            <img src="http://demo.devitems.com/boighor-v3/images/product/sm-3/1.jpg" alt="">
                                        </a></td>
                                        <td class="product-name"><a href="#">Natoque penatibus</a></td>
                                        <td class="product-price"><span class="amount">BDT 165.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#">
                                        <img src="http://demo.devitems.com/boighor-v3/images/product/sm-3/2.jpg" alt="">    
                                            {{-- <img src="{{asset('frontend')}}/images/product/sm-3/2.jpg" alt=""> --}}
                                        </a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">BDT 50.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#">
                                        <img src="http://demo.devitems.com/boighor-v3/images/product/sm-3/3.jpg" alt="">    
                                            {{-- <img src="{{asset('frontend')}}/images/product/sm-3/3.jpg" alt=""> --}}
                                        </a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">BDT 65.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



