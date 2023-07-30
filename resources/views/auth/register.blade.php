@extends('layouts.master')
@section('content')

{{ Breadcrumbs::render('register') }}

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
                    {{ csrf_field() }}

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
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" value="">
                        </div>

                        {{-- password-confirmation --}}
                        <div class="col-md-12 form-group {{ $errors->has('password-confirmation') ? 'has-error' : ''}}">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Your Password" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Sign Up</button>
                            <a href="{{ route('home') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->



@endsection


<section class="footer-shop">
    <!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row" id="div-about">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Mobile devices are more than everyday objects. They are our daily companions who know our most
                        important information and secrets. The security of your data is our top priority and that is why
                        we wipe every device immediately upon receipt so that nobody can read your personal data.
					</p>
                </div>
            </div>
            
            <div class="col-lg-4  col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget">
						<h6>Contact Us</h6>
						
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">
                                handyshop@4handyshop.com<br>
								Röschibachstrasse 58, 8037 Zurich <br>
                                +41 (076) 744 99 92<br>
                                Mon to Fri 9 am to 6 pm	


									

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20"><a href="https://www.instagram.com/">Instragram Feed</a></h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/img-test/images1.jpeg" alt=""></li>
							<li><img src="img/img-test/images2.jpeg" alt=""></li>
							<li><img src="img/img-test/images3.jpg" alt=""></li>
							<li><img src="img/img-test/images4.jpg" alt=""></li>
							<li><img src="img/img-test/images5.jpg" alt=""></li>
							<li><img src="img/img-test/images6.jpg" alt=""></li>
							<li><img src="img/img-test/images7.jpg" alt=""></li>
							<li><img src="img/img-test/images8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
							<a href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is created by 
                    <a href="https://laravel.com" target="_blank">Laravel</a> 
                    and  the template is made with 
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by 
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
               </p>
			</div>
		</div>
</footer>

</section>