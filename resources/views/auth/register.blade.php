@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="mb-4 text-center" style="color: var(--primary);">Hoşgeldin</h4>
                        <form method="POST" action="{{ route('register.post') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Ad Soyad</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" autofocus
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Adın Soyadın">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="sen@örnek.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Şifre</label>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-semibold">Şifre (Tekrar)</label>
                                <input id="password_confirmation" type="password" name="password_confirmation"
                                    class="form-control" placeholder="••••••••">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                Kayıt Ol
                            </button>

                            <div class="text-center mt-3">
                                Zaten hesabın var mı? <a href="{{ route('login') }}">Giriş yap</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection