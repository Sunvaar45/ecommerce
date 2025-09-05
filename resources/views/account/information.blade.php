@extends('account.layout')

@section('title', $siteTitle . ' - Hesap Bilgileri')

@section('account-content')
<h4 class="mb-4" style="color: var(--primary);">Kullanıcı Bilgilerim</h4>

<x-success-alert />
<x-error-alert />

<form method="POST" action="{{ route('account.information.update') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label fw-semibold">Ad Soyad</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror">
        @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label class="form-label fw-semibold">E-Posta</label>
        <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror">
        @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <hr class="my-4">
    <p class="small text-muted mb-3">Şifreyi değiştirmek istemiyorsan boş bırak.</p>
    <div class="mb-3">
        <label class="form-label fw-semibold">Yeni Şifre</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        @error('password') <div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-4">
        <label class="form-label fw-semibold">Yeni Şifre (Tekrar)</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>
    <button class="btn btn-primary fw-semibold">Kaydet</button>
</form>
@endsection