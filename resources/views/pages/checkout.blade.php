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

<div class="section block-breadcrumb">
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
</section>



@endsection

@section('script')
<script>
  // function cartProductSet() {
  //    const products = cartLS.list();
  //    console.log(products);
     
  //    var html_data = ''
  //    for (let index = 0; index < products.length; index++) {
  //        const element = products[index];
  //        html_data += `<div class="list-items-cart">
  //                  <div class="item-cart"> 
  //                    <div class="item-cart-image">
  //                      <img src="${element.image}" alt="${element.name}"></div>
  //                      <div class="item-cart-info">
  //                      <div class="item-cart-info-1">
  //                        <a class="text-17-medium" href="#"> ${element.name}</a>
  //                        <p class="box-size">  <span class="body-p2 neutral-medium-dark">
  //                         variant:   </span><span class="body-p2 neutral-dark">${element.variant}</span></p>
  //                      </div>
  //                      <div class="item-cart-info-2"> 
  //                        <p class="body-p2">৳${element.price} </p>
  //                      </div>
  //                    </div>
  //                  </div>
  //                </div>`;
  //    }

  //    $('.list-items-cart').html(html_data)
  //    $('.subtotal').html('৳'+ cartLS.total())


  // }

  // cartProductSet()

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