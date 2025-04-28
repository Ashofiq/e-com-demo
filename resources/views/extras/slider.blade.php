<div class="herobanner herobanner__3">
        
  <div class="herobannerarea__slider slider__default__arrow herobanner__arrow slider__default__dot herobanner__dot">
        @foreach ($sliders['sliders'] as $slider)
     <div class="herobannerarea__slider__single position-relative">
  
  <div class="herobannerarea__slider__image">
      <img class="img-fluid" src="{{ $slider['image'] }}" alt="Slide Image" />
  </div>

  <div class="herobanner__inner__3">
      <div class="herobanner__text__wraper ltn__slide-animation">

          <h1 class="herobanner__title animated">
              <strong>{{ $slider['name'] }}</strong>
          </h1>

          <div class="herobanner__text animated">
              <p>Enchanting Styles for Dreamy _____. </p>
          </div>

          <div class="herobanner__button animated">
              <a href="{{ $slider['button_url'] }}" class="default__button" tabindex="0">
                  Shop Now
              </a>
          </div>
          
      </div>
  </div>

   </div>
     @endforeach
  </div>
</div>




{{-- <section class="section banner-homepage3">
    <div class="container">
      <div class="box-banner-home3">
        <div class="box-swiper">
          <div class="swiper-container swiper-banner pb-0">
            <div class="swiper-wrapper">
              
              @foreach ($sliders['sliders'] as $slider)
                <div class="swiper-slide">
                  <div class="box-cover-image" style="background-image:url({{$slider['image']}})"></div>
                  <div class="box-banner-info wow fadeInLeft">
                    <h2 class="heading-title-medium color-primary-dark mb-15">
                      {{$slider['name']}} <br class="d-block" />
                    </h2>
                    @if($slider['button_url'] != '')
                    <a class="link-underline-2 mr-25" href="{{$slider['button_url']}}">Shop Now </a>
                    @endif
                  </div>
                </div>
              @endforeach
             
             
            </div>
            <div class="box-pagination-button">
              <div class="swiper-pagination swiper-pagination-banner"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}