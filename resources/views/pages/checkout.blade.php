@extends('master')
@section('title', $config->company_name .' | Checkout')
@section('description', 'checkout page')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')

<style>
  .btn-remove-cart{display: none}
</style>


<!-- breadcrumb__start -->
<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb__title">
          <h1>Checkout</h1>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="color__blue">Checkout</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb__end -->

<!-- checkout__section__start -->
<div class="checkoutarea sp_bottom_100 sp_top_100">
  <div class="container">
    <div class="row">
      <!-- Customer Details -->
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="checkoutarea__billing">
          <div class="checkoutarea__billing__heading">
            <h2>Customer Details</h2>
          </div>
          <div class="checkoutarea__billing__form">
            <form action="{{ route('order') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-xl-6">
                  <div class="checkoutarea__inputbox">
                    <label for="name" style="color: black;">Customer Name *</label>
                    <input type="text" id="name" name="name" placeholder="Customer Name" required style="color: black;" />
                  </div>
                </div>
                
                <div class="col-xl-6">
                  <div class="checkoutarea__inputbox">
                    <label for="phone" style="color: black;">Phone Number *</label>
                    <input type="number" id="phone" name="phone" class="info" placeholder="Phone Number" required style="color: black;"  />
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="checkoutarea__inputbox">
                    <label for="address" style="color: black;" >Address *</label>
                    <input type="text" id="address" name="address" class="info" placeholder="Address" required  style="color: black;" />
                  </div>
                </div>
              </div>
          </div> <!-- End of billing form -->
        </div> <!-- End of billing -->
      </div>

      <!-- Order Summary -->
      <div class="col-lg-6 col-md-12 col-12">
        <div class="checkoutarea__payment__wraper">
          <div class="checkoutarea__total">
            <h3>Your Order</h3>

            <div class="checkoutarea__table__wraper" style="overflow-x:auto;">
              <table class="checkoutarea__table">
                <thead>
                  <tr class="checkoutarea__item">
                    <td class="checkoutarea__ctg__type">Product</td>
                    <td class="checkoutarea__cgt__des">Total</td>
                  </tr>
                </thead>
                <tbody>
                  <span class="product-set">
                    
                  </span>
                  
                  <tr class="checkoutarea__item">
                    <td class="checkoutarea__ctg__type">Subtotal</td>
                    <td class="checkoutarea__cgt__des subtotal">$1,026.00</td>
                  </tr>
                  <tr class="checkoutarea__item">
                    <td class="checkoutarea__itemcrt-total">Total</td>
                    <td class="checkoutarea__cgt__des prc-total subtotal">$1,029.00</td>
                  </tr>
                  <tr class="checkoutarea__item">
                    <td class="checkoutarea__ctg__type">Shipping</td>
                    <td class="checkoutarea__cgt__des ship-opt">
                      <div class="checkoutarea__shipp">
                        <input type="radio" id="pay-toggle" name="ship" value="Cash On Delivery" checked />
                        <label for="pay-toggle">Cash On Delivery</label>
                      </div>
                    </td>
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>

          <div class="checkoutarea__payment clearfix">
            <div class="checkoutarea__payment__toggle">
              <div class="checkoutarea__payment__total"></div>
              <div class="checkoutarea__payment__input__box">
                <input type="hidden" name="source" value="website">
                <input name="orderDetails" type="hidden" id="items">
                <input type="submit" class="default__button" value="Place Order ">
                {{-- <button type="submit" class="default__button">Place Order</button> --}}
              </div>
            </div>
          </div>

        </div> <!-- End of payment wrapper -->
      </div>

    </div> <!-- End of row -->
    </form> <!-- Close the form here -->
  </div> <!-- End of container -->
</div>
<!-- checkout__section__end -->


{{-- <div class="section block-breadcrumb">
    <div class="container"> 
        <div class="breadcrumbs"> 
            <ul> 
                <li>  <a href="{{url('/')}}">Home  </a></li>
                <li>  <a href="#">Checkout </a></li>
            </ul>
        </div>
    </div>
</div>

<section class="section block-cart">
    <div class="container mb-100 mt-60">
      <form action="{{route('order')}}" method="post"> 
        @csrf
        <div class="row mt-20"> 
          <div class="col-lg-6">
            <div class="box-form-checkout form-comment"> 
             
              <h4 class="mb-25">Shipping address  </h4>
              <div class="row"> 
                <div class="col-lg-12"> 
                  <div class="form-group"> 
                    <label class="form-label" for="firstname">Name * </label>
                    <input class="form-control" name="name" id="firstname" type="text" required>
                  </div>
                </div>
                
                <div class="col-lg-12"> 
                  <div class="form-group"> 
                    <label class="form-label" for="phone">Phone * </label>
                    <input class="form-control" name="phone" id="phone" type="text" required>
                  </div>
                </div>
            
                <div class="col-lg-12"> 
                  <div class="form-group"> 
                    <label class="form-label" for="towncity">District * </label>
                    <select class="form-control" name="district_id" id="towncity" onchange="selectDistrict()" required>
                      @foreach ($districts as $district)
                        <option value="{{$district['id']}}">{{$district['name']}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
           
                <div class="col-lg-12"> 
                  <div class="form-group"> 
                    <label class="form-label" for="ordernote">Address *</label>
                    <textarea class="form-control" name="address" id="ordernote" rows="6" required></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-detail-cart">
              <h4 class="mb-25">Your Order </h4>
              <div class="box-info-cart"> 
                <p class="text-17-medium text-uppercase">Product </p>
                <div class="box-info-checkout-inner">
                  <div class="list-items-cart"></div>
                  
                </div>
                <div class="d-flex align-items-center justify-content-between box-border-bottom">
                  <h5 class="neutral-medium-dark">Subtotal </h5>
                  <h5 class="neutral-dark subtotal">0.00 </h5>
                </div>
                <div class="box-info-cart-inner">
                  <p class="text-17-medium text-uppercase mb-15 neutral-medium-dark">Shipping </p>
                  <div class="list-radio"> 
                    <div class="item-radio">
                      <label>
                        -> Outside Dhaka {{$config->outside_dhaka}}{{ $config->currency_symbol }}, 
                        Over Per Kg add: {{ $config->outside_dhaka_over_per_kg }}{{ $config->currency_symbol }}
                      </label>
                    </div>
                    <div class="item-radio">
                      <label>
                        -> Inside Dhaka {{ $config->inside_dhaka }}{{ $config->currency_symbol }}, Over Per Kg add: {{ $config->inside_dhaka_over_per_kg }}{{ $config->currency_symbol }}
                      </label>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between box-border-bottom">
                  <h5 class="neutral-medium-dark">Total </h5>
                  <h5 class="color-9 total">0.00 </h5>
                </div>
                <div class="box-payment-method"> 
                  <p class="text-17-medium text-uppercase mb-15 neutral-medium-dark">Shipping </p>
                  <div class="list-radio"> 
                    
                    <div class="item-radio">
                      <label>
                        <input type="radio" name="payment" checked>Cash on delivery
                      </label>
                    </div>
                
                  </div>
                </div>
                <br>
                <br>
                <div class="box-button-checkout">  
                  <input type="hidden" name="source" value="website">
                  <input name="orderDetails" type="hidden" id="items">
                  <input type="submit" class="btn btn-black" value="Place Order ">
                 </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</section> --}}



@endsection

@section('script')
<script>
  function cartProductSet() {
     const products = cartLS.list();
     console.log(products);
     
     var html_data = ''
     for (let index = 0; index < products.length; index++) {
         const element = products[index];
         html_data += `
            <tr class="checkoutarea__item prd-name">
              <td class="checkoutarea__ctg__type">${element.name} × <span>${element.quantity}</span></td>
              <td class="checkoutarea__cgt__des">৳${element.price}</td>
            </tr>
          `;
     }

     $('.product-set').html(html_data)
     $('.subtotal').html('৳' + cartLS.total())

  }

  cartProductSet()

  document.getElementById('items').value = JSON.stringify(cartLS.list())

  function selectDistrict(){
    console.log('j');
    // cartLS.total()
    var shipping = 0;
    let district_id = document.getElementById('towncity')    
    if (district_id.value > 1) {
      shipping = "{{$config->outside_dhaka}}"
    }else{
      shipping = "{{$config->inside_dhaka}}"
    }

    $('.total').html(parseFloat(shipping)+ cartLS.total());
  }
</script>
@endsection