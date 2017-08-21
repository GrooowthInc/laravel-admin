@extends('layouts.default')
<?php
  $title = '保育園選びのポイント';
  $description = '保育園選びのポイントのページです';
  $keywords = '保活ナビ,保育園選びのポイントページ';
  $catchtext = '保育園選びのポイントのページです';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <div class="bns-title-block">基本をおさえよう！初めての保育園の探しかた</div>
    <div class="bns-layout">
      <p class="bns-text--right">
        <span class="bns-text--sm">監修：普光院亜紀さん（「保育園を考える親の会」代表）</span>
      </p>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">はじめに知っておきたいこと</a>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">図解でわかる！<br>保育施設・サービス基礎知識</a>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">キーワードは早めの行動！<br>保活のポイント</a>
    </div>

    <div class="bns-layout">
      <h3 class="bns-title-level3--border">図解でわかる！<br>保育施設・サービス基礎知識</h3>
      <h3 class="bns-title-level3--emphasis">＜認可施設・事業＞</h3>
      <p class="bns-text">
        給付制度を基に国から補助金を受けている保育施設・事業。<br>
        国の基準を満たし都道府県に認められた認可保育所から、事業所内保育所まで種類は様々。
      </p>
    </div>

    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-active__outer">
          <h2 class="bns-title-area--light"><span class="bns-title-area__text">1.認可保育園(保育所)</span></h2>
          <div class="bns-block-active--light ui grid">
            <div class="bns-layout-no-margin">
              <div class="bns-block-category">
                <div class="bns-block-category__item">
                  <div class="bns-block-category__body">
                    <p>こども1人当たりの保育士の数や面積、施設・設備、保育内容など、様々な国の基準をクリアして都道府県に認可された施設。<br>保育料は前年度の世帯収入に応じて決定する。</p>
                  </div>
                </div>
                <div class="bns-block-category__item">
                  <div class="bns-block-category__body">
                    <h3 class="bns-title-level3">公立保育園</h3>
                    <p>市区町村が運営する保育園。<br>保育士は公務員なので、年度の変わり目に先生が異動になることも。</p>
                  </div>
                  <div class="bns-box-merit">
                    <h3 class="bns-box-merit__title">メリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        ベテラン保育士が多い
                      </li>
                      <li class="bns-list--circle__item">
                        市区町村の運営
                      </li>
                      <li class="bns-list--circle__item">
                        保育所保育指針に忠実
                      </li>
                    </ul>
                  </div><!-- /.bns-box-merit -->
                  <div class="bns-box-demerit">
                    <h3 class="bns-box-demerit__title">デメリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        急な人事異動がある
                      </li>
                      <li class="bns-list--circle__item">
                        古い施設が多い
                      </li>
                      <li class="bns-list--circle__item">
                        個性はあまりない
                      </li>
                    </ul>
                  </div><!-- /.bns-box-demerit -->
                </div>
                <div class="bns-block-category__item">
                  <div class="bns-block-category__body">
                    <h3 class="bns-title-level3">私立保育園</h3>
                    <p>国の認可補助を受けて、社会福祉法人、NPO、株式会社が運営する保育園。</p>
                  </div>
                  <div class="bns-box-merit">
                    <h3 class="bns-box-merit__title">メリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        施設や設備が新しい
                      </li>
                      <li class="bns-list--circle__item">
                        延長保育が長いところが多い
                      </li>
                      <li class="bns-list--circle__item">
                        個性がある
                      </li>
                    </ul>
                  </div><!-- /.bns-box-merit -->
                  <div class="bns-box-demerit">
                    <h3 class="bns-box-demerit__title">デメリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        保育事業経験が浅いことも
                      </li>
                      <li class="bns-list--circle__item">
                        新人保育士が多め
                      </li>
                      <li class="bns-list--circle__item">
                        園庭がないところも
                      </li>
                    </ul>
                  </div><!-- /.bns-box-demerit -->
                </div>
              </div>
            </div><!-- /.bns-layout -->
          </div><!-- /.ui grid -->
        </div><!-- /.bns-block-active__outer -->
        <div class="bns-block-active__outer">
          <h2 class="bns-title-area--light"><span class="bns-title-area__text">5.事業所内保育所</span></h2>
          <div class="bns-block-active--light ui grid">
            <div class="bns-layout-no-margin">
              <div class="bns-block-category">
                <div class="bns-block-category__item">
                  <div class="bns-block-category__body">
                    <p>国の基準を満たし、病院や企業が施設内に設置する保育所。<br>従業員の子供のほか、地域の保育を必要とする子供を一定割合以上受け入れることになっている。</p>
                  </div>
                  <div class="bns-box-merit">
                    <h3 class="bns-box-merit__title">メリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        親の勤務地に近く安心
                      </li>
                      <li class="bns-list--circle__item">
                        送迎のタイムロスがない
                      </li>
                    </ul>
                  </div><!-- /.bns-box-merit -->
                  <div class="bns-box-demerit">
                    <h3 class="bns-box-demerit__title">デメリット</h3>
                    <ul class="bns-list--circle">
                      <li class="bns-list--circle__item">
                        子連れ通勤が大変
                      </li>
                      <li class="bns-list--circle__item">
                        残業を切り上げにくいところも
                      </li>
                    </ul>
                  </div><!-- /.bns-box-demerit -->
                </div>
              </div>
            </div><!-- /.bns-layout -->
          </div><!-- /.ui grid -->
        </div><!-- /.bns-block-active__outer -->
        <div class="bns-box-ex">
          <h3 class="bns-box-ex__title">認可外保育施設</h3>
          <p class="bns-text">国の基準を満たしてはいないが、自治体の基準を満たすところもあれば、補助金を一切受けずに独自で運営するところも。<br>保育の質は様々なので、事前の見学で見極めが必要。</p>
          <ul class="bns-list--circle">
            <li class="bns-list--circle__item">
              Lorem ipsum dolor sit amet
            </li>
            <li class="bns-list--circle__item">
              consectetur adipisicing elit.
            </li>
          </ul>
        </div><!-- /.bns-box-ex -->
      </div>
    </div><!-- /.bns-layout--negative -->
    <div class="bns-layout">
      <p class="bns-text--right">
        <a href="#" class="bns-text-link--area">キーワードは早めの行動！保活のポイント<i class="bns-icon-carret--sm"></i></a>
      </p>
    </div>
    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-active__outer">
          <h2 class="bns-title-area"><span class="bns-title-area__text"><i class="bns-icon-loupe"></i>保育園を探す</span></h2>
          <div class="bns-block-active ui grid">
            <div class="doubling four column row">
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">東京都</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">神奈川県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">千葉県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">埼玉県</button>
              </div>
            </div>
          </div><!-- /.ui grid -->
        </div><!-- /.bns-block-active__outer -->
      </div>
    </div><!-- /.bns-layout--negative -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('nursery-select-point',$title ) !!}

    <div class="bns-layout">
      <h3 class="bns-title-level3">都県別に保育園を探す</h3>
      <a href="#" class="bns-text-link">東京都</a>
      <a href="#" class="bns-text-link">神奈川県</a>
      <a href="#" class="bns-text-link">千葉県</a>
      <a href="#" class="bns-text-link">埼玉県</a>
    </div><!-- /.bns-layout -->
    <div class="bns-layout">
      <h3 class="bns-title-level3">市区町村別に保育園を探す</h3>
      <a href="#" class="bns-text-link">足立区</a>
      <a href="#" class="bns-text-link">荒川区</a>
      <a href="#" class="bns-text-link">板橋区</a>
      <a href="#" class="bns-text-link">江戸川区</a>
      <a href="#" class="bns-text-link">大田区</a>
      <a href="#" class="bns-text-link">葛飾区</a>
      <a href="#" class="bns-text-link">北区</a>
      <a href="#" class="bns-text-link">江東区</a>
      <a href="#" class="bns-text-link">品川区</a>
      <a href="#" class="bns-text-link">渋谷区</a>
      <a href="#" class="bns-text-link">新宿区</a>
      <a href="#" class="bns-text-link">杉並区</a>
      <a href="#" class="bns-text-link">墨田区</a>
      <a href="#" class="bns-text-link">世田谷区</a>
      <a href="#" class="bns-text-link">台東区</a>
      <a href="#" class="bns-text-link">中央区</a>
      <a href="#" class="bns-text-link">千代田区</a>
      <a href="#" class="bns-text-link">豊島区</a>
      <a href="#" class="bns-text-link">中野区</a>
      <a href="#" class="bns-text-link">練馬区</a>
      <a href="#" class="bns-text-link">文京区</a>
      <a href="#" class="bns-text-link">港区</a>
      <a href="#" class="bns-text-link">目黒区</a>
      <p class="bns-text">（以下省略）</p>
    </div><!-- /.bns-layout -->
  </section><!-- /.bns-section -->
</article>
@stop