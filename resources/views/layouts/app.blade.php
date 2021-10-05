<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/wedding.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wedding.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.coundown.js') }}"></script>
    @livewireStyles
</head>

<body>
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="Flower" />
        </div>
    </div>

    {{-- <div id="app">
        <main>
            @yield('content')
        </main>
    </div> --}}
    {{-- <img src="{{ asset('assets/images/favicon.png') }}" alt="Flower" /> --}}

    @yield('content')

    <div class="modal" id="loading">
        <div class="modal-background"></div>
        <div class="modal-content">
            <p class="image is-4by3">
                <img src="https://bulma.io/images/placeholders/1280x960.png" alt="">
            </p>
        </div>
        <button id="close" class="modal-close is-large" aria-label="close"></button>
    </div>

    <script>
        // Preloader
        $(document).ready(function($) {
            $(".preloader-wrapper").fadeOut();
            $("body").removeClass("preloader-site");
        });
        $(window).load(function() {
            var Body = $("body");
            Body.addClass("preloader-site");
        });
    </script>

    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: "ease-out",
            duration: 800,
        });
    </script>
    @livewireScripts
</body>

</html>
