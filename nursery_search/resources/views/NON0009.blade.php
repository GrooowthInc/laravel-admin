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
    <h2 class="bns-title-level2">保育園選びのポイント
    </h2>
    <div class="bns-layout">
      <p class="bns-text">
        ダミー：幼稚園と違って、保育園は条件に合うところを選ぶ余裕がない場合もあります。年齢によっては定員が決まっていて入園が不可能など、さまざまな状況も考慮しつつ園選びを進めましょう。
      </p>
    </div><!-- bns-layout -->
    <div class="bns-layout">
      <p class="bns-text">
        また現在、幼児教育施設は多様化しています。地域によっては幼稚園と保育所を統合した形の「認定こども園」や幼保一体化施設もあります。また、保育時間はさまざまで延長保育（有料）が可能な園もありますので、わが家の実情に合う園を選ぶようにしましょう。
      </p>
    </div><!-- bns-layout -->
  </section>

  <section class="bns-section">
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>最近見た保育園</h2>
    @include('_partial.recently-see-nursery')

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_news.svg')}}" alt="" /></i>おすすめ記事</h2>
    @include('_partial.recommend-news')

    {!! Breadcrumbs::render('nursery-select-point',$title ) !!}

    <div class="bns-layout">
      <h3 class="bns-title-level3">都県別に保育園を探す</h3>
      <a href="#" class="bns-text-link">東京都</a>
      <a href="#" class="bns-text-link">神奈川県</a>
      <a href="#" class="bns-text-link">千葉県</a>
      <a href="#" class="bns-text-link">埼玉県</a>
    </div><!-- /.bns-layout -->
  </section><!-- /.bns-section -->
</article>
@stop