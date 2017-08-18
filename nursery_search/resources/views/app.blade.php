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
    <link rel="stylesheet" href="{{ mix_context('css/app.css') }}">

    <title>保活ナビ｜@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body id="bns">
    <div class="bns-overlay" data-bns-dropmenu="overlay"></div>
    <div class="bns-header-overlay" data-bns-dropmenu="overlay-nav"></div>
    <div class="bns-modal-overlay" data-bns-modal="overlay" data-bns-modal="close"></div>

    <div id="app">
    
      <!-- ▼ 共通GN ▼ -->
      <aside class="bns-header-nav__global" data-bns-dropmenu="content-nav">
        <ul class="bns-header-nav__list">
          <li class="bns-header-nav__item">
            <span class="bns-header-nav__heading">保育園を探す</span>
          </li>
          <li class="bns-header-nav__item">
            <ul class="bns-header-nav-child">
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav-child__link">東京都</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav-child__link">千葉県</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav-child__link">神奈川県</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav-child__link">埼玉県</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav-child__link">現在地から探す</a>
              </li>
            </ul><!-- /.bns-header-nav-child -->
          </li>
          <li class="bns-header-nav__item">
            <span class="bns-header-nav__heading">保育園の情報を見る</span>
          </li>
          <li class="bns-header-nav__item">
            <ul class="bns-header-nav-child">
              <li class="bns-header-nav-child__item">
                <router-link :to="{ name: 'seeLater'}" class="bns-header-nav-child__link">あとで見る一覧</router-link>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="{{ url('/NON0012') }}" class="bns-header-nav-child__link">おすすめ一覧</a>
              </li>
              </li>
            </ul><!-- /.bns-header-nav-child -->
          </li>
          <li class="bns-header-nav__item">
            <span class="bns-header-nav__heading">保育園を探す</span>
          </li>
          <li class="bns-header-nav__item">
            <ul class="bns-header-nav-child">
              <li class="bns-header-nav-child__item">
                <a href="" class="bns-header-nav-child__link">初めての保育園の探し方</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="" class="bns-header-nav-child__link">保活ナビについて</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="{{ url('/NON0013') }}" class="bns-header-nav-child__link">よくあるご質問</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="{{ url('/NON0008') }}" class="bns-header-nav-child__link">ご利用規約</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="{{ url('/NON0014') }}" class="bns-header-nav-child__link">サイトマップ</a>
              </li>
            </ul><!-- /.bns-header-nav-child -->
          </li>
        </ul>
      </aside><!-- bns-header-nav__global -->
      <!-- ▲ 共通GN ▲ -->

      <router-view></router-view>
<!-- TODO -->
{{--        
      @if(!Request::is('NON0005'))
        @include('_partial.header')
      @endif

      @if(!Request::is('NON0005'))
      <main id="dashboard" class="bns-main" data-bns-nav="main">
        @yield('contents')
        @include('_partial.banner-area')
        @yield('breadcrumbs')
      </main>
      @endif

      @if(Request::is('NON0005'))
      <main id="dashboard" class="bns-main--map">
        @yield('contents')
        @yield('breadcrumbs')
      </main>
      @endif


      <!-- TODO -->
      <!-- ▼ modal ▼ -->
      <!-- ▲ modal ▲ -->

      <!-- TODO -->
      @if(!Request::is('NON0005'))
        @include('_partial.footer')
      @endif 
 --}}
    </div>
    <script src="{{ mix_context('js/manifest.js')}}"></script>
    <script src="{{ mix_context('js/vendor.js')}}"></script>
    <script src="{{ mix_context('js/app.js')}}"></script>

    <!-- TODO: NON0005のbody内に配置 -->
    @if(Request::is('NON0005'))
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoiCtV1U4l_E7Ni3vCaowkZHgToieX_Co" async defer></script>
    @endif
  </body>
</html>