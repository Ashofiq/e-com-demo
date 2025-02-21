<div class="col-lg-3 col-md-6">
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
  </div>