<header id="wn__header" class="header__area header__absolute sticky__header bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="{{route('/')}}">
                        <img src="{{asset('frontend')}}/images/logo/logo.png" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="{{route('/')}}" class="text-light">Home</a></li>
                        <li class="drop with--one--item"><a href="{{route('about')}}" class="text-light">About Us</a>
                        </li>

                        <li class="drop"><a href="JavaScript:Void(0);" class="text-light">Books</a>
                            <div class="megamenu mega03">
                                <ul class="item item03">

                                    <li class="title">Categories</li>
                                    @forelse(App\Category::where('status',1)->get()->splice(0,6) as $category)
                                    <li><a href="{{route('shop_grid',$category->id)}}">{{$category->name}} </a></li>
                                    @empty

                                    @endforelse
                                </ul>

                                <ul class="item item03">

                                    <li class="title">Categories</li>
                                    @forelse(App\Category::where('status',1)->get()->splice(6,6) as $category)
                                    <li><a href="{{route('shop_grid',$category->id)}}">{{$category->name}} </a></li>
                                    @empty

                                    @endforelse
                                </ul>

                                <ul class="item item03">

                                    <li class="title">Categories</li>
                                    @forelse(App\Category::where('status',1)->get()->splice(12,5) as $category)
                                    <li><a href="{{route('shop_grid',$category->id)}}">{{$category->name}} </a></li>
                                    <li><a href="{{route('all_categories')}}">All Categories</a></li>
                                    @empty

                                    @endforelse
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="JavaScript:Void(0);" class="text-light">Writer</a>
                            <div class="megamenu mega02">
                                <ul class="item item02">
                                    <li class="title">All Writers</li>
                                    @forelse(App\Writer::where('status',1)->get()->splice(0,10) as $writer)
                                    <li><a href="{{route('writer_books',$writer->id)}}">{{$writer->name}}</a></li>
                                    @empty
                                    <li><a href="JavaScript:Void(0);">No Writer Available</a></li>
                                    @endforelse
                                </ul>
                                <ul class="item item02">
                                    <li class="title">All Writers</li>
                                    @forelse(App\Writer::where('status',1)->get()->splice(10,9) as $writer)
                                    <li><a href="{{route('writer_books',$writer->id)}}">{{$writer->name}}</a></li>
                                    <li><a href="{{route('all_writers')}}">View All Writers</a></li>
                                    @empty
                                    <li><a href="JavaScript:Void(0);">No Writer Available</a></li>
                                    @endforelse
                                </ul>
                                {{-- <ul class="item item02">
                                    <li class="title">More For Kids</li>
                                    <li><a href="{{route('shop_grid')}}">B&N Educators</a>
                        </li>
                        <li><a href="{{route('shop_grid')}}">B&N Kids' Club</a></li>
                        <li><a href="{{route('shop_grid')}}">Kids' Music</a></li>
                        <li><a href="{{route('shop_grid')}}">Toys & Games</a></li>
                        <li><a href="{{route('shop_grid')}}">Hoodies</a></li>
                    </ul> --}}
            </div>
            </li>

            <li class="drop"><a href="{{route('blog')}}" class="text-light">News</a>

            </li>
            <li><a href="{{route('contact')}}" class="text-light">Contact</a></li>
            <li class="drop"><a href="JavaScript:Void(0);" class="text-light">Account</a>
                <div class="megamenu dropdown">
                    <ul class="item item01">
                        @if(Auth::check() == true)
                        <li><a href="{{route('book_return')}}">Book Return</a></li>
                        <li><a href="{{route('order_history')}}">Order History</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li><a href="{{route('customer_login')}}">Login</a></li>
                        <li><a href="{{route('customer_register')}}">Register</a></li>
                        @endif
                    </ul>
                </div>
            </li>
            <!-- @if(Auth::check() == true)
                    <li><a href="{{route('book_return')}}" class="text-light">Return</a></li>
                    <li><a href="{{route('order_history')}}" class="text-light">Orders</a></li>
                    @endif -->

            </ul>
            </nav>
        </div>
        <div class="col-md-6 col-sm-6 col-6 col-lg-2">
            <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                <li class="shop_search"><a class="search__active" href="JavaScript:Void(0);"><i style="margin-top:35px"
                            class="fa fa-search fa-2x text-light"></i></a></li>
                <li class="wishlist"><a href="JavaScript:Void(0);" class="text-light"></a></li>
                <li class="shopcart"><i class="fa fa-shopping-cart fa-2x text-light"></i><a class="cartbox_active"
                        href="JavaScript:Void(0);"><span class="product_qun" id="product_qun"></span></a>
                    <!-- Start Shopping Cart -->
                    <div class="block-minicart minicart__active"
                        style="border:1px solid black;height:500px;overflow:scroll;overflow-y:scroll;overflow-x:hidden;">

                        <div class="minicart-content-wrapper" id="jamal">
                            <div class="micart__close">
                                <span>close</span>

                            </div>
                            <div class="items-total d-flex justify-content-between">
                                <span id="cart_items"></span>
                                <span>Cart Subtotal</span>
                            </div>
                            <div class="total_amount text-right">
                                <span id="cart_subtotal"> </span>
                            </div>
                            <div class="mini_action checkout">
                                <a class="checkout__btn" href="{{route('checkout')}}">Go to Checkout</a>
                            </div>
                            <div class="single__items">
                                <div class="miniproduct" id="add_to_cart">


                                </div>
                            </div>
                            <div class="mini_action cart">
                                <a class="cart__btn" href="{{route('cart')}}">View and edit cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Shopping Cart -->
                </li>
                {{-- <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Currency</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">USD - US Dollar</span>
                                            <ul class="switcher-dropdown">
                                                <li>GBP - British Pound Sterling</li>
                                                <li>EUR - Euro</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Language</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">English01</span>
                                            <ul class="switcher-dropdown">
                                                <li>English02</li>
                                                <li>English03</li>
                                                <li>English04</li>
                                                <li>English05</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>Select Store</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <span class="currency-trigger">Fashion Store</span>
                                            <ul class="switcher-dropdown">
                                                <li>Furniture</li>
                                                <li>Shoes</li>
                                                <li>Speaker Store</li>
                                                <li>Furniture</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>My Account</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="#">Compare Product</a></span>
                                                <span><a href="#">My Account</a></span>
                                                <span><a href="#">My Wishlist</a></span>
                                                <span><a href="#">Sign In</a></span>
                                                <span><a href="#">Create An Account</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
            </ul>
        </div>
    </div>
    <!-- Start Mobile Menu -->
    <div class="row d-none">
        <div class="col-lg-12 d-none">
            <nav class="mobilemenu__nav">
                <ul class="meninmenu">
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li class="drop"><a href="JavaScript:Void(0);">Books</a>
                        <ul>
                            @forelse(App\Category::where('status',1)->get() as $category)
                            <li><a href="{{route('shop_grid',$category->id)}}">{{$category->name}} </a></li>
                            @empty

                            @endforelse
                        </ul>
                    </li>

                    <li class="drop"><a href="JavaScript:Void(0);">Writer</a>
                        <ul>

                            @forelse(App\Writer::where('status',1)->get() as $writer)
                            <li><a href="{{route('writer_books',$writer->id)}}">{{$writer->name}}</a></li>
                            @empty
                            <li><a href="JavaScript:Void(0);">No Writer Available</a></li>
                            @endforelse
                        </ul>
                    </li>


                    <li><a href="{{route('blog')}}">News</a>
                        {{-- <ul>
                                <li><a href="{{route('blog')}}">Blog Page</a></li>
                    <li><a href="{{route('blog_details')}}">Blog Details</a></li>
                </ul> --}}
                </li>

                <li><a href="{{route('contact')}}">Contact</a></li>
                <li class="drop"><a href="{{route('/')}}">Account</a>
                    @if(Auth::check() == true)
                    <ul>
                        <li><a href="{{route('book_return')}}">Book Return</a></li>
                        <li><a href="{{route('order_history')}}">Order History</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li><a href="{{route('customer_login')}}">Login</a></li>
                        <li><a href="{{route('customer_register')}}">Register</a></li>
                    </ul>
                    @endif
                    
                </li>
                @if(Auth::check() == true)
                <li><a href="{{route('order_history')}}" class="text-light">Orders</a></li>
                <li><a href="{{route('book_return')}}" class="text-light">Book Return</a></li>
                @endif
                </ul>
            </nav>
        </div>
    </div>
    <!-- End Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none">
    </div>
    <!-- Mobile Menu -->
    </div>
</header>
