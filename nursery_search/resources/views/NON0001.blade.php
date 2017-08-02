@extends('layouts.default')
<?php
  $title = 'NON0001';
  $description = 'ディスクリプションが入りますよ';
  $keywords = 'キーワードが入りますよ';
  $catchtext = '保育園探しから申し込みまでサポート';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <div class="bns-info">
    ニュースのコピーですLorem ipsum dolor sit amet, consectetur adipisicing elit.
  </div>
  <section class="bns-section">
    <h2 class="bns-title-area"><span class="bns-title-area__text">エリアを選んでください</span></h2>
    <div class="bns-block-active ui grid">
      <div class="doubling four column row">
        <div class="column">
          <button class="bns-btn--primary">東京都</button>
        </div>
        <div class="column">
          <button class="bns-btn--primary">神奈川県</button>
        </div>
        <div class="column">
          <button class="bns-btn--primary">千葉県</button>
        </div>
        <div class="column">
          <button class="bns-btn--primary">埼玉県</button>
        </div>
      </div>
    </div><!-- /.ui grid -->
    <div class="bns-block-active ui grid centered">
      <div class="fifteen wide column">
        <button class="bns-btn--primary">現在地からさがす</button>
      </div>
    </div><!-- /.ui grid -->

    <div class="bns-layout">
      <button class="bns-btn--secondary">保育園選びのポイント</button>
    </div>

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>最近見た保育園</h2>
    <div class="bns-layout--negative">
      ほげ
    </div>
    
    <!-- ▼広告カルーセル▼ -->
    @include('_partial.ad-carousel')
    <!-- ▲広告カルーセル▲ -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>おすすめ記事</h2>
    <div class="bns-layout--negative">
      <div class="bns-block-recommend">
        <a href="#" class="bns-block-recommend__item">
          <div class="bns-block-recommend__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </div>
          <div class="bns-block-recommend__body">
            <p class="bns-block-recommend__date">2017.08.01</p>
            <p class="bns-block-recommend__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </a>
        <a href="#" class="bns-block-recommend__item">
          <div class="bns-block-recommend__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </div>
          <div class="bns-block-recommend__body">
            <p class="bns-block-recommend__date">2017.12.17</p>
            <p class="bns-block-recommend__title">年末年始お休みのお知らせ</p>
          </div>
        </a>
        <a href="#" class="bns-block-recommend__item">
          <div class="bns-block-recommend__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </div>
          <div class="bns-block-recommend__body">
            <p class="bns-block-recommend__date">2018.01.01</p>
            <p class="bns-block-recommend__title">明けましておめでとうございます。今年も宜しくお願いいたします。</p>
          </div>
        </a>
      </div>
    </div><!-- /.bns-layout--negative -->
    <div class="bns-layout">
      <button class="bns-btn--secondary">記事一覧へ</button>
    </div>

  </section>
</article>
@stop