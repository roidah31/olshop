@extends('layouts.front')
@section('content')

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                           <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>
                            </li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                    
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders History</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->date_order}}</td>
                                            <td><span class="success">{{$row->status}}</span></td>
                                            <td>{{$currency->currency}} {{number_format($row->subtotal)}}</td>
                                            <td><a href="{{URL('/invoice/'.$row->id)}}" class="view">invoice</a></td>
                                        </tr>   
                                        @endforeach
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>                       
                        
                        <div class="tab-pane fade  show active" id="account-details">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#">
                                            <div class="default-form-box mb-20">
                                                <label>UserName</label>
                                                <input type="text" name="first-name" value="{{ $usr->name}}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="last-name" value="{{ $usr->email}}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Fullname</label>
                                                <input type="text" name="email-name" value="{{ $usr->fullname}}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Address</label>
                                                <input type="text" name="user-password" value="{{ $usr->address}}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Phone number</label>
                                                <input type="text" name="birthday" value="{{ $usr->phone}}">
                                            </div>                                           
                                            <br>                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- account area start -->
@endsection