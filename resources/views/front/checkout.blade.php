@extends('layouts.front')
@section('content')
<!-- checkout area start -->
<form action="{{URL('/site_addorder')}}" method="post">
    @csrf
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                @if(empty($cart) || count($cart)== 0 )
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Fist name</label>
                                    <input type="text" readonly="readonly" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                 <div class="billing-info mb-4">
                                    <label>Last name</label>
                                    <input type="text" readonly="readonly" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Phone</label>
                                    <input type="text" readonly="readonly" />
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text" readonly="readonly" />
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message" readonly="readonly"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        Empty Cart
                                    </ul>
                                </div>
                                    <div class="Place-order mt-25">
                                        <a href="{{URL('/')}}" >Shop Now</a>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-4">
                                    <label>Fist name</label>
                                      <input type="hidden" name="customer_id" id="customer_id" value="{{ AUTH::user()->id}}" />
                                    <input type="text" name="customer_firstname" id="customer_firstname" required="required" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                 <div class="billing-info mb-4">
                                    <label>Last name</label>
                                    <input type="text" name="customer_lastname" id="customer_lastname" required="required"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Phone</label>
                                    <input type="text" name="customer_phone" id="customer_phone" required="required" />
                                </div>
                            </div>
                            <!-- <div class="col-lg-12">
                                <div class="billing-select mb-4">
                                    <label>Country</label>
                                    <select>
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text" name="customer_address" id="customer_address" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="note" id="note"></textarea>
                            </div>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php $grandtot = 0; ?>
                                        @foreach($cart as $row =>$value)
                                        <?php $total = $value['price'] * $value['qty']; ?>
                                   
                                        <li><span class="order-middle-left">{{$value['name']}} X {{$value['qty']}}</span> <span class="order-price">{{$value['price']}}</span></li>
                                        <?php $grandtot += $total; ?>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li> {{ $grandtot }}</li>
                                        <input type="hidden" name="grandtotal" id="grandtotal" value="{{ $grandtot }}">
                                    </ul>
                                </div>
                            </div>
                        </div>                            
                        <div class="Place-order mt-25">
                            <button class="btn-hover btn" type="submit"><a>Place Order</a></button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</form>
<!-- checkout area end -->
@endsection