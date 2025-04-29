@extends('master')
@section('title', $config->company_name .' | Confirm')
@section('description', 'Order Confirm page')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')
<style>
    .section.banner-500 {
  min-height: 100vh; /* Full screen height */
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #f5f7fa; /* Optional background */
  padding: 40px 20px;
}

.box-banner-info h2 {
  font-size: 2.5rem;
  line-height: 1.3;
  font-weight: bold;
}

.overline-t2-medium {
  font-size: 0.9rem;
  letter-spacing: 2px;
  font-weight: 500;
}

.order-status {
  gap: 20px;
  position: relative;
  margin-top: 30px;
}

.status-step {
  text-align: center;
  flex: 1 1 100px;
  max-width: 120px;
}

.status-step .icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

.status-line {
  width: 40px;
  height: 3px;
  background-color: #ccc;
  align-self: center;
  margin: 0 10px;
}

.status-step.active .icon {
  background-color: #007bff !important;
}

.status-step p {
  margin-top: 5px;
  font-size: 14px;
}

.input-group input {
  border-radius: 8px 0 0 8px;
}

.input-group .btn {
  border-radius: 0 8px 8px 0;
}

</style>
<section class="section banner-500 track-order py-5">
    <div class="container text-center">
      <h2 class="mb-4 text-primary">Track Your Order</h2>
      {{-- <p class="mb-5">Order No: <strong>ORD-1016</strong></p> --}}
        <form method="get" action="{{route('trackOrder')}}" class="mb-5 mx-auto" style="max-width: 400px;">
            <div class="mb-3">
                <input type="text" name="order_no" value="{{request('order_no')}}" class="form-control" placeholder="Enter Order No (e.g. ORD-1016)" required>
            </div>
            <div class="mb-3">
                <input type="tel" name="phone" value="{{request('phone')}}" class="form-control" placeholder="Enter Phone Number" required pattern="[0-9]{10,15}">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">Track</button>
            </div>
        </form>
        @if(!empty($order))
            <!-- Order status -->
            {{-- <div class="order-status d-flex justify-content-center align-items-start flex-wrap">
                <div class="status-step active">
                <div class="icon bg-primary text-white mb-2"><i class="fas fa-check"></i></div>
                <p>Order Placed</p>
                </div>
                <div class="status-line"></div>
                <div class="status-step active">
                <div class="icon bg-primary text-white mb-2"><i class="fas fa-box-open"></i></div>
                <p>Processing</p>
                </div>
                <div class="status-line"></div>
                <div class="status-step">
                <div class="icon bg-secondary text-white mb-2"><i class="fas fa-truck"></i></div>
                <p>Shipped</p>
                </div>
                <div class="status-line"></div>
                <div class="status-step">
                <div class="icon bg-secondary text-white mb-2"><i class="fas fa-home"></i></div>
                <p>Delivered</p>
                </div>
            </div> --}}
        
            <!-- Order details (optional) -->
            <div class="mt-5 text-start mx-auto" style="max-width: 700px;">
                <h5 class="mb-3">Order Information</h5>
                  <!-- Shipping Info -->
                <ul class="list-group">
                    <li class="list-group-item">Order No: <strong>{{ $order['order_no'] }}</strong></li>
                    <li class="list-group-item">Order Staus: <strong>{{ $order['status'] }}</strong></li>
                    <li class="list-group-item">Total: <strong>{{ $order['total_amount'] }}</strong></li>
                </ul>
                <br>

                <h5 class="mb-3">Order Details</h5>
                <!-- Product List -->
                <div class="card mb-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order['details'] as $details)
                                <tr>
                                    <td>{{$details['product']['name']}}</td>
                                    <td>{{ $details['quantity'] }}</td>
                                    <td>{{ $details['price'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    
                </div>
            
              
            </div>
        @else
            @if (request('order_no') != null)
                <h2>No Order Found</h2>

            @endif
        @endif
    </div>
  </section>
  


<script>
    cartLS.destroy()
</script>
@endsection