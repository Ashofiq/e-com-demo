@extends('master')
@section('title', $config->company_name .' | Category')
@section('description', 'Category list')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')


@section('main-section')

     <!-- breadcrumb__start -->
     <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Contact </h1>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home </a>
                            </li>
                            <li class="color__blue">
                               Contact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


 <!-- contact__section__start -->
 <div class="contactarea sp_top_80 sp_bottom_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="contactarea__single">
                    <h3>Email Address </h3>
                    <p>{{ $config->email }} </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="contactarea__single">
                    <h3>Phone Number </h3>
                    <p>{{ $config->phone }} </p>
                </div>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="contactarea__single">
                    <h3>Office Address  </h3>
                    <p> Aftab Nagar Dhaka </p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- contact__section__end -->

@endsection