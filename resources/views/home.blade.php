@extends('layouts.master')
@section('content')

    @include('layouts.header')
    <!-- start banner Area -->
    <section class="banner-area organic-bradcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        @foreach ($news as $new)
                            <div class="row single-slide align-items-center d-flex">
                                <div class="col-lg-5 col-md-6">
                                    <div class="banner-content">
                                        <h1>New Flavor!</h1>
                                        <h3>{{ $new->name }}</h3>
                                        <p>{{ $new->details }}</p>
                                        <div class="add-bag d-flex align-items-center">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $new->id }}">
                                                <input type="hidden" name="name" value="{{ $new->name }}">
                                                <input type="hidden" name="price" value="{{ $new->price }}">
                                                <button type="submit" class="primary-btn">
                                                    <span class="add-text text-uppercase text-white">Add to Bag</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <img class="img-fluid" src="{{ Voyager::image($new->image) }}" width="80" height="500" alt="" />
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="section-title">
                                      <h1>Latest Products</h1>
                                      <p></p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    @foreach ($latestProducts as $product)
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{{ Voyager::image($product->image) }}" alt="">
                                <div class="product-details">
                                    <h6>{{ $product->name }}</h6>
                                    <p>{{ $product->details }}</p>
                                    <div class="price">
                                        <h6>{{ $product->price }} CHF</h6>
                                    </div>
                                    <div class="prd-bottom d-flex justify-content-around">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <button type="submit" class="primary-btn">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form> 
                                        <a href="{{ route('shop.show', $product->slug) }}" class="primary-btn">
                                            <i class="fas fa-eye"></i>  
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Best Sellers</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($bestsellers as $bestseller)
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{{ Voyager::image($bestseller->image) }}" alt="">
                                <div class="bestseller-details">
                                    <h6 class="text-center">{{ $bestseller->name }}</h6>
                                    <div class="price text-center">
                                        <h6>{{ $bestseller->price }} CHF</h6>
                                    </div>
                                    <p><small>{{ $bestseller->details }}</small></p>
                                    <div class="prd-bottom d-flex justify-content-around">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $bestseller->id }}">
                                            <input type="hidden" name="name" value="{{ $bestseller->name }}">
                                            <input type="hidden" name="price" value="{{ $bestseller->price }}">
                                            <button type="submit" class="primary-btn">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form> 
                                        <a href="{{ route('shop.show', $bestseller->slug) }}" class="primary-btn">
                                            <i class="fas fa-eye"></i>  
                                        </a> 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        
</section>
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
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is created by <a href="https://laravel.com" target="_blank">Laravel</a> and  the template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                     <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
			</div>
		</div>
</footer>

    <!-- end product Area -->
  
@stop

