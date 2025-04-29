<style>
.card {
  background: white;
  border-radius: 20px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  margin-right: 20px; 
  width: 220px;
  height: 220px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;

  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-content {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}


    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
    }

    .brand-logo {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 1rem;
      object-fit: cover;
      border: 2px solid #ddd;
    }

    .brand-name {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #333;
    }

    .brand-tagline {
      font-size: 0.95rem;
      color: #666;
      margin-bottom: 1.5rem;
    }

    .card button {
      padding: 0.7rem 1.5rem;
      background-color: #0057ff;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 0.95rem;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .card button:hover {
      background-color: #0044cc;
    }
</style>
<!-- Category Section -->
<div class="best__selling" style="padding-bottom: 40px;">
    <div class="container" style="padding: 0;">
      <div class="row" style="margin: 0;">
        <div class="col-12">
          <div class="section__title" style="padding: 0 !important; margin-bottom: 20px;">
            <h2 style="margin: 0;">Category</h2>
          </div>
        </div>
      </div>
    </div>



    
  
    <div class="collection__2" style="padding-top: 40px; padding-bottom: 30px;">
      <div class="container" style="padding: 0;">
        <div class="collections__slider__active__5 slider__default__arrow">
          @foreach ($brands as $brand)

            <div class="card">
                <i class="fas fa-gem brand-icon fas-2x"></i>
                <div class="brand-name">{{$brand['name']}}</div>
                <a href="{{route('brand-products', $brand['slug'])}}">
                    <button>Products</button>
                  </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  
  <!-- Include Slick Carousel and jQuery -->

  
    
  
  
  
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