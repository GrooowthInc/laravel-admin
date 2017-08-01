@extends('layouts.default')
<?php
  $title = 'NON0001';
  $description = 'ディスクリプションが入りますよ';
  $keywords = 'キーワードが入りますよ';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)

@section('contents')
<article class="bns-article">
  <div class="bns-info">
    ニュースのコピーですLorem ipsum dolor sit amet, consectetur adipisicing elit.
  </div>
  <section class="bns-section">
    <h2 class="bns-title-level2">エリアを選んでください</h2>
  </section>
</article>
@stop