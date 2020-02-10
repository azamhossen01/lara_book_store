@extends('frontend.layouts.app')

@section('title','My Account')


@section('content')

<div class="ht__bradcaump__area bg-image--6 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">My Account</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">My Account</span>
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
            {{-- <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Login</h3>
                    <form action="{{route('customer_registration')}}" method="post">
                    @csrf 
                        <div class="account__form">
                            <div class="input__box">
                                <label>Username or email address <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form__btn">
                                <button>Login</button>
                                <label class="label-for-checkbox">
                                    <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <a class="forget_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div class="col-lg-12 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Register</h3>
                    <form action="{{route('customer_registration')}}" method="post">
                    @csrf 
                        <div class="account__form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input__box">
                                        <label>Name <span>*</span></label>
                                        <input type="text" name="name" id="name" placeholder="Write Name" required>
                                    </div>
                                    <div class="input__box">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone" id="phone" placeholder="Write Phone" required>
                                    </div>
                                    <div class="input__box">
                                        <label>Password<span>*</span></label>
                                        <input type="password" name="password" id="password" placeholder="Write Password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input__box">
                                        <label>Email address <span>*</span></label>
                                        <input type="email" name="email" id="email" placeholder="Write Email" required>
                                    </div>
                                    <div class="input__box">
                                        <label>Address <span>(optional)</span></label>
                                        <input type="text" name="address" id="address" placeholder="Write Address">
                                    </div>
                                    <div class="input__box">
                                        <label>Confirm Password<span>*</span></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                                        
                                            @if($errors->has('password_confirmation'))
                                                <small class="error">{{ $errors->first('password_confirmation') }}</small>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form__btn">
                                <button>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
