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

  <div style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; font-family: Arial, sans-serif; background: #fff;">
    <a href="{{route('product.details', $product['slug'])}}" style="display: block; padding: 10px;">
        <img src="{{$product['image']}}" alt="{{$product['name']}}" style="width: 100%; border-radius: 10px;">
    </a>
    <div style="padding: 10px;">
        <a href="{{route('product.details', $product['slug'])}}" style="font-size: 16px; font-weight: normal; margin: 0 0 10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block;">
            {{$product['name']}}
        </a>
        <div style="margin-bottom: 10px;">
            @if(isset($product['skus']))
                <span style="color: #e63946; font-size: 18px; font-weight: bold;">
                    {{number_format($product['skus'][0]['price'], 2)}}
                </span>
                @if (count($product['skus']) > 1)
                    - 
                    <span style="color: #e63946; font-size: 18px; font-weight: bold;">
                        {{number_format(collect($product['skus'])->max('price'), 2)}}
                    </span>
                @endif
                <span style="color: #e63946; font-size: 18px; font-weight: bold;">
                    {{ $config->currency_symbol }}
                </span>
            @endif
        </div>
        <div style="display: flex; gap: 10px;">
            <button onclick="addToCart_single('', '{{json_encode($product)}}')" style="flex: 1; height:40px; padding: 5px 10px; background-color: #d90429; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                Cart
            </button>
            <button onclick="addToCart_single('buy_now', '{{json_encode($product)}}')" style="flex: 1; height:40px; padding: 5px 10px; background-color: #3a0ca3; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                Buy Now
            </button>
        </div>
    </div>
</div>

  {{-- <div class="col-lg-3 col-md-6 mb-4"> 
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
</div> --}}



