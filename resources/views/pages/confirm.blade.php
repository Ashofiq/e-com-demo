@extends('master')
@section('title', $config->company_name .' | Confirm')
@section('description', 'Order Confirm page')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')
<section class="section banner-500">
    <div class="box-cover-image wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="box-banner-info wow bounceIn" style="visibility: visible; animation-name: bounceIn;"> 
      <p class="overline-t2-medium text-uppercase primary-navy mb-10">ORDER PLACED </p>
      <h2 class="color-primary-dark mb-30">Your order has been placed!
        <br class="d-none d-lg-block" style="color: red">Order No: {{request('order')}}  
        <br class="d-none d-lg-block"></h2>
    </div>
</section>


<script>
    cartLS.destroy()
</script>
@endsection