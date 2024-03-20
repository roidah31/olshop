 @extends('layouts.front')
 @section('content')
 <!-- Cart Area Start -->
 <div class="cart-main-area pt-100px pb-100px">
     <div class="container">
         <h3 class="cart-page-title">Your cart items</h3>
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                 <form action="#">
                     <div class="table-content table-responsive cart-table-content">
                         <table>
                             <thead>
                                 <tr>
                                     <th>Image</th>
                                     <th>Product Name</th>
                                     <th>Price</th>
                                     <th>Qty</th>
                                     <th>Subtotal</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @if(empty($cart) || count($cart)== 0 )
                                 <tr>
                                     <td>
                                        Empty cart , shopping now
                                     </td>
                                 </tr>
                                 @else
                                 @php $grandtot = 0; @endphp
                                 @foreach($cart as $row =>$value)
                                 @php

                                 $total = $value['price']*$value['qty'];
                                 @endphp
                                 <tr>
                                     <td class="product-thumbnail">
                                         <a href="{{URL('/site_product'.$value['name'])}}">
                                             <img class="img-responsive ml-15px" src="{{asset('/products/'.$value['image'])}}" width="80px" height="80px" alt="" /></a>
                                     </td>
                                     <td class="product-name"><a href="#">{{$value['name']}}</a></td>
                                     <td class="product-price-cart"><span class="amount">{{$value['price']}}</span></td>
                                     <td class="product-quantity">
                                         <div class="cart-plus-minus">
                                             <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$value['qty']}}" />
                                         </div>
                                     </td>
                                     <td class="product-subtotal">{{$total}}</td>
                                     <td class="product-remove">
                                         <a href="#"><i class="fa fa-pencil"></i></a>
                                         <a href="{{URL('/site_deletecart/'.$row)}}"><i class="fa fa-times"></i></a>
                                     </td>
                                 </tr>
                                 <?php $grandtot += $total; ?>
                                 @endforeach
                                 <tr>
                                     <td colspan="4" align="center"><b>Grandtotal</b></td>
                                     <td colspan="2"> {{ $grandtot }}</td>
                                 </tr>
                                 @endif
                             </tbody>
                         </table>
                     </div>
                      @if(empty($cart) || count($cart)== 0 )
                       <div class="row">
                          <div class="col-lg-12">
                              <div class="cart-shiping-update-wrapper">
                                
                                  <div class="cart-clear">
                                      <a href="{{URL('/')}}">Check our product </a>
                                     
                                  </div>
                              </div>
                          </div>
                      </div>
                      @else 
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="cart-shiping-update-wrapper">
                                   @if (Auth::check())
                                  <div class="cart-clear">
                                      <a href="{{URL('/site_checkout')}}">Procced Checkout</a>                                     
                                  </div>
                                  @else
                                    <div class="cart-clear">
                                        <a  href="{{URL('/login')}}">Login Please</a>
                                    </div>
                                 @endif
                              </div>
                          </div>
                      </div>
                      @endif
                 </form>
                
             </div>
         </div>
     </div>
 </div>
 <!-- Cart Area End -->
 @endsection