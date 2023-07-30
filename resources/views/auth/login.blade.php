@extends('layouts.master')

@section('content')

{{ Breadcrumbs::render('login') }}

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="img/login.jpg" alt="">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="primary-btn" href="{{ route('register') }}">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form"  id="contactForm" novalidate="novalidate"
                    method="POST" action="{{ route('login') }}">
                        @csrf
                        
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
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                            <a href="{{ route('password.request')}}">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<section class="footer-shop">
@include('layouts.footer')
</section>
@endsection
