<div class="col">
    <div class="card shadow">
        <div class="img-wrap">
            @if($product->has_discount)
                <span class="badge bg-success">İndirim</span>
            @endif
            <img src="{{ url('http://127.0.0.1:8001/storage/images/products/' . $product->id . '/' . $product->image_url) }}" 
                alt="{{ $product->name }}" class="card-img-top">
        </div>
        <div class="border-top info-wrap">
            <a href="#" class="float-end btn btn-light">
                <i class="fa-regular fa-heart"></i>
            </a>
            <a href="{{ route('product.show', $product->id) }}" class="title text-truncate">{{ $product->name }}</a>
            <div class="price-wrap">
                @if ($product->has_discount)
                    <span class="price-discount">
                        {{ number_format($product->discount_price, 2, ',', '.') }} ₺
                    </span>
                    <del class="price">{{ number_format($product->price, 2, ',', '.') }} ₺</del>
                @else
                    <span class="price-discount">
                        {{ number_format($product->price, 2, ',', '.') }} ₺
                    </span>
                @endif
                <!-- <span class="price-discount">
                    {{ number_format($product->discount_price ?? $product->price, 2, ',', '.') }} ₺
                </span>
                @if($product->has_discount)
                    <del class="price">{{ number_format($product->price, 2, ',', '.') }} ₺</del>
                @endif -->
            </div>
        </div>
    </div>
</div>