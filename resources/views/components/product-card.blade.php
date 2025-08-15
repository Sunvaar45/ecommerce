<div class="col">
    <div class="card shadow">
        <div class="img-wrap">
            @if($product->discount_price !== null && $product->discount_price < $product->price)
                <span class="badge bg-success">İndirim</span>
            @endif
            <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top">
        </div>
        <div class="border-top info-wrap">
            <a href="#" class="float-end btn btn-light">
                <i class="fa-regular fa-heart"></i>
            </a>
            <a href="{{ route('product.show', $product->id) }}" class="title text-truncate">{{ $product->name }}</a>
            <div class="price-wrap">
                <span class="price-discount">
                    {{ number_format($product->discount_price ?? $product->price, 0, ',', '.') }} ₺
                </span>
                @if($product->discount_price)
                    <del class="price">{{ number_format($product->price, 0, ',', '.') }} ₺</del>
                @endif
            </div>
        </div>
    </div>
</div>