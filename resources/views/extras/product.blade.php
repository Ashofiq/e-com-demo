<div class="best__selling sp_bottom_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="section__title">
                    <h2>Latest Product </h2>
                </div>
            </div>
        </div>

        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                    @foreach ($products['data'] as $product)
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
                                            {{number_format($product['skus'][0]['price'], 2)}}{{ $config->currency_symbol }}
                                        </span>
                                        @if (count($product['skus']) > 1)
                                            
                                            <del style="color: #888; font-size: 16px; text-decoration: line-through; margin-left: 8px;">
                                                {{number_format(collect($product['skus'])->max('price'), 2)}}{{ $config->currency_symbol }}
                                            </del>
                                        @endif
                                    @endif
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <button style="flex: 1; padding: 10px; background-color: #d90429; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Cart</button>
                                    <button style="flex: 1; padding: 10px; background-color: #3a0ca3; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="best__selling__button">
                    <a class="default__button" href="#">View All </a>
                </div>
            </div>
        </div>

    
    </div>
</div>