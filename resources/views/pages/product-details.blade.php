@extends('master')
@section('title', $product->name)
@section('description', $product->description)
@section('image', $product->image)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')
<style>
    .list-sizes .item-size.active {
        border-color: #111111;
        color: white;
        background: black;
    }
    .list-sizes .item-size {
        height: 42px;
        line-height: 42px;
        padding: 0px 12px;
        border: 1px solid #555555;
        border-radius: 4px;
        margin-right: 8px;
        cursor: pointer;
        padding: 9px
    }

    .list-sizes .item-size.active {
        border-color: #111111;
        color: white;
        background: black;
    }
</style>

    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Product </h1>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home </a>
                            </li>
                            <li class="color__blue">
                               Product Details
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- breadcrumb__end -->



<!-- single__product__start -->
<div class="single__product sp_top_50 sp_bottom_80">
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="featurearea__details__img">

                <div class="featurearea__big__img">
                    <div class="featurearea__single__big__img">
                        <img src="{{$product?->image}}" alt="{{$product?->name}}" />
                    </div>
                    {{-- <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__3.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__5.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__7.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__9.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__11.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__big__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__13.png" alt="Product Big Img" />
                    </div> --}}
                </div>
                {{-- <div class=" featurearea__thumb__img featurearea__thumb__img__slider__active slider__default__arrow">
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__1.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__3.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__5.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__7.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__9.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__11.png" alt="Product Big Img" />
                    </div>
                    <div class="featurearea__single__thumb__img">
                        <img src="{{asset('/')}}frontend/img/product/grid__13.png" alt="Product Big Img" />
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="single__product__wrap">
                <div class="single__product__heding">
                    <h2>{{$product->name}} </h2>
                </div>
                <div class="single__product__price">
                    <span class="price-main">
                        @if(isset($product->skus))
                        <span class="price-main">{{number_format($product->skus[0]['price'], 2)}}
                           
                        </span> 
                        @if (count($product->skus) > 1)
                            -
                            {{number_format(collect($product->skus)->max('price'), 2)}}{{ $config->currency_symbol }}
                        @endif
                    </span>
                @endif
                    {{-- <label>Save -25% </label> --}}
                </div>

                {{-- <hr /> --}}


                {{-- <div class="single__product__description">
                    <p> {{ Str::limit($product->description, 100) }}  </p>
                   
                    </div> --}}
             
                  {{-- <div class="single__product__eye">
                    <div onload="startTime()">
                      <img src="{{asset('/')}}frontend/img/eye/eye__1.webp" alt="live beacon" style="height:30px; margin-right:5px; padding-bottom: 0px;" />
                      <span id="txt"><strong>14 </strong> people are viewing ____ right now. </span>
                    </div>
                  </div> --}}
                

                {{--                         
                        <ul>
                           
                          <li class="product__variant__inventory">
                            <strong class="inventory__title">Availability: </strong>
                            <span class="variant__inventory">17 left in stock </span>
                          </li>
                         
                            <li>
                            <strong>SKU: </strong>
                            <span class="variant__sku">{{$sku['sku_code']}} </span>
                          </li>
                          <li>
                            <strong>Vendor: </strong> 
                            <span>
                              <a href="#">Vendor B </a>
                            </span>
                          </li>
                          <li>
                            <strong>Type: </strong> 
                            <span>
                              <a href="#">Type B </a>
                            </span>
                          </li>
                        </ul>  --}}
                  
                      </div>

                      <hr />
                      <div class="single__product__swatch single__product__size">
                        <span class="header">Variant :  </span>
                        <ul class="list-sizes">
                            @foreach ($product->skus as $sku)
                                <li class="active">
                                    {{-- {{$sku['variant_name']}}  --}}
                                    <span 
                                        onclick="clickVariant()"
                                        sku_code="{{$sku['sku_code']}}"
                                        variant_name="{{$sku['variant_name']}}" 
                                        price="{{$sku['price']}}" 
                                        image="{{$product->image}}" 
                                        class="item-size">
                                        {{$sku['variant_name']}} 
                                    </span>
                                </li>
                                
                            @endforeach
                        </ul>
                      </div>


                      {{-- <div class="single__product__swatch d-flex flex-wrap align-items-center" data-option-index="1">
                        <span class="header">Color :  </span>
                       
                            <div data-value="gold" class="swatch-element color gold available">
                             
                              <button class="label_bg_img" style="background-color: gold; ">
                               
                              </button>
                             
                            </div>
                            <div data-value="gray" class="swatch-element color gray available">
                             
                              <button class="label_bg_img" style="background-color: gray; ">
                               
                              </button>
                             
                            </div>
                            <div data-value="magenta" class="swatch-element color magenta available">
                             
                              <button class="label_bg_img" style="background-color: magenta; ">
                               
                              </button>
                             
                            </div>
                            <div data-value="maroon" class="swatch-element color maroon available">
                             
                              <button class="label_bg_img" style="background-color: maroon; ">
                               
                              </button>
                             
                            </div>
                            <div data-value="navy" class="swatch-element color navy available">
                             
                              <button class="label_bg_img" style="background-color: navy; ">
                               
                              </button>
                             
                            </div>
                       
                      </div> --}}

                      <div class="single__product__quantity">
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-qty" type="button">- </button>
                            <input type="text" name="qty"  value="1" class="input-qty" id="quantity" />
                            <button class="qty-btn-plus btn-qty" type="button">+ </button>
                        </div>
                        <button class="default__button" onclick="addToCart()"><i class="fas fa-shopping-cart"></i> Add to cart </button>

                        <button class="default__button black__button" onclick="addToCart('buy_now')" >Buy it now </button>
                       
                   
                    </div>



                    {{-- <div class="single__product__bottom__menu">
                        <ul>
                            <li>
                            <a href="#" title="Add to wishlist">
                         <span class="add__wishlist"><i class="far fa-heart"></i>  Add to ________ </span>
                         </a>
                        </li>
                         <li>
                            <a title="Add to compare" data-toggle="modal" href="#" class="compare" data-pid="b-n-badge-product">
                              <i class="fas fa-exchange-alt"></i><span> Compare </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" title="Ask a Question" data-toggle="modal">
                              <i class="far fa-envelope"></i> Ask a Question
                            </a>
                          </li>
                          <li>
                            <a href="#" title="Size Chart" data-toggle="modal">
                              <i class="far fa-chart-bar"></i> Size Chart
                            </a>
                          </li>
                        </ul>
                      </div>
                      <hr />

                        <p class="single__product__car"> 
                            <img src="{{asset('/')}}frontend/img/car/car.webp" height="25" alt="Delivery Date" />
                           Estimated Delivery ____ :  <strong>09-  12 August, 2024. </strong>
                        </p>
                        <div class="single__return__menu">
                            <h6>Return rules summary </h6>
                            <ul>
                                <li>Returns accepted for 30 ____ </li>
                                <li>Free return shipping </li>
                                <li>No restocking fee </li>
                                <li>No final sale items </li>
                            </ul>
                        </div>
                        <hr />

                        <div class="single__return__checkout">
                            <h5>Guaranteed safe checkout </h5>
                        </div>

                        <div class="single__product__small__img">
                            <ul>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__1.svg" alt="" />
                                </li>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__2.svg" alt="" />
                                </li>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__3.svg" alt="" />
                                </li>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__4.svg" alt="" />
                                </li>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__5.svg" alt="" />
                                </li>
                                <li>
                                    <img src="{{asset('/')}}frontend/img/footer/footer__6.svg" alt="" />
                                </li>
                            </ul>
                        </div>
                        <hr />

                        <div class="single__product__pairs">
                            <h6>Pairs well with </h6>
                        </div>

                        <div class="single__product__grid">
                            <div class="row grid__responsive">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__1.png" alt="Primary Image" />
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">                                
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product')" tabindex="0">Quickview
                                                </a>
                                            </div>
       
                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf.. </a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                                <del>$72.00 </del>
                                                <span>$47.00 </span> 
                                            </div>
                                        </div>
       
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__2.png" alt="Primary Image" />
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">                                
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product')" tabindex="0">Quickview
                                                </a>
                                            </div>
       
                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf.. </a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                             
                                                <span>$47.00 </span> 
                                            </div>
                                         
                                        </div>
       
                                
                                      
       
       
       
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="grid__wraper">
                                        <div class="grid__wraper__img">
                                            <div class="grid__wraper__img__inner">
                                                <a href='single-product.html'>
                                                    <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__3.png" alt="Primary Image" />
                                                </a>
                                            </div>
                                            <div class="grid__wraper__quickview">                                
                                                <a class="" title="Quickview" data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('e-s-product')" tabindex="0">Quickview
                                                </a>
                                            </div>
       
                                        </div>
                                        <div class="grid__wraper__info">
                                            <h3 class="grid__wraper__tittle">
                                                <a href='single-product.html' tabindex='0'>E. Casual Comf.. </a>
                                            </h3>
                                            <div class="grid__wraper__price">
                                                <del>$72.00 </del>
                                                <span>$47.00 </span> 
                                            </div>
                                         
                                        </div>
       
                                
                                      
       
       
       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="single__social__media">
                            <ul>
                                <li>Share: </li>
                                <li><a href="#" title="Share on Facebook" target="_blank"><i class="fab fa-facebook-f"></i><span>Facebook </span></a>
                                </li>
                            <li>
                                <a href="#" title="Share on Twitter" target="_blank"><i class="fab fa-twitter"></i><span>Twitter </span></a>
                            </li>
                           
                            <li>
                                <a href="#" title="Share on Pinterest" target="_blank"><i class="fab fa-pinterest"></i><span>Pinterest </span></a>
                            </li>
                           
                          </ul>
                        </div>
                   </div> --}}
        </div>
    </div>
</div>
</div>
<!-- single__product__end -->


<!-- discription__section__start -->

<div class="descriptionarea sp_bottom_80 ">
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 descriptionarea__tab__wrapper">
            <ul class="nav  descriptionarea__tab__button" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="descriptionarea__link active" data-bs-toggle="tab" data-bs-target="#description" type="button" aria-selected="false" role="tab" tabindex="-1">Description </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#video" type="button" aria-selected="false" role="tab" tabindex="-1">Video </button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                  <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#product__Type" type="button" aria-selected="true" role="tab" tabindex="-1">Product Type </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="descriptionarea__link" data-bs-toggle="tab" data-bs-target="#delivery__system" type="button" aria-selected="false" role="tab">Delivery system </button>
                  </li> --}}
            </ul>
              <div class="tab-content tab__content__wrapper" id="myTabContent1">
                <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description">  
                 
                     <p>
                        {{ $product?->description }}
                    </p>
                   
       
            
            </div>
                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video">
                  
                        <p>
                           As opposed __ using 'Content here, content ____', making it look like ________
                           English. Many desktop __________ packages and web page _______ now use Lorem
                           _____ as their default model ____, and a search for '_____ ipsum' will uncover
                           ____ web sites still in _____ infancy. Various versions have _______ over the
                           years, _________ by accident, sometimes on _______ injected humour and the
                           like. It is a ____ established fact that a ______ will be distracted by ___
                           readable content of _ page when looking at ___ layout. The point of _____ Lorem
                           Ipsum is ____ it has a more-or-less ______ distribution of letters
                        </p>
                        <p>
                           If you ___ going to use a _______ of Lorem Ipsum, you ____ to be sure there
                           isn't anything embarrassing hidden __ the middle of text. ___ the Lorem Ipsum
                           __________ on the Internet tend __ repeat predefined chunks as _________, making
                           this the _____ true generator on the ________. It uses a dictionary __ over 200
                           Latin _____, combined with a handful __ model sentence structures, to ________
                           Lorem Ipsum which _____ reasonable. The generated Lorem _____ is therefore
                           always ____ from repetition, injected humour, __ non-characteristic words etc
                        </p>
           
                </div>
                {{-- <div class="tab-pane fade " id="product__Type" role="tabpanel" aria-labelledby="product__Type">
                 
                        <p>
                           As opposed __ using 'Content here, content ____', making it look like ________
                           English. Many desktop __________ packages and web page _______ now use Lorem
                           _____ as their default model ____, and a search for '_____ ipsum' will uncover
                           ____ web sites still in _____ infancy. Various versions have _______ over the
                           years, _________ by accident, sometimes on _______ injected humour and the
                           like. It is a ____ established fact that a ______ will be distracted by ___
                           readable content of _ page when looking at ___ layout. The point of _____ Lorem
                           Ipsum is ____ it has a more-or-less ______ distribution of letters
                        </p>
                        <p>
                           If you ___ going to use a _______ of Lorem Ipsum, you ____ to be sure there
                           isn't anything embarrassing hidden __ the middle of text. ___ the Lorem Ipsum
                           __________ on the Internet tend __ repeat predefined chunks as _________, making
                           this the _____ true generator on the ________. It uses a dictionary __ over 200
                           Latin _____, combined with a handful __ model sentence structures, to ________
                           Lorem Ipsum which _____ reasonable. The generated Lorem _____ is therefore
                           always ____ from repetition, injected humour, __ non-characteristic words etc
                        </p>
           
                 
                </div>
                <div class="tab-pane fade" id="delivery__system" role="tabpanel" aria-labelledby="delivery__system">
                
                        <p>
                           As opposed __ using 'Content here, content ____', making it look like ________
                           English. Many desktop __________ packages and web page _______ now use Lorem
                           _____ as their default model ____, and a search for '_____ ipsum' will uncover
                           ____ web sites still in _____ infancy. Various versions have _______ over the
                           years, _________ by accident, sometimes on _______ injected humour and the
                           like. It is a ____ established fact that a ______ will be distracted by ___
                           readable content of _ page when looking at ___ layout. The point of _____ Lorem
                           Ipsum is ____ it has a more-or-less ______ distribution of letters
                        </p>
                        <p>
                           If you ___ going to use a _______ of Lorem Ipsum, you ____ to be sure there
                           isn't anything embarrassing hidden __ the middle of text. ___ the Lorem Ipsum
                           __________ on the Internet tend __ repeat predefined chunks as _________, making
                           this the _____ true generator on the ________. It uses a dictionary __ over 200
                           Latin _____, combined with a handful __ model sentence structures, to ________
                           Lorem Ipsum which _____ reasonable. The generated Lorem _____ is therefore
                           always ____ from repetition, injected humour, __ non-characteristic words etc
                        </p>
           
                </div> --}}
              </div>
        </div>
    </div>
</div>
</div>

<!-- discription__section__end -->

        <!-- related__section__start -->
        <div class="related__section sp_bottom_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title text-center">
                            <h2>Related Products </h2>
                        </div>
                    </div>
                </div>

                <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__1.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__2.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+5 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    
                          



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__3.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__4.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>B. Pair of Blue _____ </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+8 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    
                          



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__5.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__6.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+3 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__7.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__8.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>S. Mokmol Jacket </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+2 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__1.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__2.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+5 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    
                          



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__3.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__4.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>B. Pair of Blue _____ </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+8 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    
                          



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__5.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__6.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+3 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__7.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__8.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>S. Mokmol Jacket </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+2 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                   
                </div>

            </div>
         </div>
        <!-- related__section__start -->

        <!-- related__section__start -->
        {{-- <div class="related__section sp_bottom_50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__title text-center">
                            <h2>Recently Viewed </h2>
                        </div>
                    </div>
                </div>

                <div class="row grid__responsive row__custom__class feature__slider__active slider__default__arrow">
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__35.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__36.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+5 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                       
                           



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__33.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__34.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>B. Pair of Blue _____ </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+8 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                       
                           



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__32.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__31.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+3 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__28.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__29.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>S. Mokmol Jacket </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+2 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__26.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__25.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2026/06/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>W. Men Formal T-shirt </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+5 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                       
                           



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__23.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__22.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>B. Pair of Blue _____ </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+8 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                       
                           



                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__20.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__21.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="new__badge">New </span>
                                </div>


                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>F. Ultimate Smart Watch </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: red;">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: green;">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: blue;">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: black;">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+3 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 column__custom__class">
                        <div class="grid__wraper">
                            <div class="grid__wraper__img">
                                <div class="grid__wraper__img__inner">
                                    <a href='single-product.html'>
                                        <img class="primary__image" src="{{asset('/')}}frontend/img/grid/grid__19.png" alt="Primary Image" />
                                        <img class="secondary__image" src="{{asset('/')}}frontend/img/grid/grid__18.png" alt="Secondary Image" />
                                    </a>
                                </div>
                                <div class="grid__wraper__icon">                                
                                    <ul>
                                        <li>
                                            <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <a class="quick__view__action" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View" data-bs-original-title="Quick View">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </span>
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart" data-bs-original-title="Add To Cart">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>                                             
                                        </li>

                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Wishlist" data-bs-original-title="Add To Wishlist">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Compare" data-bs-original-title="Add To Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                               
                                            </a>
                                        </li>

                                    </ul>   
                                </div>

                                <div class="grid__wraper__badge">
                                    <span class="sale__badge">-15% </span>
                                </div>

                                <div class="grid__wraper__countdown" data-countdown="2027/02/01">
                                    <div class="count">
                                        <p>422 </p><span>Days </span>
                                    </div>
                                    <div class="count">
                                        <p>23 </p>  <span>Hrs </span>
                                    </div>
                                    <div class="count">
                                        <p>25 </p>  <span>Min </span>
                                    </div>
                                    <div class="count">
                                        <p>01 </p>  <span>Sec </span>
                                    </div>
                                </div>

                            </div>
                            <div class="grid__wraper__info">
                                <h3 class="grid__wraper__tittle">
                                    <a href='single-product.html' tabindex='0'>S. Mokmol Jacket </a>
                                </h3>
                                <div class="grid__wraper__price">
                                    <del>$72.00 </del>
                                    <span>$47.00 </span> 
                                </div>
                                <div class="grid__wraper__color">
                                    <ul class="color-categories grid-color-swatch color__img__parent d-flex justify-content-center">
                                        <li class="red color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Red" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__1.png);">
                                            </label>
                                        </li>
                                        <li class="green color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Green" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__2.png);">
                                            </label>
                                        </li>
                                        <li class="blue color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__3.png);">
                                            </label>
                                        </li>
                                        <li class="black color_img_variant">
                                            <label data-bs-toggle="tooltip" data-bs-placement="top" title="Black" style="background: url({{asset('/')}}frontend/img/grid/swatch__thumb__4.png);">
                                            </label>
                                        </li>
                                        <li class="vaiant-plus-one">
                                            <a href='single-product.html' tabindex='0'>
                                                <span>+2 </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                   
                </div>

            </div>

        </div> --}}
        <!-- related__section__start -->


        <!-- faq__section__start -->
            {{-- <div class="faq sp_bottom_50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="faq__heading text-center section__title">
                                <h2 class="">FAQs </h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       ___ to buy a product?
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first ____'_ accordion body. </strong> It is shown __ default, until the collapse ______ adds the appropriate classes ____ we use to style ____ element. These classes control ___ overall appearance, as well __ the showing and hiding ___ CSS transitions. You can ______ any of this with ______ CSS or overriding our _______ variables. It's also worth ______ that just about any ____ can go within the  <code>.accordion-body </code>, though the transition ____ limit overflow.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       ___ can i make refund ____ your website?
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second ____'_ accordion body. </strong> It is hidden __ default, until the collapse ______ adds the appropriate classes ____ we use to style ____ element. These classes control ___ overall appearance, as well __ the showing and hiding ___ CSS transitions. You can ______ any of this with ______ CSS or overriding our _______ variables. It's also worth ______ that just about any ____ can go within the  <code>.accordion-body </code>, though the transition ____ limit overflow.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       _ am a new user. ___ should I start?
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third ____'_ accordion body. </strong> It is hidden __ default, until the collapse ______ adds the appropriate classes ____ we use to style ____ element. These classes control ___ overall appearance, as well __ the showing and hiding ___ CSS transitions. You can ______ any of this with ______ CSS or overriding our _______ variables. It's also worth ______ that just about any ____ can go within the  <code>.accordion-body </code>, though the transition ____ limit overflow.
                                    </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                           I __ a new user. How ______ I start?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <strong>This is the third ____'_ accordion body. </strong> It is hidden __ default, until the collapse ______ adds the appropriate classes ____ we use to style ____ element. These classes control ___ overall appearance, as well __ the showing and hiding ___ CSS transitions. You can ______ any of this with ______ CSS or overriding our _______ variables. It's also worth ______ that just about any ____ can go within the  <code>.accordion-body </code>, though the transition ____ limit overflow.
                                        </div>
                                    </div>
                                    </div>


                                </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!-- faq__section__end -->


        <!-- contact__section__start  -->
        <div class="single__product__contact sp_bottom_80">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single__product__contact__text text-center">
                            <h2>For furthermore help, contact ____ our support team. </h2>
                            <div class="single__product__contact__button">
                            <a href="#" class="default__button">Contact Us </a>
                        </div>
                        <h3 class="single__product__contact__number"><i class="fas fa-phone"></i> +0123-456-789 </h3>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    <!-- contact__section__end  -->





@endsection

@section('script')
    <script>
        
        function addToCart(type) {                 
            var variant = $('.list-sizes').find('.active').length;
            if (variant == 0) {
                alert('Please select a variant');
                return false;
            }
            let activeSpan = $('.list-sizes').find('li.active .item-size');

            let sku_code = activeSpan.attr('sku_code');
            let variant_name = activeSpan.attr('variant_name');
            let price = activeSpan.attr('price');
            let image = activeSpan.attr('image');

            let quantity = parseInt($('#quantity').val());

            if (cartLS.exists(sku_code)) {
                cartLS.update(sku_code,'quantity',quantity)
            }else{
                cartLS.add({
                    id: sku_code, 
                    product_id: "{{$product->id}}",
                    name: "{{$product->name}}", 
                    variant: variant_name,
                    price: price, sku_code: sku_code,image, quantity})
            }

            // global set 
            cartCount();

            if (type == 'buy_now') {
                window.location.href = "{{route('checkout')}}"
                return false;
            }
            console.log(cartLS.list());
            
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: variant_name+" has been added to your cart",
                showConfirmButton: false,
                timer: 3000
            })

            cartProductSet()
        }

        function clickVariant() {

            document.querySelectorAll('.item-size').forEach(function(item) {
                item.classList.remove('active');
            });

            // তারপর যেই span এ ক্লিক হয়েছে, সেটায় active ক্লাস যোগ করবো
            event.target.classList.add('active');

            setTimeout(() => {
                let price =  document.querySelector('.item-size.active').getAttribute('price'); //$('.list-sizes').find('.active').attr('price');
                
                $('.price-main').html(price+"{{$config->currency_symbol}}")
                console.log(price);
            }, 10);
        }
    </script>
@endsection