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
                    <h1>{{ $category != null ? $category['name'] : ''}} </h1>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- breadcrumb__end -->


<div class="container"> 
    
    <section class="section block-may-also-like">
        <div class="container" style="min-height: 400px">
            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            
                        @foreach ($paginatedProducts['data'] ?? [] as $product)
                            <x-product-card :product="$product"></x-product-card>
                        @endforeach
                        
                        

                        {{-- {{$paginatedProducts->links()}} --}}
                    </div>

                    <div class="breadcrumb__title" style="padding-top: 100px">
                        @if($paginatedProducts['data']  == null)
                            <h4 class="text-danger">No Product Found</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</div> 


@endsection