<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AutoServe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    AutoServe
                </div>

                <div class="links m-b-md">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about_us') }}">About Us</a>
                    <a href="{{ url('/about_us') }}">About Project</a>
                    <a href="{{ url('/about_us') }}">Gallery</a>
                    <a href="{{ url('/about_us') }}">Contact Us</a>
                    <a href="{{ url('/serve') }}">Serve</a>
                </div>

                <div class="title-60 m-b-md">
                    About Us
                </div>
            </div>
        </div>
    </body>
</html>
