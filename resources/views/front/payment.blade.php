 @extends('layouts.front')
 @section('content')
 <!-- Cart Area Start -->
 <!-- Thank You area start -->
  <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
 <div class="thank-you-area pt-80px">
     <div class="container">
         <div class="row justify-content-center align-items-center">
             <div class="col-md-6 col-lg-6">
                 <div class="inner_complated">                     
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>First Name</li>
                                            <li>Last Name</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            <li><span class="order-middle-left">{{$order->customer_firstname}}</span> 
                                            <span class="order-price">{{ $order->customer_lastname }}</span></li>
                                          

                                        </ul>
                                    </div>
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Phone </li>
                                            <li>{{ $order->customer_phone}}</li>
                                        </ul>
                                         <ul>
                                            <li class="your-order-shipping">Address</li>
                                            <li>{{ $order->customer_address}}</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Total payment</li>
                                            <li>{{$order->subtotal }}</li>
                                        </ul>
                                                                           
                                    </div>
                                     <div class="Place-order mt-25">
                                            <a class="btn-hover btn" id="pay-button" >Pay now</a>
                                        </div>  
                                </div>
                            </div>
                            
                        </div>
                    
                 
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="quick_order ">
     <div class="container">
         <div class="row justify-content-center align-items-center  ">
             <div class="col-md-6 col-lg-6 your-order-area">
                 <div class="Place-order mt-25">
                     <a >Back to Shop</a>
                 </div>  
             </div>
             <div class="col-md-12">
                 <div class="main_quickorder text-align-center">
                     <h3 class="title">Happy Shopping </h3>
                  
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Thank You area end -->
 <!-- Cart Area End -->

  <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            window.location.href='{{URL('/invoice/'.$order->id)}}'; 
            console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
 @endsection