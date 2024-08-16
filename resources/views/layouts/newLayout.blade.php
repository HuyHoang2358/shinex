<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | Shinex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">

    @yield('head')

    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta name="resource-type" content="Document">
    <meta name="distribution" content="Global">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="author" content="{{Config::get('website.author')}}">
    <meta name="copyright" content="{{Config::get('website.author')}}">
    <meta name="GENERATOR" content="{{Config::get('website.author')}}">

    <meta property="og:site_name" content="{{url('/')}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN">

    <meta property="og:url" content="{{url()->current()}}">
    @yield('seo')
</head>
<body>
    @include('partial.frontHeader')
    <div class="container mx-auto">
        @yield('content')
    </div>
    @include('partial.frontFooter')
</body>
</html>
