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

<div class="brand-list">
  @foreach ($brands as $brand)
  <a href="{{route('brand-products', $brand['slug'])}}" class="brand-card">
    <div class="brand-name">{{$brand['name']}}</div>
  </a>
  @endforeach
</div>
