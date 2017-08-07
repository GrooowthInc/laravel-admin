@extends('layouts.default')
<?php
  $title = 'サイトマップ';
  $description = 'サイトマップのページです';
  $keywords = '保活ナビ,サイトマップページ';
  $catchtext = 'サイトマップのページです';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">サイトマップ</h2>
    <ul class="bns-list">
      <li class="bns-list__item">
        <li class="bns-list-headin"><span class="bns-list-heading__text">エリアを選んでください</span></li>
        <li class="bns-list-category__item">
          <ul class="bns-list-child">
            <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">東京都</a></li>
            <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">神奈川県</a></li>
            <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">千葉県</a></li>
            <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">埼玉県</a></li>
          </ul>
        </li>
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">現在地からさがす</a></li>
      </li><!-- /.bns-list__item -->
      <li class="bns-list__item">
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">あとで見る一覧</a></li>
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">記事一覧</a></li>
      </li><!-- /.bns-list__item -->
      <li class="bns-list__item">
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">保育園選びのポイント</a></li>
        <li class="bns-list-headin"><a href="#"  class="bns-list-heading__text">サービス紹介</a></li>
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">FAQ</a></li>
      </li><!-- /.bns-list__item -->
      <li class="bns-list__item">
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">ご利用規約</a></li>
        <li class="bns-list-headin"><a href="#" class="bns-list-heading__text">サイトマップ</a></li>
      </li><!-- /.bns-list__item -->
    </ul><!-- /.bns-list -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('sitemap',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop