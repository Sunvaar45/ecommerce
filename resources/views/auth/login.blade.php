@extends('layouts.app')

@section('title', $siteTitle . ' - Giriş Yap')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="mb-4 text-center" style="color: var(--primary);">Hoşgeldin</h4>

                        <x-success-alert />
                        <x-error-alert />

                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">E-Posta</label>
                                <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus
                                    class="form-control @error('email') is-invalid @enderror" placeholder="sen@örnek.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">Şifre</label>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                Giriş Yap
                            </button>

                            <div class="text-center mt-3">
                                Hesabın yok mu? <a href="{{ route('register') }}">Kayıt ol</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection