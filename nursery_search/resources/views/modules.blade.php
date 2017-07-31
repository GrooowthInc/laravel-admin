@extends('layouts.default')

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
    </div>

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
    <a href="#" class="bns-text-link">テキストリンク</a>
  </section>
</article>
@stop