@extends('layouts.default')
<?php
  $title = 'modules';
  $description = '保活ナビのモジュールページです';
  $keywords = '保活ナビ,モジュールページ';
  $catchtext = 'キャッチテキスト、ページ毎に固有になる';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

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
    <h3 class="bns-title-level3--emphasis">タイトルレベル3 色付き</h3>
    <h4 class="bns-title-level4">タイトルレベル4</h4>

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
      <ul class="bns-block-ad-list" data-bns-slick="target-recommend">
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

    <h2 class="bns-title-level2">テーブル</h2>
    <table class="bns-table">
      <tbody>
        <tr>
          <td class="bns-table__heading" colspan="4">見出し付きテーブル</td>
        </tr>
        <tr>
          <td>項目1</td>
          <td>項目2</td>
          <td>項目3</td>
          <td>項目4</td>
        </tr>
        <tr>
          <td>項目5</td>
          <td>項目6</td>
          <td>項目7</td>
          <td>項目8</td>
        </tr>
      </tbody>
    </table><!-- /.bns-table -->
    <table class="bns-table">
      <tbody>
        <tr>
          <td class="bns-table__heading" colspan="2">見出し付きテーブル</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">01月</td>
          <td>項目1</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">02月</td>
          <td>項目2</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">03月</td>
          <td>項目3</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">04月</td>
          <td>項目4</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">05月</td>
          <td>項目5</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">06月</td>
          <td>項目6</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">07月</td>
          <td>項目7</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">08月</td>
          <td>項目8</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">09月</td>
          <td>項目9</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">10月</td>
          <td>項目10</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">11月</td>
          <td>項目11</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm">12月</td>
          <td>項目12</td>
        </tr>
      </tbody>
    </table><!-- /.bns-table -->
    <table class="bns-table">
      <tbody>
        <tr>
          <th>タイトル1</th>
          <th>タイトル2</th>
          <th>タイトル3</th>
          <th>タイトル4</th>
        </tr>
        <tr>
          <td>項目1</td>
          <td>項目2</td>
          <td>項目3</td>
          <td>項目4</td>
        </tr>
        <tr>
          <td>項目5</td>
          <td>項目6</td>
          <td>項目7</td>
          <td>項目8</td>
        </tr>
      </tbody>
    </table><!-- /.bns-table -->

    <h2 class="bns-title-level2">施設詳細ページで使用するブロック</h2>
    <div class="bns-block-category">
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">見出しですよ見出しですよ</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ducimus sunt voluptates quae, impedit excepturi hic, saepe commodi, reiciendis minus similique, sit cupiditate amet rem quam vero quia quo quasi.</p>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">見出し見出し見出し見出し</h3>
          <p>棒は風のお世話セロ屋が子にしぎてしまいはもうじぶんがたな。<br>
          せすぎそこも巻をないたて前のゴーシュの先生汁がつっ込ん第二テープたちの病気をあいと行っんます。</p>
        </div>
      </div>
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">見出しですよ見出しですよ</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">見出し見出し見出し見出し</h3>
          <p>棒は風のお世話セロ屋が子にしぎてしまいはもうじぶんがたな。<br>
          そしてどうそれどころたましという楽隊たまし。まじめたない気たしかたそして舌の粗末がいのときにはちゃんとくたくたございたて、みんなまで慈悲から云っられのたた。せすぎそこも巻をないたて前のゴーシュの先生汁がつっ込ん第二テープたちの病気をあいと行っんます。</p>
        </div>
      </div>
    </div><!-- /.bns-block-category -->
    <div class="bns-block-detail">
      <div class="bns-block-detail__item">
        <h4 class="bns-title-level4">タイトル詳細</h4>
        <p class="bns-text-detail">内容詳細内容詳細内容詳細内容詳細</p>
      </div>
      <div class="bns-block-detail__item">
        <h4 class="bns-title-level4">タイトル詳細</h4>
        <p class="bns-text-detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="bns-block-detail__item">
        <h4 class="bns-title-level4">タイトル詳細</h4>
        <a href="#" class="bns-text-detail--link">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
      </div>
    </div><!-- /.bns-block-detail -->
  </section>
</article>
@stop