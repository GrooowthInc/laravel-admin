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
    <p class="bns-text-lead">基本をおさえよう！初めての保育園の探しかた</p>
    <div class="bns-title-block">はじめに知っておきたいこと</div>
    <div class="bns-layout">
      <p class="bns-text--right">
        <span class="bns-text--sm">監修：普光院亜紀さん（「保育園を考える親の会」代表）</span>
      </p>
    </div>
    <div class="bns-layout">
      <p class="bns-text">
        待機児童数は増え続け、保育園を選べる状況じゃないといわれる時代。<br>
        でも、親としては安心できる場所に我が子を預けたいもの。<br>
        「質の良い」保育園を見極め、上手に保活をするコツを専門家に聞きました。
      </p>
    </div><!-- bns-layout -->
    <div class="bns-layout">
      <a href="./NON0009" class="bns-btn--secondary">はじめに知っておきたいこと</a>
    </div>
    <div class="bns-layout">
      <a href="./NON0009_2" class="bns-btn--secondary">図解でわかる！<br>保育施設・サービス基礎知識</a>
    </div>
    <div class="bns-layout">
      <a href="./NON0009_3 " class="bns-btn--secondary">キーワードは早めの行動！<br>保活のポイント</a>
    </div>

    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <h3 class="bns-title-level3--border">待機児童問題解決に向けて様々な制度改革が起きている</h3>
        <p class="bns-text">
          昨年10月時点の、全国の待機児童数は4万7738名。<br>
          国は解決に向け、様々な取り組みをしています。<br>
          昨年度は認可保育園の『入園予約制』が生まれ、10月以降育休が最長2年になる動きもあります。<br>
          <br>
          「今は1歳児の入園が厳しく、0歳の4月入園を目指して育休を切り上げる家庭が増えて悪循環になっています。各自治体とも保育園を増やしているものの、量や質には差があり、制度も複雑化し、保活情報が入り乱れています」と保育園問題に詳しい普光院亜紀さんは言います。<br>
          さらに、待機児童対策が「保育の質」を揺るがすことにもつながっていると指摘しています。
        </p>
        <h3 class="bns-title-level3--border">保育に大切な"質"を見極めるのは親の勘</h3>
        <p class="bns-text">
          昨年10月時点の、全国の待機児童数は4万7738名。<br>
          国は解決に向け、様々な取り組みをしています。<br>
          昨年度は認可保育園の『入園予約制』が生まれ、10月以降育休が最長2年になる動きもあります。<br>
          <br>
          「今は1歳児の入園が厳しく、0歳の4月入園を目指して育休を切り上げる家庭が増えて悪循環になっています。各自治体とも保育園を増やしているものの、量や質には差があり、制度も複雑化し、保活情報が入り乱れています」と保育園問題に詳しい普光院亜紀さんは言います。<br>
          さらに、待機児童対策が「保育の質」を揺るがすことにもつながっていると指摘しています。
        </p>
      </div>
    </div><!-- /.bns-layout--negative -->
    <div class="bns-layout">
      <p class="bns-text--right">
        <a href="#" class="bns-text-link--area">図解でわかる！ 保育施設・サービス基礎知識<i class="bns-icon-carret--sm"></i></a>
      </p>
    </div>
    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-active__outer">
          <h2 class="bns-title-area"><span class="bns-title-area__text"><i class="bns-icon-loupe"></i>保育園を探す</span></h2>
          <div class="bns-block-active--top ui grid">
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