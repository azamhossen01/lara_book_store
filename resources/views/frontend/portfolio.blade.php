@extends('frontend.layouts.app')

@section('title','Portfolio')


@section('content')

<div class="ht__bradcaump__area bg-image--6" style="background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-865109088-1548970937.jpg?crop=1.00xw:0.752xh;0,0.248xh&resize=480:*')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Portfolio</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="index.html">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Portfolio</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Portfolio Area -->
<section class="wn__portfolio__area gallery__masonry__activation bg--white mt--40 pb--100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery__menu">
                    <button data-filter="*" class="is-checked">Filter - All</button>
                    <button data-filter=".cat--1">Company News</button>
                    <button data-filter=".cat--2">Computers</button>
                    <button data-filter=".cat--3">General News</button>
                    <button data-filter=".cat--4">Hipster Content</button>
                    <button data-filter=".cat--5">Just Food</button>
                  </div>
            </div>
        </div>
        <div class="row masonry__wrap">
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--1">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                           <img src="https://www.desicomments.com/wp-content/uploads/2017/01/Awesome-World-Tourism-Day-Image-600x338.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/1.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://www.desicomments.com/wp-content/uploads/2017/01/Awesome-World-Tourism-Day-Image-600x338.jpg" data-lightbox="grportimg" data-title="My caption">
                                <i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                            <img src="https://images.livemint.com/img/2019/05/31/600x338/e4c6bcca-82af-11e9-8ad3-51ef53c2e321_1559272818773_1559273044630.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/2.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://images.livemint.com/img/2019/05/31/600x338/e4c6bcca-82af-11e9-8ad3-51ef53c2e321_1559272818773_1559273044630.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                           <img src="https://wbhm.org/media/2019/09/Ruffner_Mountain-600x338.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/3.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://wbhm.org/media/2019/09/Ruffner_Mountain-600x338.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                         <img src="https://i2.wp.com/thewatershedfarm.com/wp-content/uploads/2018/09/Grounding-Cord-Meditation-600x338.png?resize=600%2C338" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/4.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://i2.wp.com/thewatershedfarm.com/wp-content/uploads/2018/09/Grounding-Cord-Meditation-600x338.png?resize=600%2C338" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                            <img src="https://imageresizer.static9.net.au/ZCP9RI8_Ck7gDT5gptf1x0MgaCo=/600x338/smart/https%3A%2F%2Fprod.static9.net.au%2F_%2Fmedia%2FNetwork%2FImages%2F2017%2F12%2F22%2F10%2F45%2F171222forceofnature.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/5.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://imageresizer.static9.net.au/ZCP9RI8_Ck7gDT5gptf1x0MgaCo=/600x338/smart/https%3A%2F%2Fprod.static9.net.au%2F_%2Fmedia%2FNetwork%2FImages%2F2017%2F12%2F22%2F10%2F45%2F171222forceofnature.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                           <img src="https://www.spiralnature.com/wp-content/uploads/Five-Meditations-on-Death-by-Francois-Cheng-600x338.png?x43341" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/6.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://www.spiralnature.com/wp-content/uploads/Five-Meditations-on-Death-by-Francois-Cheng-600x338.png?x43341" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                            <img src="https://23pxcp3u31lgiybw92v8rma1-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/Inspirationheader-600x338.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/7.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://23pxcp3u31lgiybw92v8rma1-wpengine.netdna-ssl.com/wp-content/uploads/2019/04/Inspirationheader-600x338.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                         <img src="https://nosycrow.com/wp-content/uploads/2019/12/The-Monster-in-the-Lake-Twitter-Card-600x338.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/8.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://nosycrow.com/wp-content/uploads/2019/12/The-Monster-in-the-Lake-Twitter-Card-600x338.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                         <img src="https://cdn3.whatculture.com/images/2015/04/bag-of-Bones-600x338.jpg" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/9.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://cdn3.whatculture.com/images/2015/04/bag-of-Bones-600x338.jpg" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                           <img src="https://cdn.flickeringmyth.com/wp-content/uploads/2019/06/BlairWitch_KeyArt_Main-600x338.png" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/10.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://cdn.flickeringmyth.com/wp-content/uploads/2019/06/BlairWitch_KeyArt_Main-600x338.png" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                          <img src="https://www.paperbackparis.com/wp-content/uploads/2018/04/nonfiction-books-to-stimulate-learning-600x338.png" alt="">
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/5.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://www.paperbackparis.com/wp-content/uploads/2018/04/nonfiction-books-to-stimulate-learning-600x338.png" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
            <!-- Start Single Portfolio -->
            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
                <div class="portfolio">
                    <div class="thumb">
                        <a href="portfolio-details.html">
                        <img src="https://bradkay60.files.wordpress.com/2017/05/pandora-commericial-600x338.png?w=584" alt=""> 
                            {{-- <img src="{{asset('frontend')}}/images/portfolio/md-img/7.jpg" alt="portfolio images"> --}}
                        </a>
                        <div class="search">
                            <a href="https://bradkay60.files.wordpress.com/2017/05/pandora-commericial-600x338.png?w=584" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
                        </div>
                        <div class="link">
                            <a href="portfolio-details.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h6><a href="portfolio-details.html">Coffee & Cookie Time</a></h6>
                        <p>road theme</p>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
        </div>
    </div>
</section>

@endsection



