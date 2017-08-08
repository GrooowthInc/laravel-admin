@extends('layouts.default')
<?php
  $title = '検索結果一覧';
  $description = '検索結果一覧';
  $keywords = '保活ナビ,検索結果一覧';
  $catchtext = '検索結果一覧';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">東京都杉並区【認証保育園】保育園一覧</h2>
    <p class="bns-text--sm">検索条件:&nbsp;東京都・杉並区・認証保育園（5件）</p>
    @include('_partial.near-nursery')

    <div class="bns-layout">
      <div class="bns-pagenation">
        <ul class="bns-pagenation-list">
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__prev"></a>
          </li>
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__link is-current">1</a>
          </li>
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__link">2</a>
          </li>
          <li class="bns-pagenation-list__item">
            <span class="bns-pagenation-list__link">…</span>
          </li>
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__link">4</a>
          </li>
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__link">5</a>
          </li>
          <li class="bns-pagenation-list__item">
            <a href="#" class="bns-pagenation-list__next"></a>
          </li>
        </ul>
      </div><!-- /.bns-pagenation -->
    </div><!-- /.bns-layout -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('search-result',$title ) !!}
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