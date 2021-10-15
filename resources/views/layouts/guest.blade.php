<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CSSCM Database</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">



        <!--Icons-->
        <link rel="apple-touch-icon" sizes="57x57" src="fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" src="fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" src="fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" src="fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" src="fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" src="fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" src="fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" src="fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" src="fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  src="fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" src="fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" src="fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" src="fav/favicon-16x16.png">
        <link rel="manifest" src="fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
