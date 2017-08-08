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
    <div class="bns-modal-overlay" data-bns-modal="overlay" data-bns-modal="close"></div>
    @include('_partial.header')

    <main id="dashboard" class="bns-main" data-bns-nav="main">
      @yield('contents')
      @include('_partial.banner-area')

      @yield('breadcrumbs')
    </main>

    <!-- ▼ modal ▼ -->
    @if(Request::is('NON0002'))
      <aside class="ui modal bns-modal" id="modal-search" data-bns-modal="content">
        <div class="bns-modal__heading">
          <p class="bns-text--lg">更に条件を絞り込む</p>
        </div>
        <div class="bns-modal__body" data-bns-checkbox="container">
          <div class="bns-modal__title">種別</div>
          <div class="ui grid bns-layout--default">
            <div class="three column row">
              <div class="column">
                <label class="bns-form-button--primary">
                  <input type="checkbox" name="checkbox01" class="bns-form-button--primary__check" data-bns-checkbox="check">
                  <span class="bns-form-button--primary__text">許可</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button--secondary">
                  <input type="checkbox" name="checkbox02" class="bns-form-button--secondary__check" data-bns-checkbox="check">
                  <span class="bns-form-button--secondary__text">認証</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button--third">
                  <input type="checkbox" name="checkbox03" class="bns-form-button--third__check" data-bns-checkbox="check">
                  <span class="bns-form-button--third__text">認可外</span>
                </label>
              </div>
            </div>
          </div><!-- /.bns-layout--default -->

          <div class="bns-modal__title">預かり日時</div>
          <div class="ui grid bns-layout--default">
            <div class="three column row">
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">7:00～OK</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox05" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">18:00～OK</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox06" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">土曜保育あり</span>
                </label>
              </div>
            </div>
          </div><!-- /.bns-layout--default -->

          <div class="bns-layout-column--2to1">
            <div class="bns-layout-column__item">
              <div class="bns-modal__title">預かり年齢</div>
              <div class="ui grid bns-layout--default">
                <div class="two column row">
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">2才まで</span>
                    </label>
                  </div>
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox05" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">5才まで</span>
                    </label>
                  </div>
                </div>
              </div><!-- /.bns-layout--default -->
            </div>
            <div class="bns-layout-column__item">
              <div class="bns-modal__title">個別対応</div>
              <div class="ui grid bns-layout--default">
                <div class="one column row">
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">アレルギー<br>対応あり</span>
                    </label>
                  </div>
                </div>
              </div><!-- /.bns-layout--default -->
            </div>
          </div><!-- /.bns-layout-column--2to1 -->
        </div>
        <div class="bns-modal-footer">
          <div class="bns-layout--default-no-margin">
            <p class="bns-text--left">
              <a href="javascript: void(0);" class="bns-text-link--area" data-bns-modal="close"><i class="bns-icon-carret"></i>戻る</a>
            </p>
            <p class="bns-text--right">
              <label>
                <input type="checkbox" name="all-release" class="bns-form-select__check" data-bns-checkbox="release-trigger">
                <span class="bns-text-link--area">全てのチェックを外す</span>
              </label>
            </p>
          </div><!-- /.bns-layout -->
          <div class="ui grid centered">
            <div class="fifteen wide column">
              <button class="bns-btn--third">追加した条件で検索</button>
            </div>
          </div><!-- /.ui.grid -->
        </div><!-- /.bns-modal-footer -->
      </aside><!-- /.bns-modal -->
    @endif

    @if(Request::is('NON0004'))
      <aside class="ui modal bns-modal" id="modal-search" data-bns-modal="content">
        <div class="bns-modal__heading">
          <p class="bns-text--lg">更に条件を絞り込む</p>
        </div>
        <div class="bns-modal__body" data-bns-checkbox="container">
          <div class="bns-modal__title">種別</div>
          <div class="ui grid bns-layout--default">
            <div class="three column row">
              <div class="column">
                <label class="bns-form-button--primary">
                  <input type="checkbox" name="checkbox01" class="bns-form-button--primary__check" data-bns-checkbox="check">
                  <span class="bns-form-button--primary__text">許可</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button--secondary">
                  <input type="checkbox" name="checkbox02" class="bns-form-button--secondary__check" data-bns-checkbox="check">
                  <span class="bns-form-button--secondary__text">認証</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button--third">
                  <input type="checkbox" name="checkbox03" class="bns-form-button--third__check" data-bns-checkbox="check">
                  <span class="bns-form-button--third__text">認可外</span>
                </label>
              </div>
            </div>
          </div><!-- /.bns-layout--default -->

          <div class="bns-modal__title">預かり日時</div>
          <div class="ui grid bns-layout--default">
            <div class="three column row">
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">7:00～OK</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox05" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">18:00～OK</span>
                </label>
              </div>
              <div class="column">
                <label class="bns-form-button">
                  <input type="checkbox" name="checkbox06" class="bns-form-button__check" data-bns-checkbox="check">
                  <span class="bns-form-button__text">土曜保育あり</span>
                </label>
              </div>
            </div>
          </div><!-- /.bns-layout--default -->

          <div class="bns-layout-column--2to1">
            <div class="bns-layout-column__item">
              <div class="bns-modal__title">預かり年齢</div>
              <div class="ui grid bns-layout--default">
                <div class="two column row">
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">2才まで</span>
                    </label>
                  </div>
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox05" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">5才まで</span>
                    </label>
                  </div>
                </div>
              </div><!-- /.bns-layout--default -->
            </div>
            <div class="bns-layout-column__item">
              <div class="bns-modal__title">個別対応</div>
              <div class="ui grid bns-layout--default">
                <div class="one column row">
                  <div class="column">
                    <label class="bns-form-button">
                      <input type="checkbox" name="checkbox04" class="bns-form-button__check" data-bns-checkbox="check">
                      <span class="bns-form-button__text">アレルギー<br>対応あり</span>
                    </label>
                  </div>
                </div>
              </div><!-- /.bns-layout--default -->
            </div>
          </div><!-- /.bns-layout-column--2to1 -->
        </div>
        <div class="bns-modal-footer">
          <div class="bns-layout--default-no-margin">
            <p class="bns-text--left">
              <a href="javascript: void(0);" class="bns-text-link--area" data-bns-modal="close"><i class="bns-icon-carret"></i>戻る</a>
            </p>
            <p class="bns-text--right">
              <label>
                <input type="checkbox" name="all-release" class="bns-form-select__check" data-bns-checkbox="release-trigger">
                <span class="bns-text-link--area">全てのチェックを外す</span>
              </label>
            </p>
          </div><!-- /.bns-layout -->
          <div class="ui grid centered">
            <div class="fifteen wide column">
              <button class="bns-btn--third">追加した条件で検索</button>
            </div>
          </div><!-- /.ui.grid -->
        </div><!-- /.bns-modal-footer -->
      </aside><!-- /.bns-modal -->
    @endif
    <!-- ▲ modal ▲ -->

    @include('_partial.footer')

    <script src="{{ mix('js/manifest.js')}}"></script>
    <script src="{{ mix('js/vendor.js')}}"></script> 
    <script src="{{ mix('js/app.js')}}"></script>
    <script>@yield('scripts')</script>
  </body>
</html>