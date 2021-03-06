@extends('frontend.layouts.app')

@section('title','Log In')


@section('content')

<div class="ht__bradcaump__area bg-image--6 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Login</h2>
                    <nav class="bradcaump-content">
                    <a class="breadcrumb_item" href="{{route('/')}}">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Login</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start My Account Area -->
<section class="my_account_area pt--80 pb--55 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Login</h3>
                    <form action="{{route('login')}}" method="post">
                    @csrf
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email address <span>*</span></label>
                                <input type="email" name="email" id="email" placeholder="Write Email">
                            <small class="text-danger">{{$errors->first('email')}}</small>
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password" id="password" placeholder="Write Password">
                                <small class="text-danger">{{$errors->first('password')}}</small>
                            </div>
                            <div class="form__btn">
                                <button type="submit">Login</button>
                                {{-- <label class="label-for-checkbox">
                                    <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label> --}}
                            </div>
                            <!-- <a class="forget_pass" href="#">Lost your password?</a> -->
                        </div>
                    </form>
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection



