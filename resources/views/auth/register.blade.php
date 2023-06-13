@extends('layouts.master')
@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Already have account ?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="primary-btn" href="{{ route('login') }}">Log In</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Sign Up</h3>
                    <form class="row login_form"  id="contactForm" novalidate="novalidate"
                    method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Name --}}
                        <div class="col-md-12 form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        {{-- Email --}}
                        <div class="col-md-12 form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        {{-- Password --}}
                        <div class="col-md-12 form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        {{-- password-confirmation --}}
                        <div class="col-md-12 form-group {{ $errors->has('password-confirmation') ? 'has-error' : ''}}">
                            <input type="password" class="form-control" id="password" name="password-confirmation" placeholder="Your Password" value="{{ old('password') }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->



@endsection