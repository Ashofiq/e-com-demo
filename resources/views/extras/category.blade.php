<div class="best__selling" style="padding-bottom: 40px;">

  <div class="collection__2" style=" padding-bottom: 30px;">
    <div class="container">

      
      <div class="row">
        <div class="col-xl-12">
            <div class="section__title text-center">
                <h2>Category</h2>
            </div>
        </div>
      </div>

      <div class="row category_slider grid__responsive collections__slider__active__5 row__custom__class slider__default__arrow">
        @foreach ($categories as $category)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 column__custom__class">
          <div class="collection__single__2">
            <a href="{{ route('category', $category['slug']) }}" class="collection__img__2">
              <img src="{{ $category['image'] }}" alt="Category: {{ $category['name'] }}" height="278" loading="lazy">
            </a>
            <div class="collection__text__2" style="text-align: center;">
              <h5 style="margin: 0;">
                <a href="{{ route('category', $category['slug']) }}" tabindex="0" >
                  {{ $category['name'] }}
                </a>
              </h5>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

{{-- <script>
  $(document).ready(function(){
    $('.category_slider').slick({
      autoplay: true,
      dots: true,
      arrows: true,
      infinite: true,
      speed: 200,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  });
</script> --}}
