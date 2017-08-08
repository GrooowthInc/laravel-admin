@extends('layouts.default')
<?php
  $title = 'おすすめ記事一覧';
  $description = 'おすすめ記事一覧';
  $keywords = '保活ナビ,おすすめ記事一覧';
  $catchtext = 'おすすめ記事一覧';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_news.svg" alt="" /></i>おすすめ記事一覧</h2>
    @include('_partial.recommend-news')

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
    {!! Breadcrumbs::render('recommendnews',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop