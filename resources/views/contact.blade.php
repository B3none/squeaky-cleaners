<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Squeaky Cleaners</title>

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Squeaky Cleaners
                </div>

                <div class="links">
                    <a href="/about">About</a>
                    <a href="/contact">Contact us</a>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
