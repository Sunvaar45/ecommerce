<header>
    <section class="top-bar">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="/" class="navbar-brand"><i class="fa-solid fa-truck-fast"></i> {{ $siteTitle }}</a>
                </div>

                <div class="col-lg-5 col-sm-8 col-8 order-lg-last">
                    <div class="text-end">
                        <a href="{{ route('account.information.edit') }}" class="btn btn-light">
                            <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">
                                @if (!$user)
                                    Giriş Yap
                                @else
                                    Hesabım
                                @endif
                            </span>
                        </a>
                        <a href="#" class="btn btn-light">
                            <i class="fa fa-heart"></i> <span class="ms-1 d-none d-sm-inline-block">Listem</span>
                        </a>
                        <a href="shopping-cart.html" class="btn btn-light">
                            <i class="fa fa-shopping-cart"></i> <span
                                class="ms-1 d-none d-sm-inline-block">Sepetim</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form>
                        <div class="input-group">
                            <input type="text" placeholder="Anahtar kelime" class="form-control">
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a href="{{ route('category.show', ['id' => $category->id]) }}"
                                class="nav-link ps-0">{{ $category->name }}</a>
                        </li>
                    @endforeach

                    <!-- <li class="nav-item">
                            <a href="#" class="nav-link ps-0">Elektronik</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kitap</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Spor</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Giyim</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Market</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Diğer Kategoriler</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Kategori 1</a></li>
                                <li><a href="#" class="dropdown-item">Kategori 2</a></li>
                                <li><a href="#" class="dropdown-item">Kategori 3</a></li>
                            </ul>
                        </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>