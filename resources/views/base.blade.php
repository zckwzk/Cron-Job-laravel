<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cron Job</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            flex: 1;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

    </style>
    @livewireStyles

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body class="antialiased">

    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="Flower" />
        </div>
    </div>

    @yield('content')

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
    @livewireScripts
</body>

</html>
