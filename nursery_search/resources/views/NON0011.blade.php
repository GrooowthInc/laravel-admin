@extends('layouts.default')
<?php
  $title = 'あとで見る一覧';
  $description = 'あとで見る一覧';
  $keywords = '保活ナビ,あとで見る一覧';
  $catchtext = 'あとで見る一覧';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_school.svg" alt="" /></i>あとで見る一覧</h2>
    @include('_partial.see-later')

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
    {!! Breadcrumbs::render('seelater',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop