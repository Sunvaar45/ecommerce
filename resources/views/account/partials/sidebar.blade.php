<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="p-3 border-bottom">
            <h6 class="mb-0 fw-semibold">Hesabım</h6>
            <small class="text-muted">{{ $user->name }}</small>
        </div>
        <ul class="list-group list-group-flush small">
            <a href="{{ route('account.information') }}" class="list-group-item list-group-item-action">
                Kullanıcı Bilgilerim
            </a>
            <a href="{{ route('account.addresses') }}" class="list-group-item list-group-item-action">
                Adres Bilgilerim
            </a>
            <a href="{{ route('account.orders') }}" class="list-group-item list-group-item-action">
                Siparişlerim
            </a>
            <a href="{{ route('account.ratings') }}" class="list-group-item list-group-item-action">
                Değerlendirmelerim
            </a>
        </ul>
        <div class="p-3 border-top">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-danger w-100 btn-sm">Çıkış Yap</button>
            </form>
        </div>
    </div>
</div>