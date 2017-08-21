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
    <h2 class="bns-title-level2">
      <i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>タイトルレベル2
    </h2>
    <h2 class="bns-title-level2"><span class="bns-title-text">タイトルレベル2</span> <a href="#" class="bns-title-label">ラベル有り</a></h2>
    <h3 class="bns-title-level3">タイトルレベル3</h3>
    <h3 class="bns-title-level3--emphasis">タイトルレベル3 色付き</h3>
    <h3 class="bns-title-level3--border">タイトルレベル3 下線付き</h3>
    <h4 class="bns-title-level4">タイトルレベル4</h4>

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>ボタン</h2>
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
          <button class="bns-btn--third">third</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn--third">third</a>
        </div>
        <div class="column">
          <button class="bns-btn--default">nomal</button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn--default is-active">nomal</a>
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
        <div class="column">
          <button class="bns-btn-icon--primary">
            <span class="bns-btn-icon__area">
              <i class="bns-icon-loupe--search"></i>
            </span>
            <span class="bns-btn-icon__text">primary</span>
          </button>
        </div>
        <div class="column">
          <a href="#" class="bns-btn-icon--primary">
            <span class="bns-btn-icon__area">
              <i class="bns-icon-loupe--search"></i>
            </span>
            <span class="bns-btn-icon__text">primary</span>
          </a>
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
    <div class="bns-layout">
      <button class="bns-btn-radius--primary">primary large</button>
    </div>
    <div class="bns-layout">
      <button class="bns-btn-radius--secondary">secondary large</button>
    </div>
    <div class="bns-layout">
      <button class="bns-btn-radius">default large</button>
    </div>
    <div class="bns-layout">
      <form class="bns-form">
        <input class="bns-form-search__textbox" type="search" name="freeword_search" placeholder="市区町村・駅名等を検索">
        <button class="bns-form-search__button" type="submit" name="action" value="send"></button>
      </form><!-- /.bns-form -->
    </div>

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>ラベル</h2>
    <div class="ui grid">
      <div class="doubling four column row">
        <div class="column">
          <i class="bns-label">認可</i>
        </div>
        <div class="column">
          <i class="bns-label--disabled">認可</i>
        </div>
        <div class="column">
          <i class="bns-label--primary">hoge</i>
        </div>
        <div class="column">
          <i class="bns-label--disabled">hogehoge</i>
        </div>
        <div class="column">
          <i class="bns-label--secondary">hoge</i>
        </div>
        <div class="column">
          <i class="bns-label--third">hogehoge</i>
        </div>
      </div>
    </div><!-- /.ui grid -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>テキスト</h2>
    <p>人間は考える葦である。</p>
    <p class="bns-text">吾輩は猫である。名前はまだない。</p>
    <p class="bns-text-info">お知らせ的な強調したい文字</p>
    <p class="bns-text-notice">バリエラとかエラー時に強調したい文字</p>
    <p class="bns-text-bold">fw:bのテキスト</p>
    <a href="#" class="bns-text-link">テキストリンク</a>

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>近くの保育園</h2>
    @include('_partial.near-nursery')

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>おすすめ記事</h2>
    @include('_partial.recommend-news')

    <!-- 作ったらパーシャル化する -->
    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>広告カルーセル</h2>
    @include('_partial.ad-carousel')

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>施設詳細カルーセル</h2>
    @include('_partial.facility-carousel')

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>テーブル</h2>
    <table class="bns-table">
      <tbody>
        <tr class="bns-table__heading--no-border">
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
        <tr class="bns-table__heading--no-border">
          <td class="bns-table__heading" colspan="2">見出し付きテーブル</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">01月</td>
          <td>項目1</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">02月</td>
          <td>項目2</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">03月</td>
          <td>項目3</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">04月</td>
          <td>項目4</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">05月</td>
          <td>項目5</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">06月</td>
          <td>項目6</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">07月</td>
          <td>項目7</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">08月</td>
          <td>項目8</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">09月</td>
          <td>項目9</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">10月</td>
          <td>項目10</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">11月</td>
          <td>項目11</td>
        </tr>
        <tr>
          <td class="bns-table-cell--sm bns-table__head">12月</td>
          <td>項目12</td>
        </tr>
      </tbody>
    </table><!-- /.bns-table -->
    <table class="bns-table--with-heading">
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
        <tr>
          <td>項目9</td>
          <td>項目10</td>
          <td>項目11</td>
          <td>項目12</td>
        </tr>
      </tbody>
    </table><!-- /.bns-table -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>施設詳細ページで使用するブロック</h2>
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

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>アコーディオンモジュール</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">1日の流れはどのような感じですか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolor architecto, hic velit?</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="{{asset('/images/ico_school.svg')}}" alt="" /></i>ページネーション</h2>
    <div class="bns-pagenation">
      <ul class="bns-pagenation-list">
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__prev"></a>
        </li>
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__link">1</a>
        </li>
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__link is-current">2</a>
        </li>
        <li class="bns-pagenation-list__item">
          <span class="bns-pagenation-list__link">…</span>
        </li>
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__link">4</a>
        </li>
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__link">5</a>
        </li>
        <li class="bns-pagenation-list__item">
          <a href="#" class="bns-pagenation-list__next"></a>
        </li>
      </ul>
    </div><!-- /.bns-pagenation -->
  </section>
</article>

{!! Breadcrumbs::render('modules',$title ) !!}
@stop