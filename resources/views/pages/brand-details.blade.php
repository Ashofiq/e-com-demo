@extends('master')

@section('title', $config->company_name .' | Brand')
@section('description', 'Brand list')
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')

<style>
  .brand-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .brand-card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    width: 220px;
    padding: 24px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    text-decoration: none;
  }

  .brand-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
  }

  .brand-name {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
  }

  @media (max-width: 600px) {
    .brand-card {
      width: 90%;
    }
  }
</style>

<!-- breadcrumb__start -->
<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb__title">
          <h1>Shop By Brand</h1>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="color__blue">Shop By Brand</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-5">
  <section class="section block-may-also-like">
    @if (!empty($brands) && count($brands) > 0)
      <div class="brand-list">
        @foreach ($brands as $brand)
          <a href="{{ route('brand-products', $brand['slug']) }}" class="brand-card">
            <div class="brand-name">{{ $brand['name'] }}</div>
          </a>
        @endforeach
      </div>
    @else
      <p class="text-center">No brands found.</p>
    @endif
  </section>
</div>

@endsection
