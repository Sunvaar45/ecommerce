@extends('layouts.app')

@section('content')
    <section class="mt-3">
        <div class="container">
            <h3 class="h4 mb-1 mb-lg-3" style="text-align: center;">"{{ $chosenCategory->name }}" Kategorisi Ürünleri</h3>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
                @forelse ($products as $product)
                    <!-- <div class="col">
                        <div class="card shadow">
                            <div class="img-wrap">
                                @if($product->discount_price !== null && $product->discount_price < $product->price)
                                    <span class="badge bg-success">İndirim</span>
                                @endif
                                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="card-img-top">
                            </div>
                            <div class="border-top info-wrap">
                                <a href="#" class="float-end btn btn-light">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="title text-truncate">{{ $product->name }}</a>
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
                    </div> -->
                    <x-product-card :product="$product" />
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">Bu kategoride ürün bulunamadı.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection