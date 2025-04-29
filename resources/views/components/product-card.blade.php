{{-- <div class="col-lg-3 col-md-6">
    <div class="cardProduct wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <div class="cardImage">
        
        <a href="{{route('product.details', $product['slug'])}}">
            <img class="imageMain" src="{{$product['image']}}" alt="{{$product['name']}}">
            <img class="imageHover" src="{{$product['image']}}" alt="{{$product['name']}}">
        </a>
        <div class="button-select">
            <a href="{{route('product.details', $product['slug'])}}">
                Details 
            </a>
        </div>
       
      </div>
      <div class="cardInfo">
            <a href="{{route('product.details', $product['slug'])}}">
                <h6 class="text-16-medium cardTitle">{{$product['name']}} </h6>
            </a>
            <p class="body-p2 cardDesc">৳ {{$product['skus'][0]['price']}} </p>
        
      </div>
    </div>
  </div> --}}

  <div class="col-lg-3 col-md-6 mb-4"> 
    <div class="card h-100 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <a href="{{ route('product.details', $product['slug']) }}" class="text-decoration-none text-dark">
            <div class="cardImage position-relative overflow-hidden">
                <img class="card-img-top" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
            </div>
            <div class="card-body text-center">
                <h6 class="card-title text-16-medium mb-2">{{ $product['name'] }}</h6>
                <p class="card-text body-p2 mb-3">৳ {{ $product['skus'][0]['price'] }}</p>
                <a href="{{ route('product.details', $product['slug']) }}" class="btn btn-primary btn-sm">Details</a>
            </div>
        </a>
    </div>
</div>



