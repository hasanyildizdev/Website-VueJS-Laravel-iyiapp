<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>IYIAPP</title>
        <meta name="description" content="Web and Mobile Software Solutions" />
        <meta name="keywords" content="Software Solutions, Web Solutions, Mobile Solutions" />
        <meta property="og: type" content="website" />
        <meta property="og: title" content="IYIAPP" />
        <meta property="og: description" content="Web and Mobile Software Solutions" />
        <meta property="og: image" content="/img/icon_purple.webp" />
        <meta property="og: url" content="https://www.iyiapp.com/" />
        <meta property="og: site_name" content="IYIAPP" />
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="IYIAPP"/>
        <meta name="twitter:description" content="Web and Mobile Software Solutions"/>
        <link rel="shortcut icon" type="image/webp" sizes="180x180"  href="{{ asset('img/icon_purple.webp') }}"/>

        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Roboto&family=Share+Tech+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="shortcut icon" type="image/webp" sizes="180x180"  href="{{ asset('img/icon_purple.png') }}"/>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased ">
        @inertia
    </body>
</html>
