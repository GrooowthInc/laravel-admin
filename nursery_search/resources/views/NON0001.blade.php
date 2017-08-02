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
      <div class="bns-block-nursery">
        <div class="bns-block-nursery__heading">
          <a href="#" class="bns-block-nursery__school">あげは幼稚園</a>
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
        </div>
        <div class="bns-block-nursery__body">
          <a href="#" class="bns-block-nursery__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </a>
          <div class="bns-block-nursery__status">保育園の種類：認可<br>保育園の種類：認可<br>保育園の種類：認可</div>
        </div>
      </div>
      <div class="bns-block-nursery">
        <div class="bns-block-nursery__heading">
          <a href="#" class="bns-block-nursery__school">わかば幼稚園</a>
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
        </div>
        <div class="bns-block-nursery__body">
          <a href="#" class="bns-block-nursery__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </a>
          <div class="bns-block-nursery__status">保育園の種類：認可<br>保育園の種類：認可<br>保育園の種類：認可</div>
        </div>
      </div>
      <div class="bns-block-nursery">
        <div class="bns-block-nursery__heading">
          <a href="#" class="bns-block-nursery__school">あああ幼稚園</a>
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
        </div>
        <div class="bns-block-nursery__body">
          <a href="#" class="bns-block-nursery__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </a>
          <div class="bns-block-nursery__status">保育園の種類：認可<br>保育園の種類：認可<br>保育園の種類：認可</div>
        </div>
      </div>
    </div><!-- /.bns-layout--negative -->

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

    <div class="bns-layout">
      <h3 class="bns-title-level3">保育園を探す</h3>
      <a href="#" class="bns-text-link">東京都</a>
      <a href="#" class="bns-text-link">神奈川県</a>
      <a href="#" class="bns-text-link">千葉県</a>
      <a href="#" class="bns-text-link">埼玉県</a>
      <p class="bns-text">「保育園探しナビ」では各地域の保育園探しから、見学までをサポ―ト。<br>
      各地域の認可保育園はもちろん、認証保育園、小規模保育園、認定こども園、家庭的保育などの情報をまとめました。<br>
      施設情報に加え、教育方針や子どもの過ごし方がわかる、「保育園探しナビ」オリジナルの情報も掲載しています。<br>
      さらに、保育園探しに役立つポイントがわかる記事や読み物もお届けします。<br>
      はじめての保育園探しにぜひお役立てくださいね。</p>
    </div><!-- /.bns-layout -->

  </section>
</article>
@stop