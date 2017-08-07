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
    <div class="bns-overlay" data-bns-dropmenu="overlay"></div>
    @include('_partial.header')

    <main id="dashboard" class="bns-main" data-bns-nav="main">
      @yield('contents')
      @include('_partial.banner-area')

      @yield('breadcrumbs')
    </main>

    @if(Request::is('NON0002'))
      <aside class="bns-dropmenu-modal" data-bns-dropmenu="content">
        <div class="bns-dropmenu__heading">
          <div class="ui grid">
            <div class="four wide column">
              <a href="javascript: void(0);" class="bns-btn--secondary" data-bns-dropmenu="close">戻る</a>
            </div>
            <div class="twelve wide column">
              <p class="bns-text--lg">更に条件を絞り込む</p>
            </div>
          </div>
        </div>
        <div class="bns-dropmenu__body">
          <div class="bns-form-select--doubling">
            <div class="bns-layout--negative" data-bns-checkbox="container">
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox01" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">許可</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox02" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">許可</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox03" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">認証</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox04" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">認証</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox05" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">7:00～OK</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox06" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">7:00～OK</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox7" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">18:00～OK</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox08" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">18:00～OK</span>
              </label>
            </div><!-- /.bns-layout--negative -->
          </div><!-- /.bns-form-select--doubling -->
          <div class="bns-layout">
            <p class="bns-text--left">
              <label>
                <input type="checkbox" name="all-release" class="bns-form-select__check" data-bns-checkbox="release-trigger">
                <span class="bns-text-link--area"><i class="bns-icon-carret"></i>全てのチェックを外す</span>
              </label>
            </p>
          </div><!-- /.bns-layout -->
          <div class="ui grid centered">
            <div class="fifteen wide column">
              <button class="bns-btn--primary">追加した条件で検索</button>
            </div>
          </div><!-- /.ui.grid -->
        </div>
      </aside><!-- /.bns-dropmenu-modal -->
    @endif

    @include('_partial.footer')

    <script src="{{ mix('js/manifest.js')}}"></script>
    <script src="{{ mix('js/vendor.js')}}"></script> 
    <script src="{{ mix('js/app.js')}}"></script>
    <script>@yield('scripts')</script>
  </body>
</html>