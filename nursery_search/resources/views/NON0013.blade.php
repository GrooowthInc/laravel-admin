@extends('layouts.default')
<?php
  $title = 'FAQ';
  $description = 'FAQのページです';
  $keywords = '保活ナビ,FAQページ';
  $catchtext = 'FAQのページです';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">ユーザーのかた</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">探している保育園が掲載されていない。掲載してほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡ください。掲載基準がございますので、ご要望に添えない場合にはご了承ください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">保育園の情報を修正・訂正してほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">掲載している情報は、各園への調査時点の情報、また各自治体が公開している情報に基づき掲載しております。そのため、ご確認時点の情報と誤差がある場合があります。最新情報については、必ずご自身で園までお問合せください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">「現在地から探す」がうまくいかない</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">スマートフォンをご利用の場合は、「設定」より、「位置情報を許可する」に設定をお願いします。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">「後で見る」が消えてしまった</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">cookie情報を利用しているため、ブラウザを別で立ち上げたり、ｃookie情報（閲覧履歴）を削除すると、消えてしまう場合があります。ご留意ください。</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->
    <h2 class="bns-title-level2">施設関係者のかた</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">ベネッセから園に関するアンケート依頼の手紙が届いた。本当にベネッセから？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">関東地方の保育園・こども園様宛にアンケートのご協力をお願いする手紙を「（株）ベネッセコーポレーション　たまひよ事業部」からお送りしています。ぜひともご協力ください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">園情報の掲載は有料？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">無料です。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">園に関するアンケートに回答することで何かメリットはありますか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">貴園への入園を検討される保護者様に事前に情報提供させていただくことで、保護者様、保育園・こども園様の入園準備にまつわるご負担の軽減を目指しております。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">園に関するアンケート用紙を無くしてしまったので、再送してほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡ください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">アンケートの締め切りを過ぎてしまった。今からでも受け付けてくれるのか。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡ください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">アンケートが届いていないが、掲載してほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡をお願いします。また、掲載基準についてもご確認をお願いいたします。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">園の情報を修正してほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡ください。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">園の情報を掲載してほしくない。取り下げてほしい。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりご連絡ください。</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->
    <h2 class="bns-title-level2">掲載情報について</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">東京・千葉・埼玉・神奈川が対象なのはなぜですか。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">待機児童数が多い地域からサービスを提供させていただいております。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">東京・千葉・埼玉・神奈川以外のエリアの掲載予定はありますか。</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">今のところ未定です。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">表示の順番はどのようにして決まっているのか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">掲載基準はありますか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">ベネッセコーポレーション独自に各園にアンケート調査を実施しており、保活ナビオリジナルのデータを掲載しております。また、回答がない園に関しましては、自治体の公開情報を基に保活ナビが掲載しています。</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">いつの情報が掲載されていますか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">アンケート回答時点、または調査時点の情報を掲載しております。<br>各ページに、掲載日時の記載がありますのでご確認ください。<br>また、最新の情報については、必ずお客様ご自身で園に問い合わせる等ご確認いただきますよう、お願いいたします。</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->
    <h2 class="bns-title-level2">その他</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__bottom"></i>
            <span class="bns-accordion__text">その他のお問合せについて</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">お問合せフォームよりお問合せください。</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('faq',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop