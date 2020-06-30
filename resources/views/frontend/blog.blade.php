@extends('frontend.layouts.app')

@section('title','Book Store')


@section('content')

<div class="ht__bradcaump__area bg-image--4 bg-danger" style="background-image:url('https://image.shutterstock.com/image-photo/old-book-open-on-wooden-260nw-286415012.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">News</h2>
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
                        <h2>Latest News</h2>
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
                   
                   
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



