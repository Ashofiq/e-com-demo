<style>
  .brand-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .brand-card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    width: 220px;
    padding: 24px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .brand-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
  }

  .brand-name {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
  }

  .brand-description {
    font-size: 14px;
    color: #666;
  }

  @media (max-width: 600px) {
    .brand-card {
      width: 90%;
    }
  }
</style>
<div class="row">
  <div class="col-xl-12">
      <div class="section__title text-center">
          <h2>Shop by brand</h2>
      </div>
  </div>
</div>

<div class="category sp_bottom_50">
  <div class="container">
    <div class="row">
      @foreach ($brands as $brand)
      {{-- <a href="{{route('brand-products', $brand['slug'])}}" class="brand-card">
        <div class="brand-name">{{$brand['name']}}</div>
      </a> --}}
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="category__single category__single__2">
                <a href="{{route('brand-products', $brand['slug'])}}" style="text-decoration: none; color: inherit; display: block;"> <!-- Makes entire div clickable -->
                    <div class="category__img__2" style="
                        background-color: #FBCA3A;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 150px;
                        border-radius: 10px;
                        color: white;
                        font-weight: bold;
                        cursor: pointer; /* Changes cursor to indicate clickable */
                        font-size: 150%;
                    ">
                        {{$brand['name']}}
                    </div>
                </a>
            
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
