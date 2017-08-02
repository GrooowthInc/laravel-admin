@extends('layouts.default')
<?php
  $title = '保育園施設詳細';
  $description = '保育園施設詳細のページです';
  $keywords = '保活ナビ,保育園施設詳細ページ';
  $catchtext = '東京都杉並区【認証保育園】の保育園探しを、保育園探しナビがサポートします。';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>東京都杉並区【認証保育園】かえで幼稚園詳細</h2>
    <div class="bns-layout--negative">
      <ul class="bns-carousel" data-bns-slick="target">
        <li class="bns-carousel__item">
          <img src="https://dummyimage.com/640x400/000/808080.png&text=dummy1" alt="" />
        </li>
        <li class="bns-carousel__item">
          <img src="https://dummyimage.com/640x400/000/808080.png&text=dummy2" alt="" />
        </li>
        <li class="bns-carousel__item">
          <img src="https://dummyimage.com/640x400/000/808080.png&text=dummy3" alt="" />
        </li>
        <li class="bns-carousel__item">
          <img src="https://dummyimage.com/640x400/000/808080.png&text=dummy4" alt="" />
        </li>
      </ul><!-- /.bns-carousel -->
    </div><!-- /.bns-layout--negative -->
    <p class="bns-text">2017年8月2日時点</p>

    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-nursery__heading">
          <div class="bns-block-nursery__school">あげは幼稚園</div>
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
        </div>
        <div class="bns-block-nursery__body">
          <div class="ui grid">
            <div class="doubling four column row">
              <div class="column">
                <i class="bns-label">認可</i>
              </div>
              <div class="column">
                <i class="bns-label--disabled">認可</i>
              </div>
              <div class="column">
                <i class="bns-label">hoge</i>
              </div>
              <div class="column">
                <i class="bns-label--disabled">hogehoge</i>
              </div>
            </div>
          </div><!-- /.ui grid -->
        </div>
      </div>
    </div><!-- /.bns-layout--negative -->
  </section>
</article>

{!! Breadcrumbs::render('facility-detail',$title ) !!}
@stop