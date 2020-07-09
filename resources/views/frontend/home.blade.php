@extends('frontend.layouts.app')

@section('title','Book Store')

@section('slider')
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
    <!-- Start Single Slide -->
    <div class="slide animation__style10 bg-image--1 fullscreen align__center--left" style="background-image:url({{asset('frontend/images/slider1.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Easily <span>Buy & </span></h2>
                            <h2>Return <span>Book </span></h2>
                            <h2>from <span>Home </span></h2>
                               <a class="shopbtn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Slide -->
    <!-- Start Single Slide -->
    <div class="slide animation__style10 bg-image--7 fullscreen align__center--left" style="background-image:url({{asset('frontend/images/slider2.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Get <span>70% </span></h2>
                            <h2>Back <span>When </span></h2>
                            <h2>Return <span>Book </span></h2>
                               <a class="shopbtn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide animation__style10 bg-image--7 fullscreen align__center--left" style="background-image:url({{asset('frontend/images/slider3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Get <span>All </span></h2>
                            <h2>Kinds of <span>Books </span></h2>
                            <h2>from Us <span> Order Online</span></h2>
                               <a class="shopbtn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Slide -->
</div>
@endsection

@section('content')

<section class="wn__product__area brown--color pt--80  pb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">latest <span class="color--theme">Books</span></h2>
                    <p>These are new books in our collection.</p>
                </div>
            </div>
        </div>
        <!-- Start Single Tab Content -->
        <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
            @forelse($recents as $book)
            <div class="product product__style--3">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                        <a class="first__img" href="{{route('single_product',$book->id)}}">
                            <img src="{{asset('images/books/'.$book->image)}}" alt="" width="270px" height="340px">
                        </a>
                        <a class="second__img animation1" href="{{route('single_product',$book->id)}}">
                            <img src="{{asset('images/books/'.$book->image)}}" alt="" width="270px" height="340px">
                        </a>
                        <div class="hot__box">
                            <span class="hot-label">BEST SALLER</span>
                        </div>
                    </div>
                    <div class="product__content content--center">
                    <h4><a href="{{route('single_product',$book->id)}}">{{$book->title}}</a></h4>
                        <ul class="prize d-flex">
                        <li>BDT {{$book->price}}</li>
                        <li class="old_prize">BDT {{$book->discounted_price}}</li>
                        </ul>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="JavaScript:Void(0);" onclick="add_to_cart({{$book->id}})"><i class="bi bi-shopping-bag4"></i></a></li>
                                    <!-- <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li> -->
                                    <!-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> -->
                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal" onclick="show_product_details({{$book->id}})"><i class="bi bi-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="product__hover--content">
                            <ul class="rating d-flex">
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
           @empty 
           @endforelse
        </div>
        <!-- End Single Tab Content -->
    </div>
</section>
<!-- Start BEst Seller Area -->
<!-- Start NEwsletter Area -->
<section class="wn__newsletter__area bg-image--2 bg-info" style="background-image:url({{asset('frontend/images/banner1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                <div class="section__title text-center">
                    <h2>Stay With Us</h2>
                </div>
                <div class="newsletter__block text-center">
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <form action="#">
                        <div class="newsletter__box">
                            <input type="email" placeholder="Enter your e-mail">
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End NEwsletter Area -->
<!-- Start Best Seller Area -->
<section class="wn__bestseller__area bg--white pt--80  pb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">All <span class="color--theme">Books</span></h2>
                    <p>All kinds of Computer Science and Engineering(CSE) books are available here with cheap price.</p>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="product__nav nav justify-content-center" role="tablist">
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                   @forelse($categories as $category)
                <a class="nav-item nav-link" data-toggle="tab" href="#nav-{{$category->id}}" role="tab">{{$category->name}}</a>
                  @empty 
                  @endforelse
                    {{-- <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a> --}}

                </div>
            </div>
        </div>
        <div class="tab__container mt--60">
            <!-- Start Single Tab Content -->
            <div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    @forelse($books as $book)
                    <div class="single__product">
                        
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="{{route('single_product',$book->id)}}">
                                    <img src="{{asset('images/books/'.$book->image)}}" alt="" width="270px" height="340px">    
                                       
                                    </a>
                                    <a class="second__img animation1" href="{{route('single_product',$book->id)}}">
                                    <img src="{{asset('images/books/'.$book->image)}}" alt="" width="270px" height="340px">    
                                        {{-- <img src="{{asset('frontend')}}/images/books/9.jpg" alt="product image"> --}}
                                    </a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center content--center">
                                <h4><a href="{{route('single_product',$book->id)}}">{{$book->title}}</a></h4>
                                    <ul class="prize d-flex">
                                    <li>BDT {{$book->price}}</li>
                                    <li class="old_prize">BDT {{$book->discounted_price}}</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                            <li><a class="cart" href="JavaScript:Void(0);" onclick="add_to_cart({{$book->id}})"><i class="bi bi-shopping-bag4"></i></a></li>
                                            <!-- <li><a class="wishlist" href="{{route('wishlist')}}"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> -->
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal" onclick="show_product_details({{$book->id}})"><i class="bi bi-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Product -->
                    </div>
                    @empty 
                    @endforelse
                </div>
            </div>
           
     @forelse($categories as $category)

        <div class="row single__tab tab-pane fade" id="nav-{{$category->id}}" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    @forelse($category->books as $book)
                    <div class="single__product">
                      
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                <a class="first__img" href="{{route('single_product',$book->id)}}"><img src="{{asset('images/books/'.$book->image)}}" alt="product image" width="270px" height="340px"></a>
                                    <a class="second__img animation1" href="{{route('single_product',$book->id)}}"><img src="{{asset('images/books/'.$book->image)}}" alt="product image" width="270px" height="340px"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                <h4><a href="{{route('single_product',$book->id)}}">{{$book->name}}</a></h4>
                                    <ul class="prize d-flex">
                                    <li>BDT {{$book->price}}</li>
                                    <li class="old_prize">BDT {{$book->discounted_price}}</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="#" onclick="add_to_cart({{$book->id}})"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal" onclick="show_product_details({{$book->id}})"><i class="bi bi-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__hover--content">
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                    @empty 
                    @endforelse
                  
                </div>
            </div>

            @empty 
            @endforelse
           
        </div>
        
    </div>
</section>



















<!-- Start BEst Seller Area -->
<!-- Start Recent Post Area -->
<section class="wn__recent__post bg--gray ptb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">Our <span class="color--theme">News</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            @forelse($blogs as $key=>$blog)
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="post__itam">
                    <div class="content">
                    <h3><a href="{{route('blog_details',$blog->id)}}">{{$blog->title}} </a></h3>
                    <p>{{str_limit($blog->description,200)}}</p>
                        <div class="post__time">
                        <span class="day">{{$blog->created_at->format('M d, Y')}}</span>
                            {{-- <span class="day">Dec 06, 18</span> --}}
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                <li><a href="{{route('blog_details',$blog->id)}}"><i class="bi bi-chat-bubble"></i>{{count($blog->comments)}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty 
            <h3>No News Available</h3>
            @endforelse 
            {{-- <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="post__itam">
                    <div class="content">
                        <h3><a href="blog-details.html">Reading has a signficant info  number of benefits</a></h3>
                        <p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
                        <div class="post__time">
                            <span class="day">Mar 08, 18</span>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                    <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="post__itam">
                    <div class="content">
                        <h3><a href="blog-details.html">The London Book Fair is to be packed with exciting </a></h3>
                        <p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
                        <div class="post__time">
                            <span class="day">Nov 11, 18</span>
                            <div class="post-meta">
                                <ul>
                                    <li><a href="#"><i class="bi bi-love"></i>72</a></li>
                                    <li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- End Recent Post Area -->
<!-- Best Sale Area -->
<section class="best-seel-area pt--80 pb--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center pb--50">
                    <h2 class="title__be--2">Best <span class="color--theme">Seller </span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider center">
        @forelse($books as $book)
        <div class="product product__style--3">
            <div class="product__thumb">
                <a class="first__img" href="{{route('single_product',$book->id)}}">
                <img src="{{asset('images/books/'.$book->image)}}" alt="" width="304px" height="384px">
                </a>
            </div>
            <div class="product__content content--center">
                <div class="action">
                    <div class="actions_inner">
                        <ul class="add_to_links">
                        <li><a class="cart" href="javascript:void(0)" onclick="add_to_cart({{$book->id}})"><i class="bi bi-shopping-bag4"></i></a></li>
                        <!-- <li><a class="wishlist" href="{{route('wishlist')}}"><i class="bi bi-shopping-cart-full"></i></a></li>
                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> -->
                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal" onclick="show_product_details({{$book->id}})"><i class="bi bi-search"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="product__hover--content">
                    <ul class="rating d-flex">
                        <li class="on"><i class="fa fa-star-o"></i></li>
                        <li class="on"><i class="fa fa-star-o"></i></li>
                        <li class="on"><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                </div> -->
            </div>
        </div>
        @empty 
        @endforelse
    </div>
</section>

@endsection


@push('js')
<script>
    // $(document).ready(function(){
    //     get_cart_data();
    // });



    // function get_cart_data(){
    //     $.ajax({
    //         type : 'get',
    //         url : "{{route('get_cart_data')}}",
    //         dataType : 'json',
    //         success : function(data){

    //             var html = ``;
    //             $.each(data,function(key,value){
    //                 // console.log(value);
    //                 // console.log(value.associatedModel.image);
    //                 html += `
    //                 <div class="item01 d-flex">
    //                     <div class="thumb">
    //                         <a href="product-details.html"><img src="{{asset('images/books')}}/${value.associatedModel.image}" alt="product images"></a>
    //                     </div>
    //                     <div class="content">
    //                         <h6><a href="#">${value.associatedModel.title}</a></h6>
    //                         <span class="prize">BDT ${value.associatedModel.price}</span>
    //                         <div class="product_prize d-flex justify-content-between">
    //                             <span class="qun">Qty :</span><span><input type="number" id="quantity" value="${value.quantity}" ></span>
    //                             <ul class="d-flex justify-content-end">
    //                                 <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
    //                                 <li><a href="#"><i class="zmdi zmdi-delete" onclick="delete_to_cart(${key})"></i></a></li>
    //                             </ul>
    //                         </div>
    //                     </div>
    //                 </div>
    //             `;
    //             });
                
    //             $('#add_to_cart').html(html);
    //         }
    //     });
    // }
       

    // function add_to_cart(book_id,qty=false){
    //     if(book_id){
    //         $.ajax({
    //             type : 'get',
    //             url : "{{route('add_to_cart')}}",
    //             data : {book_id:book_id},
    //             success : function(data){
    //                 get_cart_data();
    //                 console.log(data);
    //             }
    //         });
    //     }
    // }

    // function delete_to_cart(row_id){
    //     // alert(row_id);
    //     if(row_id){
    //         $.ajax({
    //             type : 'get',
    //             url : "{{route('delete_to_cart')}}",
    //             data : {row_id:row_id},
    //             success : function(data){
    //                 // alert(data);
    //                 get_cart_data();
    //             }
    //         });
    //     }
    // }
</script>
@endpush



