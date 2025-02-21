<section class="section box-category-type-2">
    <div class="container"> 
      <div class="text-center">
        <h3 class="mb-40 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
          Category 
        </h3>
      </div>
      <div class="row"> 
        {{-- <div class="col-lg-6">
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
        </div> --}}
        @foreach ($categories as $category)
          <div class="col-lg-4 col-md-3 col-sm-12 card-style-small">
            <div class="cardCategory wow fadeInUp">
              <div class="cardImage">
                <a href="{{route('category', $category['slug'])}}">
                  <img src="{{asset('assets/imgs/page/homepage3/cat3.png')}}" alt="{{$category['name']}}" />
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
  </section>