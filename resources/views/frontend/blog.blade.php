@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger" style="background-image:url('https://image.shutterstock.com/image-photo/old-book-open-on-wooden-260nw-286415012.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">News Page</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="index.html">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Blog</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Blog Area -->
<div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="blog-page">
                    <div class="page__header">
                        <h2>Category Archives: HTML</h2>
                    </div>
                    @forelse($blogs as $blog)
                    <article class="blog__post d-flex flex-wrap">
                        <div class="thumb">
                            <a href="{{route('blog_details',$blog->id)}}">
                            <img src="{{asset('images/blogs/'.$blog->image)}}" alt="">
                            </a>
                        </div>
                        <div class="content">
                        <h4><a href="{{route('blog_details',$blog->id)}}">{{$blog->title}}</a></h4>
                            <ul class="post__meta">
                            <li>Posts by : <a href="{{route('blog_details',$blog->id)}}">Admin</a></li>
                                <li class="post_separator">/</li>
                            <li>{{$blog->created_at->format('M d, Y')}}</li>
                            </ul>
                        <p>{{str_limit($blog->description,150)}}</p>
                            <div class="blog__btn">
                                <a href="{{route('blog_details',$blog->id)}}">read more</a>
                            </div>
                        </div>
                    </article>
                    @empty 
                    <h3>No News</h3>
                    @endforelse
                    
                   
                   
                </div>
                <ul class="wn__pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                <div class="wn__sidebar">
                    <!-- Start Single Widget -->
                    <aside class="widget search_widget">
                        <h3 class="widget-title">Search</h3>
                        <form action="#">
                            <div class="form-input">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </aside>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <aside class="widget recent_widget">
                        <h3 class="widget-title">Recent</h3>
                        <div class="recent-posts">
                            <ul>
                                @forelse($recent_blogs as $key=>$r_blog)
                                <li>
                                    <div class="post-wrapper d-flex">
                                        <div class="thumb">
                                            <a href="{{route('blog_details',$r_blog->id)}}">
                                            <img src="{{asset('images/blogs/'.$r_blog->image)}}" width="100%" alt="">    
                                              
                                            </a>
                                        </div>
                                        <div class="content">
                                        <h4><a href="{{route('blog_details',$r_blog->id)}}">{{$r_blog->title}}</a></h4>
                                        <p>	{{$r_blog->created_at->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                </li>
                                @empty 
                                <li>No Recent News</li>
                                @endforelse
                                
                            </ul>
                        </div>
                    </aside>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <aside class="widget comment_widget">
                        <h3 class="widget-title">Comments</h3>
                        <ul>
                            <li>
                                <div class="post-wrapper">
                                    <div class="thumb">
                                      <img src="http://demo.devitems.com/boighor-v3/images/blog/comment/1.jpeg" alt="">
                                        {{-- <img src="images/blog/comment/1.jpeg" alt="Comment images"> --}}
                                    </div>
                                    <div class="content">
                                        <p>demo says:</p>
                                        <a href="#">Quisque semper nunc vitae...</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-wrapper">
                                    <div class="thumb">
                                        <img src="http://demo.devitems.com/boighor-v3/images/blog/comment/1.jpeg" alt="">
                                        {{-- <img src="images/blog/comment/1.jpeg" alt="Comment images"> --}}
                                    </div>
                                    <div class="content">
                                        <p>Admin says:</p>
                                        <a href="#">Curabitur aliquet pulvinar...</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-wrapper">
                                    <div class="thumb">
                                        <img src="http://demo.devitems.com/boighor-v3/images/blog/comment/1.jpeg" alt="">
                                        {{-- <img src="images/blog/comment/1.jpeg" alt="Comment images"> --}}
                                    </div>
                                    <div class="content">
                                        <p>Irin says:</p>
                                        <a href="#">Quisque semper nunc vitae...</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-wrapper">
                                    <div class="thumb">
                                        <img src="http://demo.devitems.com/boighor-v3/images/blog/comment/1.jpeg" alt="">
                                        {{-- <img src="images/blog/comment/1.jpeg" alt="Comment images"> --}}
                                    </div>
                                    <div class="content">
                                        <p>Boighor says:</p>
                                        <a href="#">Quisque semper nunc vitae...</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post-wrapper">
                                    <div class="thumb">
                                        <img src="http://demo.devitems.com/boighor-v3/images/blog/comment/1.jpeg" alt="">
                                        {{-- <img src="images/blog/comment/1.jpeg" alt="Comment images"> --}}
                                    </div>
                                    <div class="content">
                                        <p>demo says:</p>
                                        <a href="#">Quisque semper nunc vitae...</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <aside class="widget category_widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Flower</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Jewelle</a></li>
                        </ul>
                    </aside>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <aside class="widget archives_widget">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li><a href="#">March 2015</a></li>
                            <li><a href="#">December 2014</a></li>
                            <li><a href="#">November 2014</a></li>
                            <li><a href="#">September 2014</a></li>
                            <li><a href="#">August 2014</a></li>
                        </ul>
                    </aside>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



