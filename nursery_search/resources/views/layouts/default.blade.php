<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="保活ナビ｜@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta name="Keywords" content="@yield('keywords')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ url('images/img_mv.png') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>保活ナビ｜@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body>
    @include('_partial.header')

    <main id="dashboard" class="bns-main">
      @yield('contents')
      @include('_partial.banner-area')
    </main>
    @include('_partial.footer')

    <script src="{{ mix('js/manifest.js')}}"></script>
    <script src="{{ mix('js/vendor.js')}}"></script> 
    <script src="{{ mix('js/app.js')}}"></script>
    <script>@yield('scripts')</script>
  </body>
</html>
