@extends('layouts.front')
@section('content')


<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <div class="product-details-img product-details-tab product-details-tab-2 d-flex">
                    <div class="swiper-container mr-15px zoom-thumbs-2 align-self-start">
                        <!-- <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/4.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="assets/images/product-image/small-image/5.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top-2 align-self-start">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive" src="{{asset('products/'.$product->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content ml-25px">
                    <h2>{{ $product->name }}</h2>
                    <div class="pricing-meta">
                        <ul class="d-flex">
                            <li class="new-price">{{$currency->currency}} {{number_format($product->price)}}</li>
                            <!-- <li class="old-price"><del>$30.90</del></li> -->
                        </ul>
                    </div>
                    <!-- <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                    </div> -->
                    <div class="stock mt-30px">
                        <span class="avallabillty">Availability: <span class="in-stock"><i class="fa fa-check"></i>{{$product->qty}}</span></span>
                    </div>
                    <p class="mt-30px mb-0"> {{ $product->description }} </p>
                    <div class="pro-details-quality">
                       
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                        </div>
                        <div class="pro-details-cart">
                            <a href="{{ url('/site_addcart/'.$product->id) }}">
                                <button class="add-cart"> Add To Cart</button>
                            </a>
                        </div>
                        <div class="pro-details-cart">
                            <button class="add-cart buy-button"> Buy It Now</button>
                        </div>
                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                    </div>
                    <div class="pro-details-categories-info pro-details-same-style d-flex">
                        <span>Categories: </span>
                        <ul class="d-flex">
                            <li>
                                <a href="#">{{$category->name}}, </a>
                            </li>
                            <!-- <li>
                                <a href="#">Furniture, </a>
                            </li>
                            <li>
                                <a href="#">Decore</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="pro-details-social-info pro-details-same-style d-flex">
                        <span>Share: </span>
                        <ul class="d-flex">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="payment-img">
                        <a href="#"><img src="assets/images//icons/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection