<div class="best__selling" style="padding-bottom: 40px;">

  <div class="collection__2" style="padding-top: 40px; padding-bottom: 30px;">
    <div class="container">

      
      <div class="row">
        <div class="col-xl-12">
            <div class="section__title text-center">
                <h2>Category</h2>
            </div>
        </div>
      </div>

      <div class="row grid__responsive collections__slider__active__5 row__custom__class slider__default__arrow">
        @foreach ($categories as $category)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 column__custom__class">
          <div class="collection__single__2">
            <a href="{{ route('category', $category['slug']) }}" class="collection__img__2" style="display: block; width: 100%; height: 200px; overflow: hidden; border-radius: 10px;">
              <img src="{{ $category['image'] }}" alt="Category: {{ $category['name'] }}" loading="lazy"
                   style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
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



{{-- <section class="section box-category-type-2">
    <div class="container"> 
      <div class="text-center">
        <h3 class="mb-40 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
          Category 
        </h3>
      </div>
      <div class="row"> 
        <div class="col-lg-6">
          <div class="cardCategory wow fadeInUp">
            <div class="cardImage"><a href="#"><img src="{{asset('assets/imgs/page/homepage3/cat1.png')}}" alt="Guza" /></a></div>
            <div class="cardInfo">
              <h4 class="cardTitle">Premium Jeans </h4><a class="link-underline-2" href="#">Mens </a><a class="link-underline-2" href="#">Womens </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cardCategory wow fadeInUp">
            <div class="cardImage"><a href="#"><img src="{{asset('assets/imgs/page/homepage3/cat2.png')}}" alt="Guza" /></a></div>
            <div class="cardInfo">
              <h4 class="cardTitle">Sweaters </h4><a class="link-underline-2" href="#">Mens </a><a class="link-underline-2" href="#">Womens </a>
            </div>
          </div>
        </div>
        @foreach ($categories as $category)
          <div class="col-lg-4 col-md-3 col-sm-12 card-style-small">
            <div class="cardCategory wow fadeInUp">
              <div class="cardImage">
                <a href="{{route('category', $category['slug'])}}">
                  <img src="{{$category['image']}}" alt="{{$category['name']}}" />
                </a>
              </div>
              <div class="cardInfo">
                <a href="{{route('category', $category['slug'])}}">
                  <h4 class="cardTitle">{{$category['name']}} </h4>
                </a>
               
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section> --}}