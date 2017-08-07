@extends('layouts.default')
<?php
  $title = 'お探しのページは見つかりません';
  $description = 'お探しのページは見つかりません';
  $keywords = '保活ナビ,お探しのページは見つかりません,エラーページ';
  $catchtext = 'お探しのページは見つかりません';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">おさがしのページは見つかりません</h2>
    <p>検索条件をご確認いただき、再度お探しください。</p>
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('error',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop