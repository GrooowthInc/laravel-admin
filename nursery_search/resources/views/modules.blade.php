@extends('layouts.default')
<?php
  $title = 'modules';
  $description = '保活ナビのモジュールページです';
  $keywords = '保活ナビ,モジュールページ';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)

@section('contents')
<article class="bns-article">
  <div class="bns-info">
    ニュースエリアのモジュールLorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga perferendis minus deleniti beatae iste doloribus in commodi sequi repudiandae quos, distinctio quam veniam ratione optio reiciendis ut incidunt reprehenderit!
  </div>
  <section class="bns-section">
    <h1 class="bns-title-level1">タイトルレベル1</h1>
    <h2 class="bns-title-level2">タイトルレベル2</h2>
    <h2 class="bns-title-level2"><span class="bns-title-text">タイトルレベル2</span> <a href="#" class="bns-title-label">ラベル有り</a></h2>
    <h3 class="bns-title-level3">タイトルレベル3</h3>

    <h2 class="bns-title-level2">ボタン</h2>
    <div class="ui grid">
      <div class="doubling four column row">
        <div class="column">
          <button class="bns-btn--primary">primary</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn--primary">primary</a>
        </div>
        <div class="column">
          <button class="bns-btn--secondary">secondary</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn--secondary">secondary</a>
        </div>
        <div class="column">
          <button class="bns-btn">default</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn">default</a>
        </div>
        <div class="column">
          <button class="bns-btn" disabled>disabled</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn is-disabled">disabled</a>
        </div>
      </div>
    </div><!-- /.ui grid -->

    <div class="bns-layout">
      <button class="bns-btn--primary">primary large</button>
    </div>
    <div class="bns-layout">
      <button class="bns-btn--secondary">secondary large</button>
    </div>
    <div class="bns-layout">
      <button class="bns-btn">default large</button>
    </div>
    <div class="bns-layout">
      <button class="bns-btn" disabled>disabled large</button>
    </div>

    <h2 class="bns-title-level2">テキスト</h2>
    <p>人間は考える葦である。</p>
    <p class="bns-text">吾輩は猫である。名前はまだない。</p>
    <p class="bns-text-info">お知らせ的な強調したい文字</p>
    <p class="bns-text-notice">バリエラとかエラー時に強調したい文字</p>
    <p class="bns-text-bold">fw:bのテキスト</p>
    <a href="#" class="bns-text-link">テキストリンク</a>

    <h2 class="bns-title-level2"><span class="bns-title-text">最近見た保育園</span> <a href="#" class="bns-title-label">あとで見る一覧</a></h2>
    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-nursery__heading">
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
          <a href="#" class="bns-block-nursery__school">あげは幼稚園</a>
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
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
          <a href="#" class="bns-block-nursery__school">わかば幼稚園</a>
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
          <a href="#" class="bns-block-nursery__icon">
            <img src="https://dummyimage.com/20x20/000/808080.png&text=dummy" alt="" />
          </a>
          <a href="#" class="bns-block-nursery__school">あああ幼稚園</a>
        </div>
        <div class="bns-block-nursery__body">
          <a href="#" class="bns-block-nursery__image">
            <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
          </a>
          <div class="bns-block-nursery__status">保育園の種類：認可<br>保育園の種類：認可<br>保育園の種類：認可</div>
        </div>
      </div>
    </div><!-- /.bns-layout--negative -->

    <h2 class="bns-title-level2">おすすめ記事</h2>
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

    <h2 class="bns-title-level2">広告カルーセル</h2>
    <div class="bns-block-ad">
      <div class="bns-block-ad__heading">園生活におすすめ</div>
      <ul class="bns-block-ad-list">
        <li class="bns-block-ad-list__item">
          <a href="#" class="bns-block-ad-list__body">
            <div class="bns-block-ad-list__image">
              <img src="https://dummyimage.com/135x165/000/808080.png&text=dummy" alt="" />
            </div>
            <p class="bns-block-ad-list__text">おすすめアイテムその1</p>
          </a>
        </li>
        <li class="bns-block-ad-list__item">
          <a href="#" class="bns-block-ad-list__body">
            <div class="bns-block-ad-list__image">
              <img src="https://dummyimage.com/135x165/000/808080.png&text=dummy" alt="" />
            </div>
            <p class="bns-block-ad-list__text">おすすめアイテムその2</p>
          </a>
        </li>
        <li class="bns-block-ad-list__item">
          <a href="#" class="bns-block-ad-list__body">
            <div class="bns-block-ad-list__image">
              <img src="https://dummyimage.com/135x165/000/808080.png&text=dummy" alt="" />
            </div>
            <p class="bns-block-ad-list__text">テキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよテキスト長いよ</p>
          </a>
        </li>
        <li class="bns-block-ad-list__item">
          <a href="#" class="bns-block-ad-list__body">
            <div class="bns-block-ad-list__image">
              <img src="https://dummyimage.com/135x165/000/808080.png&text=dummy" alt="" />
            </div>
            <p class="bns-block-ad-list__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </li>
      </ul><!-- /.bns-carousel -->
    </div><!-- /.bns-block-ad -->

    <h2 class="bns-title-level2">施設詳細カルーセル</h2>
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
    </div><!-- /.bns-block-ad -->

  </section>
</article>
@stop