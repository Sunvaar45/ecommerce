@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-3">
            @include('account.partials.sidebar')
        </div>
        <div class="col-md-9">
            @yield('account-content')
        </div>
    </div>
</div>
@endsection