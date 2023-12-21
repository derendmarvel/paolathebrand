<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class = "float-start w-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark-subtle sticky-top py-3 px-5" data-bs-theme="dark">
            <div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="/images/Paola-Logo-2.png" alt="Paola" width="80" height="45">
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="bg-image">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
