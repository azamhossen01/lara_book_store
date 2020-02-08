<header id="wn__header" class="header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('frontend')}}/images/logo/logo.png" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                    <li class="drop with--one--item"><a href="{{route('/')}}">Home</a></li>
                        <li class="drop"><a href="#">Shop</a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    <li class="title">Shop Layout</li>
                                <li><a href="{{route('shop_grid')}}">Shop Grid</a></li>
                                <li><a href="{{route('single_product')}}">Single Product</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Shop Page</li>
                                <li><a href="{{route('my_account')}}">My Account</a></li>
                                <li><a href="{{route('cart')}}">Cart Page</a></li>
                                <li><a href="{{route('checkout')}}">Checkout Page</a></li>
                                <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                <li><a href="{{route('error404')}}">404 Page</a></li>
                                <li><a href="{{route('faq')}}">Faq Page</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Bargain Books</li>
                                    <li><a href="{{route('shop_grid')}}">Bargain Bestsellers</a></li>
                                    <li><a href="{{route('shop_grid')}}">Activity Kits</a></li>
                                    <li><a href="{{route('shop_grid')}}">B&N Classics</a></li>
                                    <li><a href="{{route('shop_grid')}}">Books Under $5</a></li>
                                    <li><a href="{{route('shop_grid')}}">Bargain Books</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="{{route('shop_grid')}}">Books</a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    <li class="title">Categories</li>
                                    <li><a href="{{route('shop_grid')}}">Biography </a></li>
                                    <li><a href="{{route('shop_grid')}}">Business </a></li>
                                    <li><a href="{{route('shop_grid')}}">Cookbooks </a></li>
                                    <li><a href="{{route('shop_grid')}}">Health & Fitness </a></li>
                                    <li><a href="{{route('shop_grid')}}">History </a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Customer Favourite</li>
                                    <li><a href="{{route('shop_grid')}}">Mystery</a></li>
                                    <li><a href="{{route('shop_grid')}}">Religion & Inspiration</a></li>
                                    <li><a href="{{route('shop_grid')}}">Romance</a></li>
                                    <li><a href="{{route('shop_grid')}}">Fiction/Fantasy</a></li>
                                    <li><a href="{{route('shop_grid')}}">Sleeveless</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">Collections</li>
                                    <li><a href="{{route('shop_grid')}}">Science </a></li>
                                    <li><a href="{{route('shop_grid')}}">Fiction/Fantasy</a></li>
                                    <li><a href="{{route('shop_grid')}}">Self-Improvemen</a></li>
                                    <li><a href="{{route('shop_grid')}}">Home & Garden</a></li>
                                    <li><a href="{{route('shop_grid')}}">Humor Books</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="{{route('shop_grid')}}">Kids</a>
                            <div class="megamenu mega02">
                                <ul class="item item02">
                                    <li class="title">Top Collections</li>
                                    <li><a href="{{route('shop_grid')}}">American Girl</a></li>
                                    <li><a href="{{route('shop_grid')}}">Diary Wimpy Kid</a></li>
                                    <li><a href="{{route('shop_grid')}}">Finding Dory</a></li>
                                    <li><a href="{{route('shop_grid')}}">Harry Potter</a></li>
                                    <li><a href="{{route('shop_grid')}}">Land of Stories</a></li>
                                </ul>
                                <ul class="item item02">
                                    <li class="title">More For Kids</li>
                                    <li><a href="{{route('shop_grid')}}">B&N Educators</a></li>
                                    <li><a href="{{route('shop_grid')}}">B&N Kids' Club</a></li>
                                    <li><a href="{{route('shop_grid')}}">Kids' Music</a></li>
                                    <li><a href="{{route('shop_grid')}}">Toys & Games</a></li>
                                    <li><a href="{{route('shop_grid')}}">Hoodies</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="#">Pages</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                <li><a href="{{route('about')}}">About Page</a></li>
                                    <li class="label2"><a href="{{route('portfolio')}}">Portfolio</a>
                                        <ul>
                                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{route('portfolio_details')}}">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('my_account')}}">My Account</a></li>
                                    <li><a href="{{route('cart')}}">Cart Page</a></li>
                                    <li><a href="{{route('checkout')}}">Checkout Page</a></li>
                                    <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                    <li><a href="{{route('error404')}}">404 Page</a></li>
                                    <li><a href="{{route('faq')}}">Faq Page</a></li>
                                    <li><a href="{{route('team')}}">Team Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="{{route('blog')}}">Blog</a>
                            <div class="megamenu dropdown">
                                <ul class="item item01">
                                    <li><a href="{{route('blog')}}">Blog Page</a></li>
                                <li><a href="{{route('blog_details')}}">Blog Details</a></li>
                                </ul>
                            </div>
                        </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="shop_search"><a class="search__active" href="#"></a></li>
                    <li class="wishlist"><a href="#"></a></li>
                    <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
                        <!-- Start Shopping Cart -->
                        <div class="block-minicart minicart__active">
                            <div class="minicart-content-wrapper">
                                <div class="micart__close">
                                    <span>close</span>
                                </div>
                                <div class="items-total d-flex justify-content-between">
                                    <span>3 items</span>
                                    <span>Cart Subtotal</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span>$66.00</span>
                                </div>
                                <div class="mini_action checkout">
                                    <a class="checkout__btn" href="cart.html">Go to Checkout</a>
                                </div>
                                <div class="single__items">
                                    <div class="miniproduct">
                                        <div class="item01 d-flex">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="{{asset('frontend')}}/images/product/sm-img/1.jpg" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
                                                <span class="prize">$30.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 01</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item01 d-flex mt--20">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="{{asset('frontend')}}/images/product/sm-img/3.jpg" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Impulse Duffle</a></h6>
                                                <span class="prize">$40.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 03</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item01 d-flex mt--20">
                                            <div class="thumb">
                                                <a href="product-details.html"><img src="{{asset('frontend')}}/images/product/sm-img/2.jpg" alt="product images"></a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Compete Track Tote</a></h6>
                                                <span class="prize">$40.00</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: 03</span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_action cart">
                                    <a class="cart__btn" href="cart.html">View and edit cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Shopping Cart -->
                    </li>
                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
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
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="{{route('about')}}">About Page</a></li>
                                <li><a href="{{route('portfolio')}}">Portfolio</a>
                                    <ul>
                                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{route('portfolio_details')}}">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('my_account')}}">My Account</a></li>
                                <li><a href="{{route('cart')}}">Cart Page</a></li>
                                <li><a href="{{route('checkout')}}">Checkout Page</a></li>
                                <li><a href="{{route('wishlist')}}">Wishlist Page</a></li>
                                <li><a href="{{route('error404')}}">404 Page</a></li>
                                <li><a href="{{route('faq')}}">Faq Page</a></li>
                                <li><a href="{{route('team')}}">Team Page</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('shop_grid')}}">Shop</a>
                            <ul>
                                <li><a href="{{route('shop_grid')}}">Shop Grid</a></li>
                                <li><a href="{{route('single_product')}}">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('blog')}}">Blog</a>
                            <ul>
                                <li><a href="{{route('blog')}}">Blog Page</a></li>
                                <li><a href="{{route('blog_details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
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