@extends('layouts.front')
@section('content')


    <!-- Thank You area start -->
    <div class="thank-you-area pt-100px ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="inner_complated">
                         <div class="table_page table-responsive">
                                  <h4>Invoice History</h4>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No invoice</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->customer_firstname}} {{ $order->customer_lastname }}</td>
                                            <td>{{$order->date_order}}</td>
                                            <td><span class="success">{{$order->status}}</span></td>
                                            <td>{{$currency->currency}} {{number_format($order->subtotal)}}</td>
                                        
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        <p class="dsc_cmpted">Thank you for ordering in our store.</p>
                        <div class="btn_cmpted mb-5">
                            <a href="{{URL('/')}}" class="shop-btn" title="Go To Shop">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <table>


@endsection