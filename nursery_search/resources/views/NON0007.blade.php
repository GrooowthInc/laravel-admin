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
    <h2 class="bns-title-level2">東京都杉並区【認証保育園】かえで幼稚園詳細</h2>
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

    <div class="bns-block-catgory">
      <div class="bns-block-category__heading">
        <div class="bns-block-category__school">あげは幼稚園</div>
        <a href="#" class="bns-block-category__icon">
          <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
        </a>
      </div>
      <div class="bns-block-category__item">
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
              <i class="bns-label">hogehoge</i>
            </div>
            <div class="column">
              <i class="bns-label">hoge</i>
            </div>
            <div class="column">
              <i class="bns-label">hogehoge</i>
            </div>
          </div>
        </div><!-- /.ui grid -->
      </div><!-- /.bns-block-category__item -->
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">教育方針</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ducimus sunt voluptates quae, impedit excepturi hic, saepe commodi, reiciendis minus similique, sit cupiditate amet rem quam vero quia quo quasi.</p>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">教育方針</h3>
          <p>棒は風のお世話セロ屋が子にしぎてしまいはもうじぶんがたな。<br>
          せすぎそこも巻をないたて前のゴーシュの先生汁がつっ込ん第二テープたちの病気をあいと行っんます。</p>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">教育方針</h3>
          <p>棒は風のお世話セロ屋が子にしぎてしまいはもうじぶんがたな。<br>
          せすぎそこも巻をないたて前のゴーシュの先生汁がつっ込ん第二テープたちの病気をあいと行っんます。</p>
        </div>
      </div><!-- /.bns-block-category__item -->
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">開園時間</h3>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">基本開園時間</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">早期保育</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">延長保育</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">休園日</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">建物</h3>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">基本開園時間</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">早期保育</p>
            <p class="bns-text-table__body">8:00～17:00</p>
          </div>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">アレルギー対応</h3>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">アレルギー対応</p>
            <p class="bns-text-table__body">除去食あり</p>
          </div>
          <div class="bns-text-table">
            <p class="bns-text-table__heading">アレルギー対応</p>
            <p class="bns-text-table__body">除去食あり</p>
          </div>
        </div>
      </div><!-- /.bns-block-category__item -->
    </div><!-- /.bns-block-catgory -->
  </section>
</article>

{!! Breadcrumbs::render('facility-detail',$title ) !!}
@stop