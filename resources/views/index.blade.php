@extends('layouts.app')

@section('title', 'E-Commerce - Anasayfa')

@section('content')
    <section class="mt-3">
        <div class="container">
            <div class="card">
                <div class="row p-1 p-lg-2 gx-2">
                    <div class="col-lg-3 d-none d-lg-block">
                        <!-- menu -->
                        <nav class="nav nav-pills flex-column flex-nowrap overflow-auto slider_nav">
                            @foreach ($categories as $category)
                                <a href="{{ route('category.show', ['id' => $category->id]) }}"
                                    class="nav-link">{{ $category->name }}</a>
                            @endforeach
                            <!-- <a href="#" class="nav-link active">Elektronik</a>
                            <a href="#" class="nav-link">Giyim</a>
                            <a href="#" class="nav-link">Spor</a>
                            <a href="#" class="nav-link">Kozmetik</a>
                            <a href="#" class="nav-link">Kitap</a>
                            <a href="#" class="nav-link">Anne/Bebek</a>
                            <a href="#" class="nav-link">Anne/Bebek</a>
                            <a href="#" class="nav-link">Anne/Bebek</a>
                            <a href="#" class="nav-link">Anne/Bebek</a>
                            <a href="#" class="nav-link">Anne/Bebek</a>
                            <a href="#" class="nav-link">Anne/Bebek</a> -->
                        </nav>
                    </div>
                    <div class="col-lg-9">
                        <!-- slider -->
                        <div id="slider" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" ></button>
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" ></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/img/slider-1.jpeg" alt="slider 1" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/slider-2.jpeg" alt="slider 2" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/slider-3.jpeg" alt="slider 3" class="d-block w-100">
                                </div>
                            </div>
                            <button type="button" class="carousel-control-prev" data-bs-target="#slider" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button type="button" class="carousel-control-next" data-bs-target="#slider" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <h3 class="h4 mb-1 mb-lg-3">Son Eklenenler</h3>

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2">
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/1.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="details.html" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/2.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/3.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/4.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/5.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <div class="img-wrap">
                            <span class="badge bg-success">İndirim</span>
                            <img src="img/6.jpeg" alt="ürün 1" class="card-img-top">
                        </div>

                        <div class="border-top info-wrap">
                            <a href="#" class="float-end btn btn-light">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="title text-truncate">Apple Watch Yıldız Işığı Alüminyum Kasa ve spor Kordon</a>
                            <div class="price-wrap">
                                <span class="price-discount">45.999 ₺</span>
                                <del class="price">49.999 ₺</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
