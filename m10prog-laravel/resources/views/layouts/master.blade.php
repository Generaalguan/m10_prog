<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--icons-->
    <script src="https://kit.fontawesome.com/a8c080a66a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="../dist/app.css" rel="stylesheet">
    <!--JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.31/vue.global.prod.js" defer></script>
    <script src="/js/main.js" defer></script>
    <script src="/js/app.js" defer></script>
</head>
<body>
    @include('layouts.partials.header')
    

  <main class="main">

<div class="main_wrapper">
@yield( 'content' )
</div>

</main>
@include('layouts.partials.footer')
