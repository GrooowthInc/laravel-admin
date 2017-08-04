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
  <div class="bns-section">
    <div class="bns-info">
      ニュースのコピーですLorem ipsum dolor sit amet, consectetur adipisicing elit.
    </div>
  </div>
  <section class="bns-section">
    <h2 class="bns-title-area"><span class="bns-title-area__text"><i class="bns-title-icon"><img src="/images/ico_japan.svg" alt="" /></i>エリアを選んでください</span></h2>
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
    <div class="bns-block-active ui grid centered">
      <div class="fifteen wide column">
        <form class="bns-form">
          <input class="bns-form-search__textbox" type="search" name="freeword_search" placeholder="市区町村・駅名等を検索">
          <button class="bns-form-search__button" type="submit" name="action" value="send"></button>
        </form><!-- /.bns-form -->
        <p class="bns-text">保育園情報は東京都・神奈川県・千葉県・埼玉県のみです</p>
      </div>
    </div><!-- /.ui grid -->

    <div class="bns-layout">
      <button class="bns-btn-radius--secondary">初めての保育園の探しかた</button>
    </div>

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_school.svg" alt="" /></i>最近見た保育園</h2>
    @include('_partial.recently-see-nursery')

    <!-- ▼広告カルーセル▼ -->
    @include('_partial.ad-carousel')
    <!-- ▲広告カルーセル▲ -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_news.svg" alt="" /></i>おすすめ記事</h2>
    @include('_partial.recommend-news')

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