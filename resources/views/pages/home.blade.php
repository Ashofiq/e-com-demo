@extends('master')
@section('title', config('name'))

@section('main-section')

    @include('extras.slider')
            
    @include('extras.category')

    @include('extras.product')

    @include('extras.information')

@endsection