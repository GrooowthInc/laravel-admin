@extends('layouts.default')
<?php
  $title = '地図検索';
  $description = '地図検索';
  $keywords = '保活ナビ,地図検索';
  $catchtext = '地図検索';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<div class="bns-header-fixed">
  <div class="ui grid">
    <div class="doubling four column row">
      <div class="column">
        <a href="{{ url('/NON0005') }}" class="bns-btn--primary"><i class="bns-icon-here"></i>地図で見る</a>
      </div>
      <div class="column">
        <button class="bns-btn--primary"><i class="bns-icon-list"></i>一覧で見る</button>
      </div>
    </div>
  </div><!-- /.ui grid -->
  <div class="bns-layout">
    <a href="#modal-search" class="bns-btn--third-no-arrow" data-bns-modal="open">検索条件の追加</a>
  </div>
</div><!-- bns-header-fixed -->

<div id="map" data-search-map data-search-map-lat="35.686847" data-search-map-lng="139.781360" data-search-map-zoom="15"></div>

<div class="bns-footer-fixed">
  {!! Breadcrumbs::render('search-map',$title ) !!}
</div><!-- bns-footer-fixed -->
@stop