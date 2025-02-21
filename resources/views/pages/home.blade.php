@extends('master')
@section('title', $config->company_name .' | Home')
@section('description', config('app.description'))
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')

    @include('extras.slider')
            
    @include('extras.category')

    {{-- @include('extras.product') --}}

    @include('extras.information')

@endsection