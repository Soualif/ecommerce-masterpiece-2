@extends('layouts.master')

@section('content')

{{-- {{ Breadcrumbs::render('resetPassword') }} --}}


<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ asset('img/login.jpg') }}" alt="">
                </div>
            </div>
        
            <div class="col-lg-6">
                <div class="login_form_inner">
                    @if (session('status'))
                          <div class="alert  alert-success">
                                  {{ session('status') }}
                          </div>
                    @endif
                    <h3>Reset Password</h3>
                    <form class="row login_form"  id="contactForm" novalidate="novalidate"
                    method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token}}">
                        
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
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        {{-- Password_confirmation --}}
                        <div class="col-md-12 form-group {{ $errors->has('Password_confirmation') ? 'has-error' : ''}}">
                            <input type="password" class="form-control" id="Password_confirmation" name="Password_confirmation" placeholder="Your Password_confirmation">
                            @if ($errors->has('Password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

@endsection