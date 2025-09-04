<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
    <link rel="stylesheet" href="/css/styles.css">

    <link rel="icon" type="image/png" href="{{ asset('storage/images/favicon/' . $favicon) }}">
    <title>@yield('title', $siteTitle)</title>
</head>

<body class="bg-light">

    {{-- Header and Navbar --}}
    @include('partials.header')

    {{-- Breadcrumbs (optional) --}}
    @hasSection('breadcrumb')
        <section class="bg-primary p-3">
            <div class="container">
                @yield('breadcrumb')
            </div>
        </section>
    @endif

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

</body>

</html>