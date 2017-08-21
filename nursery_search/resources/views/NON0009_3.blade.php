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
    <div class="bns-title-block">図解でわかる！<br>保育施設・サービス基礎知識</div>
    <div class="bns-layout">
      <p class="bns-text--right">
        <span class="bns-text--sm">監修：普光院亜紀さん（「保育園を考える親の会」代表）</span>
      </p>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">はじめに知っておきたいこと</a>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">図解でわかる！<br>保育施設・サービス基礎知識</a>
    </div>
    <div class="bns-layout">
      <a href="#" class="bns-btn--secondary">キーワードは早めの行動！<br>保活のポイント</a>
    </div>

    <div class="bns-layout">
      <h3 class="bns-title-level3--border">キーワードは早めの行動！<br>保活のポイント</h3>
      <p class="bns-text">
        情報を早めに集め、しっかりと自分の目で見学をすることで、安心できる保育園選びが可能になります。<br>来週の入園に向けて対策を練っていきましょう。
      </p>
      <h3 class="bns-title-level3--emphasis">情報収集のコツは？</h3>
      <p class="bns-text">
        新設園や選考基準など最新情報は保育課の窓口が1番。
        それに加えて、先輩ママたちのクチコミも大事です。<br>
        <span class="bns-text-notice">自治体の窓口に行く前に、事前に自分で近い園や園の種類、
        受け入れ年齢など下調べしておくことでスムーズに相談できます。</span>
      </p>
      <div class="bns-block-active--radius">
        <div class="bns-layout--default">
          <ol class="bns-list--numbering">
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">1.</span><span class="bns-list--numbering__text">まずは自治体保育課のHPをチェック</span></li>
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">2.</span><span class="bns-list--numbering__text">保育園入園申請書関係書類をダウンロード</span></li>
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">3.</span><span class="bns-list--numbering__text">不明点・疑問点をまとめる</span></li>
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">4.</span><span class="bns-list--numbering__text">新設園の有無、選考基準、自分の指数を調べる</span></li>
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">5.</span><span class="bns-list--numbering__text">役所の窓口で確認や相談をする</span></li>
            <li class="bns-list--numbering__item"><span class="bns-list--numbering__head">6.</span><span class="bns-list--numbering__text">クチコミで保育園の評判や保活の情報をゲット</span></li>
          </ol>
        </div><!-- /.bns-layout--default -->
      </div>
    </div>

    <div class="bns-layout">
      <h3 class="bns-title-level3--emphasis">保育園見学・質の見極めポイントは？</h3>
      <div class="bns-block-point">
        <div class="bns-layout--default">
          <h3 class="bns-title-level3--emphasis">園長や保育士の第一印象は？</h3>
          <p class="bns-text">
            見学時に「質が高い」保育園を見極める最大のポイント。<br>話しやすさや子供へのまなざし、挨拶の様子など、ママやパパ自身が付き合いやすそうと感じるかどうかが大切。
          </p>
        </div><!-- /.bns-layout--default -->
      </div>
      <div class="bns-block-point">
        <div class="bns-layout--default">
          <h3 class="bns-title-level3--emphasis">忙しい時間帯の様子は？</h3>
          <p class="bns-text">
            食事中や着替え中、お散歩前に園児に靴を履かせる時や子どもが泣いているときなど大変な時に保育士がどういう対応をしているかはその園全体の保育の質を見るチャンス。
          </p>
        </div><!-- /.bns-layout--default -->
      </div>
      <div class="bns-block-point">
        <div class="bns-layout--default">
          <h3 class="bns-title-level3--emphasis">施設の安全性・清潔感は？</h3>
          <p class="bns-text">
            施設が新しいか古いかよりも、子どもにとって安全で清潔感があるかどうかをチェック。<br>片付けが行き届いていない施設は、業務形態や保育士の仕事に余裕がない、ということかも。
          </p>
        </div><!-- /.bns-layout--default -->
      </div>
      <div class="bns-block-point">
        <div class="bns-layout--default">
          <h3 class="bns-title-level3--emphasis">子どもたちの表情は？</h3>
          <p class="bns-text">
            在園の子どもたちがどんな顔をして過ごしているのかも見極めポイントの一つ。<br>保育士が見守る中で夢中で遊んでいたり、くつろいでいたりすれば、安心できる園という証拠。
          </p>
        </div><!-- /.bns-layout--default -->
      </div>
    </div><!-- /.bns-layout -->

    <div class="bns-layout">
      <h3 class="bns-title-level3--border">後悔のないようにいろんな角度で見学しよう</h3>
      <p class="bns-text">
        「保育園見学も、園長先生とゆっくり話せるように混み合う前がベター」<br>
        と普光院さん。<br>
        「見学のポイントはいろいろありますが、園長や保育士を信頼できそうかという第一印象も大切。お散歩から帰ってきたころ、食事の準備に入る時間など、保育士が忙しくなる時間にも注目しましょう」<br>
        認可保育所だけではなく、認可外も必ず見学すること。<br>
        「いろいろな形の保育施設があり、様々な保育方針があると知った上で、<br>
        希望の順番を心の中で決めておけば、万が一不承諾になった時も慌てずに行動できます」<br>
        申し込み後に不承諾になってしまった場合に備えて、<br>
        住んでいる自治体だけではなく、最寄り駅・隣の駅、職場の近くの認可外等、視野を広げて見ておけるとベターです。<br>
        実際に不承諾になってしまい慌てて探すよりは、事前にエリアや種別の視野を広げて検討を進めるようにしましょう。
      </p>
    </div><!-- /.bns-layout -->

    <div class="bns-layout--negative">
      <div class="bns-block-nursery">
        <div class="bns-block-active__outer">
          <h2 class="bns-title-area"><span class="bns-title-area__text"><i class="bns-icon-loupe"></i>保育園を探す</span></h2>
          <div class="bns-block-active--top ui grid">
            <div class="doubling four column row">
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">東京都</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">神奈川県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">千葉県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">埼玉県</button>
              </div>
            </div>
          </div><!-- /.ui grid -->
        </div><!-- /.bns-block-active__outer -->
      </div>
    </div><!-- /.bns-layout--negative -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('nursery-select-point',$title ) !!}

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