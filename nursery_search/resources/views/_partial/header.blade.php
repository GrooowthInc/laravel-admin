<header class="bns-header" data-bns-nav="content">
  <div class="bns-header__lead">@yield('catchtext')</div>
  <nav class="bns-header-nav" data-bns-nav="target">
    <div class="bns-header-nav__inner">
      <h1 class="bns-header-logo">保活ナビ</h1>
      <div class="bns-header-func">
        <div class="bns-header__btn">
          <a href="javascript: void(0);" class="bns-header-icon--look">
            <img src="/images/btn_header01.svg" alt="後で見る" />
          </a>
          <i class="bns-header-icon--badge">20</i>
        </div>
        <div class="bns-header__btn">
          <a href="javascript: void(0);" class="bns-header-icon--menu" data-bns-dropmenu="target-nav">
            <img src="/images/btn_header02.svg" alt="メニュー" />
          </a>
        </div>
      </div>
    </div>

    <aside class="bns-header-nav__global" data-bns-dropmenu="content-nav">
      <ul class="bns-header-nav__list">
        <li class="bns-header-nav__item">
          <a href="{{ url('/') }}" class="bns-header-nav__link">保育園を探す</a>
        </li>
        <li class="bns-header-nav__item">
          <a href="javascript: void(0);" class="bns-header-nav-child__heading" data-bns-accordion="trigger">現在地からさがす<i class="bns-icon-carret__bottom"></i></a>
          <div class="bns-header-nav__item-inner" data-bns-accordion="content">
            <ul class="bns-header-nav-child">
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav__link">東京都</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav__link">神奈川県</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav__link">千葉県</a>
              </li>
              <li class="bns-header-nav-child__item">
                <a href="#" class="bns-header-nav__link">埼玉県</a>
              </li>
            </ul><!-- /.bns-header-nav-child -->
          </div><!-- /.bns-header-nav__item-inner -->
        </li>
        <li class="bns-header-nav__item">
          <a href="{{ url('/NON0011') }}" class="bns-header-nav__link">あとで見る一覧</a>
        </li>
        <li class="bns-header-nav__item">
          <a href="{{ url('/NON0012') }}" class="bns-header-nav__link">おすすめ記事一覧</a>
        </li>
        <li class="bns-header-nav__item">
          <a href="#" class="bns-header-nav__link">初めての保育園の探し方</a>
        </li>
        <li class="bns-header-nav__item">
          <ul class="bns-header-nav-child">
            <li class="bns-header-nav-child__item">
              <a href="#" class="bns-header-nav__link">保活ナビについて</a>
            </li>
            <li class="bns-header-nav-child__item">
              <a href="{{ url('/NON0013') }}" class="bns-header-nav__link">よくあるご質問</a>
            </li>
            <li class="bns-header-nav-child__item">
              <a href="{{ url('/NON0008') }}" class="bns-header-nav__link">ご利用規約</a>
            </li>
            <li class="bns-header-nav-child__item">
              <a href="/NON0014" class="bns-header-nav__link">サイトマップ</a>
            </li>
          </ul><!-- /.bns-header-nav-child -->
        </li>
      </ul>
    </aside><!-- bns-header-nav__global -->

    @if(Request::is('/'))
      <aside class="bns-dropmenu" data-bns-dropmenu="content">
        <div class="bns-dropmenu__heading">
          <div class="ui grid">
            <div class="four wide column">
              <a href="javascript: void(0);" class="bns-btn--secondary" data-bns-dropmenu="close">戻る</a>
            </div>
            <div class="twelve wide column">
              <p class="bns-text--lg">検索方法を選ぶ</p>
            </div>
          </div>
        </div>
        <div class="bns-dropmenu__body">
          <div class="ui grid">
            <div class="doubling eight column row">
              <div class="column">
                <a href="#" class="bns-btn-icon--primary">
                  <span class="bns-btn-icon__area">
                    <i class="bns-icon-loupe--search"></i>
                  </span>
                  <span class="bns-btn-icon__text">市区町村から探す</span>
                </a>
              </div>
              <div class="column">
                <a href="#" class="bns-btn-icon--primary">
                  <span class="bns-btn-icon__area">
                    <i class="bns-icon-train"></i>
                  </span>
                  <span class="bns-btn-icon__text">沿線・駅から探す</span>
                </a>
              </div>
            </div>
          </div><!-- /.ui grid -->
        </div>
      </aside><!-- /.bns-dropmenu -->
    @endif
  </nav>
</header><!-- /.bns-header -->