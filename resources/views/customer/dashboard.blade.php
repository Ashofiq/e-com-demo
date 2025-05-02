

@extends('master')

@section('title', $config->company_name . ' | Category')
@section('description', 'Category list')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')

<section style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- Sidebar Menu -->
                    <div class="col-md-4">
                        <div class="dashboard-menu" style="border:1px solid #ddd; padding:20px; border-radius:10px;">
                            <ul class="nav flex-column" role="tablist" style="list-style:none; padding:0;">
                                <li class="nav-item mb-2">
                                    <a class="nav-link active" style="color:#333;" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard">
                                        <i class="fi-rs-settings-sliders" style="margin-right:10px;"></i>Dashboard
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link" style="color:#333;" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders">
                                        <i class="fi-rs-shopping-bag" style="margin-right:10px;"></i>Orders
                                    </a>
                                </li>
                            
                              
                                <li class="nav-item mt-4">
                                    <a class="nav-link text-danger" href="{{ route('customer.logout') }}">
                                        <i class="fi-rs-sign-out" style="margin-right:10px;"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-md-8">
                        <div class="tab-content dashboard-content">

                            <!-- Dashboard Tab -->
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                    <div class="card-header" style="background:#f7f7f7; padding:15px; border-bottom:1px solid #ddd;">
                                        <h5 class="mb-0">Hello {{ Session::get('customer_name') }}!</h5>
                                    </div>
                                    <div class="card-body" style="padding:20px;">
                                        <p>From your account dashboard you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Orders Tab -->
                            <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                    <div class="card-header" style="background:#f7f7f7; padding:15px; border-bottom:1px solid #ddd;">
                                        <h5 class="mb-0">Your Orders</h5>
                                    </div>
                                    <div class="card-body" style="padding:20px;">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['orders'] as $order)
                                                    <tr>
                                                        <td>#{{ $order['order_no'] }}</td>
                                                        <td>{{ $order['order_date'] }}</td>
                                                        <td>{{ $order['status'] }}</td>
                                                        <td>Tk. {{ $order['total_amount'] }}</td>
                                                        <td>
                                                            <a href="{{route('show-customer-order', $order['id'])}}" class="btn btn-info btn-sm m-1" title="View Detail">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                           
                                                            <a href="{{route('customer-invoice-download', $order['id'])}}" target="_blank" class="btn btn-warning btn-sm m-1" title="Download Invoice">
                                                                <i class="fi-rs-download"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody> 
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           

                            <!-- Track Orders Tab -->
                            <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                    <div class="card-header" style="background:#f7f7f7; padding:15px; border-bottom:1px solid #ddd;">
                                        <h5 class="mb-0">Order Tracking</h5>
                                    </div>
                                    <div class="card-body" style="padding:20px;">
                                        <p>Enter your Order ID and Billing Email to track your order.</p>
                                        <form action="#" method="post">
                                            <div class="mb-3">
                                                <label>Order ID</label>
                                                <input type="text" name="order-id" class="form-control" placeholder="Order ID">
                                            </div>
                                            <div class="mb-3">
                                                <label>Billing Email</label>
                                                <input type="email" name="billing-email" class="form-control" placeholder="Billing Email">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Track</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Tab -->
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                            <div class="card-header" style="background:#f7f7f7; padding:15px;">
                                                <h5>Billing Address</h5>
                                            </div>
                                            <div class="card-body" style="padding:20px;">
                                                <address>3522 Interstate 75 Business Spur, Sault Ste. Marie, MI 49783</address>
                                                <p>New York</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                            <div class="card-header" style="background:#f7f7f7; padding:15px;">
                                                <h5>Shipping Address</h5>
                                            </div>
                                            <div class="card-body" style="padding:20px;">
                                                <address>4299 Express Lane, Sarasota, FL 34249 USA <br>Phone: 1.941.227.4444</address>
                                                <p>Sarasota</p>
                                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Account Detail Tab -->
                            {{-- <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                <div class="card" style="border:1px solid #ddd; border-radius:10px;">
                                    <div class="card-header" style="background:#f7f7f7; padding:15px;">
                                        <h5>Account Details</h5>
                                    </div>
                                    <div class="card-body" style="padding:20px;">
                                        <p class="text-success text-center">{{session('message')}}</p>
                                        <form action="{{ route('editCustomer')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $customer->id }}">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Full Name *</label>
                                                    <input type="text" name="name" value="{{$customer->name}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Email Address *</label>
                                                    <input type="email" name="email" value="{{$customer->email}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Password *</label>
                                                    <input type="password" name="password" value="{{$customer->password}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Mobile *</label>
                                                    <input type="text" name="mobile" value="{{$customer->mobile}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>Address *</label>
                                                    <textarea name="address" class="form-control" required>{{$customer->address}}</textarea>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Date of Birth *</label>
                                                    <input type="text" name="date_of_birth" value="{{$customer->date_of_birth}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Blood Group *</label>
                                                    <input type="text" name="blood_group" value="{{$customer->blood_group}}" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>District *</label>
                                                    <input type="text" name="district" value="{{$customer->district}}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Image</label><br>
                                                    <input type="file" name="image" class="form-control">
                                                    <img src="{{asset($customer->image)}}" alt="Customer Image" style="margin-top:10px; height:100px; width:100px;">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                        </div> <!-- End dashboard-content -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>







@endsection

