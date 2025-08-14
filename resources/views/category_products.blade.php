<div class="container mt-4">
    <h2>{{ $chosenCategory->name }} Ürünleri</h2>
    @if($products->count())
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <img src="{{ $product->image_url ?? '/img/default.jpg' }}" alt="{{ $product->name }}" class="card-img-top">
                        </div>
                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">{{ $product->name }}</a>
                            <div class="price-wrap">
                                <span class="price-discount">{{ $product->discount_price ?? $product->price }} ₺</span>
                                @if($product->discount_price)
                                    <del class="price">{{ $product->price }} ₺</del>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Bu kategoride ürün bulunamadı.</p>
    @endif
</div>