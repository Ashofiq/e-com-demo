@extends('master')
@section('title', $config->company_name .' | Home')
@section('description', config('app.description'))
@section('image', $config->logo)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')


          <!-- herobanner__start -->
        
        @include('extras.slider')
        <!-- herobanner__end -->



      <!-- banner__section__start -->

      @include('extras.category')
     
     <!-- banner__section__end -->

      <!-- best__selling__start -->

      @include('extras.product')
       
       <!-- best__selling__start -->


       


<!-- blog__section__start -->
<div class="blog sp_top_80 sp_bottom_80">
  <div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section__title text-center">
                <h2>Latest Blog </h2>
            </div>
        </div>
    </div>
    <div class="row row__custom__class blog__slider__active slider__default__arrow">
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                   <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-1.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's _______ Trends: What's Hot and ____'_ Not </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                    <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-2.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's _______ Trends: What's Hot and ____'_ Not </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                    <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-3.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>Fashion Dos and Don'ts _____ Woman Should Know That </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                    <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-4.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's _______ Trends: What's Hot and ____'_ Not </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                    <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-5.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>A Glimpse into Men's _______ Trends: What's Hot and ____'_ Not </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
        <div class="col-xl-4 column__custom__class">
            <div class="blog__single__wrap">
                <div class="blog__img">
                    <a href='blog-details.html'>  <img src="{{asset('/')}}frontend/img/blog/blog-6.jpg" alt="" /></a>
                </div>

                <div class="blog__meta">
                    <ul>
                        <li class="blog__date"><i class="far fa-calendar-alt"></i> August 01, 2024 </li>
                    </ul>
                  </div>

                  <div class="blog__title">
                    <h2><a href='blog-details.html' tabindex='0'>Fashion Dos and Don'ts _____ Woman Should Know That </a></h2>
                  </div>

                  <div class="blog__button">
                    <a href='blog-details.html' tabindex='0'>Read More </a>
                  </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- blog__section__start -->









<!-- modal__section__start -->
<div class="grid__quick__view__modal modalarea modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
            <div class="row align-items-center">
         
                <div class="col-xl-6 col-lg-6 col-md-6">

                 <div class="grid__quick__img">
                    <img src="{{asset('/')}}frontend/img/grid/grid__1.png" alt="" />
                 </div>


                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                  <div class="grid__quick__content">
                    <h3>W. Men Formal T-shirt </h3>
                    <div class="quick__price">
                        <del>$99.00 </del> $120.00
                    </div>
                    <p>we denounce with righteous ___________ and dislike men who ___ so beguiled and demoralized __ the charms of pleasure __ the moment, so blinded __ desire, that they cannot _______ the pain and trouble ____ are bound to ensuel... </p>


                    <div class="selector__wrapper">
                        <select class="single-option-selector select--wd" data-option="option1" id="product-select-qv-option-0">
                            <option value="White" />White 
                            <option value="Gold" />Gold <option value="l" />l 
                            <option value="Grey" />Grey 
                            <option value="Maroon" />Maroon 
                            <option value="Magenta" />Magenta 
                        </select>
                    </div>


                    <div class="featurearea__quantity">
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-qty" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="1" class="input-qty" />
                            <button class="qty-btn-plus btn-qty" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                        <a class="default__button" href="#">Add to cart </a>
                   
                    </div>

                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


            
    {{-- @include('extras.category')  --}}

    {{-- @include('extras.product') --}}

    {{-- @include('extras.information') --}}

@endsection