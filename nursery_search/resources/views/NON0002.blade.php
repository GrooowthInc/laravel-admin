@extends('layouts.default')
<?php
  $title = '保育園検索　市区町村検索';
  $description = '保育園検索　市区町村検索です';
  $keywords = '保活ナビ,保育園検索';
  $catchtext = '東京都の保育園探しをサポートします。';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">東京都のエリアから保育園をさがす</h2>
    <p class="bns-text">東京都の保育園事情は、ダミーコピーです。ダミーコピーです。ダミーコピーです。ダミーコピーです。ダミーコピーです。</p>

    <h3 class="bns-title-level3">東京都・市区町村を選択</h3>

    <div class="bns-form-select">
      <div class="bns-layout--negative" data-bns-checkbox="container">
        <label class="bns-form-select__label">
          <input type="checkbox" name="checkbox01" class="bns-form-select__check" data-bns-checkbox="check">
          <span class="bns-form-select__text">千代田区</span>
        </label>
        <label class="bns-form-select__label">
          <input type="checkbox" name="checkbox02" class="bns-form-select__check" data-bns-checkbox="check">
          <span class="bns-form-select__text">荒川区</span>
        </label>
        <label class="bns-form-select__label">
          <input type="checkbox" name="checkbox03" class="bns-form-select__check" data-bns-checkbox="check">
          <span class="bns-form-select__text">足立区</span>
        </label>
        <label class="bns-form-select__label">
          <input type="checkbox" name="checkbox04" class="bns-form-select__check" data-bns-checkbox="check">
          <span class="bns-form-select__text">板橋区</span>
        </label>
        <label class="bns-form-select__label">
          <input type="checkbox" name="checkbox05" class="bns-form-select__check" data-bns-checkbox="check">
          <span class="bns-form-select__text">文京区</span>
        </label>
      </div><!-- /.bns-layout--negative -->
      <div class="bns-layout">
        <p class="bns-text--left">
          <label>
            <input type="checkbox" name="all-release" class="bns-form-select__check" data-bns-checkbox="release-trigger">
            <span class="bns-text-link--area">全てのチェックを外す</span>
          </label>
        </p>
      </div><!-- /.bns-layout -->
      <div class="ui grid">
        <div class="doubling four column row">
          <div class="column">
            <a href="#" class="bns-btn--primary">検索</a>
          </div>
          <div class="column">
            <a href="#" class="bns-btn--primary">条件で絞り込む</a>
          </div>
        </div>
      </div><!-- /.ui grid -->
    </div><!-- /.bns-form-select -->
  </section>
  <section class="bns-section">
    <!-- ▼広告カルーセル▼ -->
    @include('_partial.ad-carousel')
    <!-- ▲広告カルーセル▲ -->
    
    <!-- ▼最近見た保育園▼ -->
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>最近見た保育園</h2>
    @include('_partial.recently-see-nursery')
    <!-- ▲最近見た保育園▲ -->
    
    <!-- ▼おすすめ記事▼ -->
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>おすすめ記事</h2>
    @include('_partial.recommend-news')
    <!-- ▲おすすめ記事▲ -->

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