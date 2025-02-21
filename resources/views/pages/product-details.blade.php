@extends('master')
@section('title', $product->name)
@section('description', $product->description)
@section('image', $product->image)
@section('url', url()->full())
@section('keywords', 'Ecommerce automation')

@section('main-section')
<style>
    .list-sizes .item-size.active {
        border-color: #111111;
        color: white;
        background: black;
    }
</style>

<div class="section block-breadcrumb">
    <div class="container"> 
        <div class="breadcrumbs"> 
            <ul> 
                <li>  <a href="{{url('/')}}">Home  </a></li>
                <li>  <a href="{{route('products')}}">Product  </a></li>
                <li>  <a href="#">{{$product->name}} </a></li>
            </ul>
        </div>
    </div>
</div>

<section class="section block-product-single">
    <div class="container">
        <div class="row mb-40">
        <div class="col-lg-6">
            <div class="detail-gallery detail-gallery-6 detail-gallery-7 detail-gallery-8">
            <div class="box-main-gallery">
                <figure class="border-radius-10">
                    <a class="zoom-image glightbox" href="{{$product?->image}}"></a>
                    <a class="glightbox link-image" href="{{$product?->image}}">
                        <img src="{{$product?->image}}" alt="kidify">
                    </a>
                </figure>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box-product-info box-product-info-stick">
            <h3 class="mb-5">{{$product->name}} </h3>
            
            <div class="block-price">
                <span class="price-main">
                    @if(isset($product->skus))
                        {{number_format($product->skus[0]['price'], 2)}}{{ $config->currency_symbol }}   
                        @if (count($product->skus) > 1)
                        -
                        {{number_format(collect($product->skus)->max('price'), 2)}}{{ $config->currency_symbol }} 
                        @endif
                    @endif
                </span> 
            </div>
            {{-- <div class="block-description">
                <p class="body-p2 neutral-medium-dark">
                   description
                 </p>
            </div> --}}
            <div class="block-size"><span>Variant: </span>
                {{-- <label>S </label> --}}
                <div class="box-list-sizes">
                    <div class="list-sizes">
                        @foreach ($product->skus as $sku)
                            <span 
                                onclick="clickVariant()"
                                sku_code="{{$sku['sku_code']}}"
                                variant_name="{{$sku['variant_name']}}" 
                                price="{{$sku['price']}}" 
                                image="{{$product->image}}" 
                                class="item-size">
                                {{$sku['variant_name']}} 
                            </span>
                        @endforeach
                    </div>
                    {{-- <a class="text-17-medium link-underline" href="#">Size Guide </a> --}}
                </div>
            </div>

            <div class="block-tags-product">
                <p class="body-p2"><span class="neutral-medium-dark">Categories: </span>
                    <a class="neutral-dark" href="{{route('category', $product?->category['slug'] ?? '1')}}">{{$product?->category['name']}} </a>
                </p>
            </div>

            <div class="block-quantity">
                <div class="text-17 neutral-medium-dark mb-10">Quantity </div>
                <div class="box-form-cart">
                <div class="form-cart detail-qty"><span class="minus"></span>
                    <input class="qty-val form-control" type="text" id="quantity" name="quantity" value="1" min="1"><span class="plus"></span>
                </div>
                <button class="btn btn-black" onclick="addToCart()">Add to Cart </button>
                <button class="btn btn-navy" onclick="addToCart('buy_now')">Buy Now </button>
                <a class="btn btn-wishlist" href="#">
                    <svg class="d-inline-flex align-items-center justify-content-center" width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_116_452)">
                        <path d="M14.001 6.52898C16.35 4.41998 19.98 4.48998 22.243 6.75698C24.505 9.02498 24.583 12.637 22.479 14.993L13.999 23.485L5.52101 14.993C3.41701 12.637 3.49601 9.01898 5.75701 6.75698C8.02201 4.49298 11.645 4.41698 14.001 6.52898ZM20.827 8.16998C19.327 6.66798 16.907 6.60698 15.337 8.01698L14.002 9.21498L12.666 8.01798C11.091 6.60598 8.67601 6.66798 7.17201 8.17198C5.68201 9.66198 5.60701 12.047 6.98001 13.623L14 20.654L21.02 13.624C22.394 12.047 22.319 9.66498 20.827 8.16998Z" fill=""></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_116_452">
                        <rect width="24" height="24" fill="white" transform="translate(2 2)"></rect>
                        </clipPath>
                    </defs>
                    </svg>
                </a>
                </div>
            </div>
            <div class="block-shipping">
                <div class="text-17 neutral-medium-dark mb-10">Shipping </div>
                <div class="free-shipping">Outside Dhaka {{$config->outside_dhaka}}{{ $config->currency_symbol }}, Over Per Kg add: {{ $config->outside_dhaka_over_per_kg }}{{ $config->currency_symbol }}</div>
                <div class="time-shipping">Inside Dhaka {{ $config->inside_dhaka }}{{ $config->currency_symbol }}, Over Per Kg add: {{ $config->inside_dhaka_over_per_kg }}{{ $config->currency_symbol }}</div>
            </div>
            <br>
            <div class="block-socials-product"><span class="body-p2 neutral-medium-dark">Share: </span><a class="social-neutral-dark" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9047 12.75H13.4437V20.1H10.1625V12.75H7.47187V9.73125H10.1625V7.40156C10.1625 4.77656 11.7375 3.3 14.1328 3.3C15.2813 3.3 16.4953 3.52969 16.4953 3.52969V6.12187H15.15C13.8375 6.12187 13.4437 6.90937 13.4437 7.7625V9.73125H16.3641L15.9047 12.75Z" fill=""></path>
                </svg></a><a class="social-neutral-dark" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.6609 8.2875C18.6609 8.45156 18.6609 8.58281 18.6609 8.74687C18.6609 13.3078 15.2156 18.525 8.88281 18.525C6.91406 18.525 5.10937 17.9672 3.6 16.9828C3.8625 17.0156 4.125 17.0484 4.42031 17.0484C6.02812 17.0484 7.50469 16.4906 8.68594 15.5719C7.17656 15.5391 5.89687 14.5547 5.47031 13.1766C5.7 13.2094 5.89687 13.2422 6.12656 13.2422C6.42187 13.2422 6.75 13.1766 7.0125 13.1109C5.4375 12.7828 4.25625 11.4047 4.25625 9.73125V9.69844C4.71562 9.96094 5.27344 10.0922 5.83125 10.125C4.87969 9.50156 4.28906 8.45156 4.28906 7.27031C4.28906 6.61406 4.45312 6.02344 4.74844 5.53125C6.45469 7.59844 9.01406 8.97656 11.8687 9.14062C11.8031 8.87812 11.7703 8.61562 11.7703 8.35312C11.7703 6.45 13.3125 4.90781 15.2156 4.90781C16.2 4.90781 17.0859 5.30156 17.7422 5.99062C18.4969 5.82656 19.2516 5.53125 19.9078 5.1375C19.6453 5.95781 19.1203 6.61406 18.3984 7.04062C19.0875 6.975 19.7766 6.77812 20.3672 6.51562C19.9078 7.20469 19.3172 7.79531 18.6609 8.2875Z" fill=""></path>
                </svg></a><a class="social-neutral-dark" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.1375 11.7C20.1375 16.1953 16.4953 19.8375 12 19.8375C11.1469 19.8375 10.3266 19.7391 9.57187 19.4766C9.9 18.9516 10.3922 18.0656 10.5891 17.3437C10.6875 16.9828 11.0812 15.4078 11.0812 15.4078C11.3437 15.9328 12.1312 16.3594 12.9516 16.3594C15.4125 16.3594 17.1844 14.0953 17.1844 11.3062C17.1844 8.61562 14.9859 6.58125 12.1641 6.58125C8.65312 6.58125 6.78281 8.94375 6.78281 11.5031C6.78281 12.7172 7.40625 14.1937 8.42344 14.6859C8.5875 14.7516 8.68594 14.7187 8.71875 14.5547C8.71875 14.4562 8.88281 13.8984 8.94844 13.6359C8.94844 13.5703 8.94844 13.4719 8.88281 13.4062C8.55469 13.0125 8.29219 12.2578 8.29219 11.5359C8.29219 9.76406 9.6375 8.025 11.9672 8.025C13.9359 8.025 15.3469 9.37031 15.3469 11.3391C15.3469 13.5375 14.2312 15.0469 12.7875 15.0469C12 15.0469 11.4094 14.3906 11.5734 13.6031C11.8031 12.6187 12.2625 11.5687 12.2625 10.8797C12.2625 10.2562 11.9344 9.73125 11.2453 9.73125C10.425 9.73125 9.76875 10.5844 9.76875 11.7C9.76875 12.4219 9.99844 12.9141 9.99844 12.9141C9.99844 12.9141 9.21094 16.3266 9.04687 16.95C8.88281 17.6719 8.94844 18.6563 9.01406 19.2797C5.99531 18.0984 3.8625 15.1781 3.8625 11.7C3.8625 7.20469 7.50469 3.5625 12 3.5625C16.4953 3.5625 20.1375 7.20469 20.1375 11.7Z" fill=""></path>
                </svg></a><a class="social-neutral-dark" href="#">
                <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.6001 10.0078C12.1001 10.0078 10.1079 12.0391 10.1079 14.5C10.1079 17 12.1001 18.9922 14.6001 18.9922C17.061 18.9922 19.0923 17 19.0923 14.5C19.0923 12.0391 17.061 10.0078 14.6001 10.0078ZM14.6001 17.4297C12.9985 17.4297 11.6704 16.1406 11.6704 14.5C11.6704 12.8984 12.9595 11.6094 14.6001 11.6094C16.2017 11.6094 17.4907 12.8984 17.4907 14.5C17.4907 16.1406 16.2017 17.4297 14.6001 17.4297ZM20.3032 9.85156C20.3032 9.26562 19.8345 8.79688 19.2485 8.79688C18.6626 8.79688 18.1938 9.26562 18.1938 9.85156C18.1938 10.4375 18.6626 10.9062 19.2485 10.9062C19.8345 10.9062 20.3032 10.4375 20.3032 9.85156ZM23.272 10.9062C23.1938 9.5 22.8813 8.25 21.8657 7.23438C20.8501 6.21875 19.6001 5.90625 18.1938 5.82812C16.7485 5.75 12.4126 5.75 10.9673 5.82812C9.56104 5.90625 8.3501 6.21875 7.29541 7.23438C6.27979 8.25 5.96729 9.5 5.88916 10.9062C5.81104 12.3516 5.81104 16.6875 5.88916 18.1328C5.96729 19.5391 6.27979 20.75 7.29541 21.8047C8.3501 22.8203 9.56104 23.1328 10.9673 23.2109C12.4126 23.2891 16.7485 23.2891 18.1938 23.2109C19.6001 23.1328 20.8501 22.8203 21.8657 21.8047C22.8813 20.75 23.1938 19.5391 23.272 18.1328C23.3501 16.6875 23.3501 12.3516 23.272 10.9062ZM21.397 19.6562C21.1235 20.4375 20.4985 21.0234 19.7563 21.3359C18.5845 21.8047 15.8501 21.6875 14.6001 21.6875C13.311 21.6875 10.5767 21.8047 9.44385 21.3359C8.6626 21.0234 8.07666 20.4375 7.76416 19.6562C7.29541 18.5234 7.4126 15.7891 7.4126 14.5C7.4126 13.25 7.29541 10.5156 7.76416 9.34375C8.07666 8.60156 8.6626 8.01562 9.44385 7.70312C10.5767 7.23438 13.311 7.35156 14.6001 7.35156C15.8501 7.35156 18.5845 7.23438 19.7563 7.70312C20.4985 7.97656 21.0845 8.60156 21.397 9.34375C21.8657 10.5156 21.7485 13.25 21.7485 14.5C21.7485 15.7891 21.8657 18.5234 21.397 19.6562Z" fill=""></path>
                </svg></a></div>
            <div class="box-detail-product box-detail-product-2">
                <ul class="nav-tabs nav-tab-product justify-content-start" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                       {!!$product->description!!}
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection

@section('script')
    <script>
        
        function addToCart(type) {                 
            var variant = $('.list-sizes').find('.active').length;
            if (variant == 0) {
                alert('Please select a variant');
                return false;
            }
            let sku_code = $('.list-sizes').find('.active').attr('sku_code');
            let variant_name = $('.list-sizes').find('.active').attr('variant_name');
            let price = $('.list-sizes').find('.active').attr('price');
            let image = $('.list-sizes').find('.active').attr('image');

            let quantity = parseInt($('#quantity').val());

            if (cartLS.exists(sku_code)) {
                cartLS.update(sku_code,'quantity',quantity)
            }else{
                cartLS.add({
                    id: sku_code, 
                    product_id: "{{$product->id}}",
                    name: "{{$product->name}}", 
                    variant: variant_name,
                    price: price, sku_code: sku_code,image, quantity})
            }

            // global set 
            cartCount();

            if (type == 'buy_now') {
                window.location.href = "{{route('checkout')}}"
                return false;
            }
            console.log(cartLS.list());
            
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: variant_name+" has been added to your cart",
                showConfirmButton: false,
                timer: 3000
            })

            cartProductSet()
        }

        function clickVariant() {
            setTimeout(() => {
                let price = $('.list-sizes').find('.active').attr('price');
                $('.price-main').html(price+"{{$config->currency_symbol}}")
                console.log(price);

            }, 10);
        }
    </script>
@endsection