@extends('layouts.default')
<?php
  $title = 'サービス概要';
  $description = 'サービス概要のページです';
  $keywords = '保活ナビ,サービス概要ページ';
  $catchtext = 'サービス概要のページです';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">サービス概要</h2>
    <h3 class="bns-title-level3">「保活ナビ」とは？</h3>
    <div class="bns-layout">
      <p class="bns-text">
        保育園探しのきほんの”き”から、申し込みたい保育園を絞り込むまでをサポート！<br>
        <br>
        オリジナルの保育園情報、オリジナルのお役立ち記事。<br>
        <br>
        エリアや園の種別をまたいで保育園情報が検索しやすい・わかりやすい、役立つ豊富な情報が見られるサービスです。
      </p>
      <p class="bns-text">
        ベネッセコーポレーション「保活ナビ」は、保育園・こども園探しをサポートする情報満載のWEBサイトです。<br>
        <br>
        東京都・埼玉県・千葉県・神奈川県の保育所（公立認可保育園、私立認可保育園、東京都認証保育園（A・B・C）、認定こども園、小規模保育事業、家庭的保育、事業所内保育、認可外保育施設）の情報が充実。<br>
        さらに各保育園の情報は、保育方針・保育内容や保護者に必要なことがわかるオリジナルの情報を公開しています（※アンケート回答園のみ）<br>
        <br>
        さらに、保育園探しや育児と仕事の両立に役立つ読み物コンテンツもまとめてお届けしていきます。
      </p>
      <p class="bns-text">
        <a href="{{ url('/') }}" class="bns-text-link"><i class="bns-icon-carret--sm"></i>保育園検索</a>
      </p>
      <p class="bns-text">
        <a href="#" class="bns-text-link"><i class="bns-icon-carret--sm"></i>読み物一覧</a>
      </p>
    </div><!-- /.bns-layout -->
    <h3 class="bns-title-level3">掲載されている情報について</h3>
    <div class="bns-layout">
      <p class="bns-text">
        保護者様が園を選ぶ際に必要な情報を、ベネッセコーポレーション「保活ナビ」独自に、園向けのアンケートを実施して取得し掲載しております。<br>
        <br>
        アンケート発送数 ●●園/回答数 ●●園（2017年8月実施）<br>
        <br>
        また、回答がなかった園に関しては、公開情報を基に保活ナビが掲載しております。<br>
        <br>
        調査時点の情報を掲載しておりますので、最新情報に関してはご自身で園にお問合せいただくことをお勧めします。<br>
        <br>
        掲載情報については随時更新して参りますが、最新の情報と誤差があった場合弊社が責任を負うものではありません。ご了承ください。<br>
        <br>
        ・地図はGoogleMAP、施設周辺写真はGoogleStreetViewを利用しています
      </p>
    </div><!-- /.bns-layout -->
    <h3 class="bns-title-level3">ご利用について</h3>
    <div class="bns-layout">
      <p class="bns-text">
        ・情報は調査時点の内容です。保育園をお申込みの際は、ご自身で最新情報をご確認いただき、見学されることをおすすめいたします。
      </p>
      <p class="bns-text">
        <a href="{{ url('/NON0009') }}" class="bns-text-link"><i class="bns-icon-carret--sm"></i>保育園の見学ポイント</a>
      </p>
      <p class="bns-text">
        <a href="#" class="bns-text-link"><i class="bns-icon-carret--sm"></i>そのほかよくあるご質問はこちらから</a>
      </p>
    </div><!-- /.bns-layout -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('service',$title ) !!}

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