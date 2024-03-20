@extends('layouts.front')
@section('content')
<div class="shop-category-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sidebar-widget-image">
                    <a href="#" class="single-banner">
                        <img src="{{asset('assets/images/banner/13.jpg')}}" alt="">
                    </a>
                </div>
                <!-- Shop Top Area Start -->
                <div class="desktop-tab">
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Default">Default</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Show:</p>
                            </div>
                            <div class="shop-select show">
                                <select class="shop-sort">
                                    <option data-display="12">12</option>
                                    <option value="1"> 12</option>
                                    <option value="2"> 10</option>
                                    <option value="3"> 25</option>
                                    <option value="4"> 20</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                        <!-- Left Side start -->
                        <p class="compare-product">Product Compare <span>(0) </span></p>
                    </div>
                </div>
                <!-- Shop Top Area End -->

                <!-- Mobile shop bar -->
                <div class="shop-top-bar mobile-tab">
                    <!-- Left Side End -->
                    <div class="shop-tab nav d-flex justify-content-between">
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Default">Default</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <!-- Right Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex align-items-center justify-content-between">
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Show:</p>
                            </div>
                            <div class="shop-select show">
                                <select class="shop-sort">
                                    <option data-display="12">12</option>
                                    <option value="1"> 12</option>
                                    <option value="2"> 10</option>
                                    <option value="3"> 25</option>
                                    <option value="4"> 20</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                        <!-- Left Side start -->
                        <p class="compare-product">Product Compare <span>(0) </span></p>
                    </div>
                </div>
                <!-- Mobile shop bar -->
                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area">
                    <!-- Tab Content Area Start -->
                    <div class="row">
                        <div class="col">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="shop-grid">
                                    <div class="row mb-n-30px">
                                        @foreach($product as $r)
                                        <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="single-product.html" class="image">
                                                        <img src="{{asset('/products/'.$r->image)}}" width="280" height="340" alt="Product" />
                                                        <img class="hover-image" src="{{asset('/products/'.$r->image)}}" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="new">New</span>
                                                    </span>
                                                    <div class="actions">
                                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                        <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num d-none">( 5 Review )</span>
                                                    </span>
                                                    <h5 class="title"><a href="{{URL('/site_product/'.$r->id)}}">{{$r->name}}
                                                        </a>
                                                    </h5>
                                                    <span class="price">
                                                        <span class="new">{{$currency->currency}} {{number_format($r->price)}}</span>
                                                    </span>
                                                </div>
                                                <a href="{{URL('/site_addcart/'.$r->id)}}">

                                                    <button title="Add To Cart" class=" add-to-cart">Add
                                                        To Cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
@endsection