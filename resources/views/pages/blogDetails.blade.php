@extends('master')

@section('title', $blog['title'] )
@section('description', 'Brand list')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')

<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__title">
                    <h1>Blog-Details</h1>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="color__blue">
                            Blog
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog sp_bottom_80 sp_top_40">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="ltn__blog-details-wrap--">
                    <div class="ltn__page-details-inner ltn__blog-details-inner">
                        <img class="img-fluid" src="{{ $blog['image'] }}" alt="blog_details">
                    </div>
                    <h1 class="ltn__blog-title">{{ $blog['title'] }}</h1>
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-date">
                                <i class="far fa-calendar-alt"></i>
                                {{date('F d, Y', strtotime($blog['date']))}}
                            </li>
                        </ul>
                    </div>
                    <p class="sp_top_20">
                        {!!$blog['description']!!}
                    </p>
                   

                </div>
                <hr>
            
            </div>
        </div>
    </div>
</div>

@endsection