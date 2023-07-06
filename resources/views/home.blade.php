@extends('layouts.master')
@section('content')

    @include('layouts.header')
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
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
                                        <img class="img-fluid" src="{{ Voyager::image($new->image) }}" alt="">
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

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Free Delivery</h6>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Return Policy</h6>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="">
                        </div>
                        <h6>Secure Payment</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

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
    <!-- end product Area -->

@stop
