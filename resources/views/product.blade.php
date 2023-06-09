@extends('layouts.master')

@section('content')

{{ Breadcrumbs::render('product', $product) }}

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{ Voyager::image($product->image) }}" alt="">
                    </div>
                    @foreach (json_decode($product->images, true) as $image )
                        <div class="single-prd-item">
                            <img class="img-fluid" src="{{ Voyager::image($image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{ $product->name}}</h3>
                    <h2>{{ $product->price}} CHF</h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span> : {{ $product->categoryId->name ?? 'None'}}</a></li>
                        <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                    </ul>
                    <p>{{ $product->details}}</p>
                    <div class="card_area d-flex align-items-center">
                        <form action="{{ route('cart.store')}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <button class="primary-btn" type="submit">Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                 aria-selected="false">Specification</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>{{ $product->description }}</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <p>{{ $product->details}}</p>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->

@stop