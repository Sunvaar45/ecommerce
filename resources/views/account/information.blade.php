@extends('layouts.app')

@section('title', $siteTitle . ' - Hesap Düzenle')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h4 class="mb-4" style="color: var(--primary);">Hesap Bilgileri</h4>

                        <x-success-alert />
                        <x-error-alert />

                        <form method="POST" action="{{ route('account.information.update') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ad Soyad</label>
                                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Adın Soyadın">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">E-Posta</label>
                                <input type="text" name="email" value="{{ old('email', $user->email) }}"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="sen@örnek.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr class="my-4">

                            <p class="small text-muted mb-3">Şifreyi değiştirmek istemiyorsan boş bırak.</p>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Yeni Şifre</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Yeni Şifre (Tekrar)</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="••••••••">
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary w-100 fw-semibold">
                                    Kaydet
                                </button>
                                <a href="{{ route('home') }}" class="btn btn-outline-secondary fw-semibold">
                                    İptal
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection