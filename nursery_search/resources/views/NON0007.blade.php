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
        <a href="#" class="bns-block-category__icon"></a>
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
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">開園時間</h3>
          <table class="bns-table--with-heading">
            <tbody>
              <tr>
                <th class="bns-table__title-sub">受け入れ<br>開始年齢</th>
                <th>生後8週～</th>
                <th class="bns-table__title-sub">定員合計</th>
                <th>93名</th>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
            </tbody>
          </table><!-- /.bns-table -->

          <table class="bns-table">
            <tbody>
              <tr class="bns-table__heading--no-border">
                <td class="bns-table__heading" colspan="4">常勤職員数</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
            </tbody>
          </table><!-- /.bns-table -->

          <table class="bns-table">
            <tbody>
              <tr class="bns-table__heading--no-border">
                <td class="bns-table__heading" colspan="4">非常勤職員数</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
              <tr>
                <td>0才</td>
                <td>3名</td>
                <td>1才</td>
                <td>10名</td>
              </tr>
            </tbody>
          </table><!-- /.bns-table -->

          <div class="bns-block-category__body">
            <h3 class="bns-title-level3--emphasis">保護者様に必要な情報</h3>
            <div class="bns-text-table">
              <p class="bns-text-table__heading">ベビーカー置き場</p>
              <p class="bns-text-table__body">あり</p>
            </div>
            <div class="bns-text-table">
              <p class="bns-text-table__heading">ベビーカー置き場</p>
              <p class="bns-text-table__body">なし</p>
            </div>
            <div class="bns-text-table">
              <p class="bns-text-table__heading">ベビーカー置き場</p>
              <p class="bns-text-table__body">あり</p>
            </div>
            <div class="bns-text-table">
              <p class="bns-text-table__heading">ベビーカー置き場</p>
              <p class="bns-text-table__body">なし</p>
            </div>
          </div>
        </div>
      </div><!-- /.bns-block-category__item -->
      <div class="bns-block-category__item">
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">1年間の過ごし方(行事等)</h3>
          <table class="bns-table">
            <tbody>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">01月</td>
                <td>項目1</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目2</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目3</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
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
        </div>
        <div class="bns-block-category__body">
          <h3 class="bns-title-level3--emphasis">1年間の過ごし方(行事等)</h3>
          <table class="bns-table">
            <tbody>
              <tr>
                <td class="bns-table__title" colspan="2">乳児</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目1</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目2</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目3</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目4</td>
              </tr>
            </tbody>
          </table><!-- /.bns-table -->
          <table class="bns-table">
            <tbody>
              <tr>
                <td class="bns-table__title" colspan="2">乳児</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目1</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目2</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目3</td>
              </tr>
              <tr>
                <td class="bns-table-cell--sm bns-table__head">00時</td>
                <td>項目4</td>
              </tr>
            </tbody>
          </table><!-- /.bns-table -->
        </div>
      </div><!-- /.bns-block-category__item -->

      <h3 class="bns-title-level3--emphasis">基本情報</h3>
      <div class="bns-block-detail">
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">住所</h4>
          <p class="bns-text-detail">
            〒181-0016&nbsp;&nbsp;東京都三鷹市深大寺3-3-10
            <a href="//maps.google.com/maps?daddr=35.692038,139.536631" class="bns-block-detail__icon" data-bns-url-scheme><i class="bns-icon-pin"></i></a>
          </p>
        </div>
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">交通手段</h4>
          <p class="bns-text-detail">
            小田急バス「第二住宅」から徒歩2分<br>
            JR中央線&nbsp;&nbsp;武蔵境駅からバス7分
          </p>
        </div>
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">運営会社</h4>
          <p class="bns-text-detail">社会福祉法人&nbsp;&nbsp;三鷹市社会福祉事業団</p>
        </div>
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">設立年</h4>
          <p class="bns-text-detail">0000年</p>
        </div>
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">ホームページ</h4>
          <a href="http://www.dummy.jp" target="_blank" class="bns-text-detail--link">http://www.dummy.jp <i class="bns-icon-external"></i></a>
        </div>
        <div class="bns-block-detail__item">
          <h4 class="bns-title-level4">電話番号</h4>
          <a href="tel:0422-00-0000" class="bns-text-detail--link">0422-00-0000 <i class="bns-icon-tel"></i></a>
        </div>
      </div><!-- /.bns-block-detail -->
    </div><!-- /.bns-block-catgory -->

    <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>近くの保育園</h2>
    @include('_partial.near-nursery')
  </section>

  <section class="bns-section">

    {!! Breadcrumbs::render('facility-detail',$title ) !!}

    <div class="bns-layout">
      <h3 class="bns-title-level3">都県別に保育園を探す</h3>
      <a href="#" class="bns-text-link">東京都</a>
      <a href="#" class="bns-text-link">神奈川県</a>
      <a href="#" class="bns-text-link">千葉県</a>
      <a href="#" class="bns-text-link">埼玉県</a>
    </div><!-- /.bns-layout -->
    <div class="bns-layout">
      <h3 class="bns-title-level3">市区町村別に保育園を探す</h3>
      <a href="#" class="bns-text-link">足立区</a>
      <a href="#" class="bns-text-link">荒川区</a>
      <a href="#" class="bns-text-link">板橋区</a>
      <a href="#" class="bns-text-link">江戸川区</a>
      <a href="#" class="bns-text-link">大田区</a>
      <a href="#" class="bns-text-link">葛飾区</a>
      <a href="#" class="bns-text-link">北区</a>
      <a href="#" class="bns-text-link">江東区</a>
      <a href="#" class="bns-text-link">品川区</a>
      <a href="#" class="bns-text-link">渋谷区</a>
      <a href="#" class="bns-text-link">新宿区</a>
      <a href="#" class="bns-text-link">杉並区</a>
      <a href="#" class="bns-text-link">墨田区</a>
      <a href="#" class="bns-text-link">世田谷区</a>
      <a href="#" class="bns-text-link">台東区</a>
      <a href="#" class="bns-text-link">中央区</a>
      <a href="#" class="bns-text-link">千代田区</a>
      <a href="#" class="bns-text-link">豊島区</a>
      <a href="#" class="bns-text-link">中野区</a>
      <a href="#" class="bns-text-link">練馬区</a>
      <a href="#" class="bns-text-link">文京区</a>
      <a href="#" class="bns-text-link">港区</a>
      <a href="#" class="bns-text-link">目黒区</a>
      <p class="bns-text">（以下省略）</p>
    </div><!-- /.bns-layout -->
  </section><!-- /.bns-section -->
</article>


@stop