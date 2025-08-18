@extends('layouts.app')

@section('breadcrumb')
    <nav>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/">Ana Sayfa</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('category.show', $productCategory->id) }}">
                    {{ $productCategory->name }}</a>
            </li>
            <li class="breadcrumb-item">
                {{ $product->name }}...
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="gallery-wrap">
                        <div class="img-big-wrap img-thumbnail">
                            <a href="img/1-big.jpeg" data-type="image" data-fslightbox>
                                <img src="img/1.jpeg" alt="">
                            </a>
                        </div>
                        <div class="thumbs-wrap">
                            <a href="img/1-big.jpeg" data-type="image" data-fslightbox>
                                <img src="img/1.jpeg" height="60" alt="">
                            </a>
                            <a href="img/2-big.jpeg" data-type="image" data-fslightbox>
                                <img src="img/2.jpeg" height="60" alt="">
                            </a>
                            <a href="img/3-big.jpeg" data-type="image" data-fslightbox>
                                <img src="img/3.jpeg" height="60" alt="">
                            </a>
                            <a href="img/4-big.jpeg" data-type="image" data-fslightbox>
                                <img src="img/4.jpeg" height="60" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <article>
                        <h4 class="title text-dark">{{ $product->name }}</h4>
                        <!-- <h4 class="title text-dark">Apple Watch Yıldız Işığı Alüminyum Kasa ve Spor Kordon</h4> -->

                        <!-- product rating - make dynamic -->
                        <div class="rating-wrap">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>

                        <!-- product stock - make dynamic -->
                        <p class="text-muted">{{ $product->stock > 0 ? 'Stokta Var' : 'Stokta Yok' }}</p>

                        @if ($product->has_discount)
                            <div class="mb-3">
                                <b class="price h5">{{ $product->discount_price }} ₺</b>
                                <del class="price">{{ $product->price }} ₺</del>
                            </div>
                        @else
                            <div class="mb-3">
                                <b class="price h5">{{ $product->price }} ₺</b>
                            </div>
                        @endif

                        {{-- product description --}}
                        <div class="product-description mb-3">{{ $product->description }}</div>

                        <dl class="row border-bottom">
                            <dt class="col-3">Renk</dt>
                            <dd class="col-9">{{ $product->color }}</dd>

                        </dl>

                        <div class="buttons">
                            <a href="#" class="btn btn-warning">
                                <i class="fa fa-shopping-basket me-1"></i> Sepete Ekle
                            </a>
                            <a href="#" class="btn btn-light">
                                <i class="fa-regular fa-heart basket me-1"></i> Listeye Ekle
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <h4 class="mb-3">Benzer Ürünler</h4>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
            @forelse ($similarProducts as $similarProduct)
                
                {{-- skip the same product --}}
                @if ($similarProduct->id == $product->id)
                    @continue
                @endif

                <x-product-card :product="$similarProduct" />
            @empty
                <p>Benzer ürün bulunamadı.</p>
            @endforelse
            <!-- <div class="row gy-3">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="fa fa-regular fa-heart"></span>
                            <img src="img/2.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor
                                Kordon</a>
                            <div class="price-wrap mb-3">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                            <a href="#" class="btn btn-light w-100">
                                <i class="fa fa-shopping-basket me-1"></i> Sepete Ekle
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="/js/fslightbox.js"></script>
@endsection