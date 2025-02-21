@extends('master')
@section('title', 'n')
@section('description', )
@section('image', '')
@section('url', url()->full())

@section('main-section')
<div class="container"> 

    <div class="section block-breadcrumb">
        <div class="container"> 
        <div class="breadcrumbs"> 
            <ul> 
            <li>  <a href="{{url('/')}}">Home  </a></li>
            <li>  <a href="#">{{ $category != null ? $category['name'] : ''}} </a></li>
            </ul>
        </div>
        </div>
    </div>

    <section class="section block-may-also-like">
        <div class="container">
          <div class="row">
            @foreach ($products['data'] as $product)
                <x-product-card :product="$product"></x-product-card>
            @endforeach
            
          </div>
        </div>
    </section>

</div> 


@endsection