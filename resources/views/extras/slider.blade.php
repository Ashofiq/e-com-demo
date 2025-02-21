<section class="section banner-homepage3">
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
  </section>