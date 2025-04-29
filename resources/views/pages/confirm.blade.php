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

</style>
<section class="section banner-500">
    <div class="box-cover-image wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="box-banner-info wow bounceIn" style="visibility: visible; animation-name: bounceIn;"> 
      <p class="overline-t2-medium text-uppercase primary-navy mb-10">ORDER PLACED </p>
      <h2 class="color-primary-dark mb-30">Your order has been placed!
        <br class="d-none d-lg-block" style="color: red">Order No: {{request('order')}}  
        <br class="d-none d-lg-block">
      </h2>
      <a href="{{ route('trackOrder') }}" class="btn btn-primary px-4 py-2 mt-3">Track Order</a>

    </div>
</section>


<script>
    cartLS.destroy()
</script>
@endsection