<template>
  <div>
    <VueHeader catchtext="サービス概要のページです"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
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
              <!-- TODO: リンク先 -->
              <a href="#" class="bns-text-link"><i class="bns-icon-carret--sm"></i>保育園検索</a>
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
              <!-- TODO: リンク先 -->
              <a href="#" class="bns-text-link"><i class="bns-icon-carret--sm"></i>保育園の見学ポイント</a>
            </p>
            <p class="bns-text">
              <a href="#" class="bns-text-link"><i class="bns-icon-carret--sm"></i>そのほかよくあるご質問はこちらから</a>
            </p>
          </div><!-- /.bns-layout -->
        </section>

        <section class="bns-section">
          <BreadCrumbs></BreadCrumbs>

          <div class="bns-layout">
            <h3 class="bns-title-level3">都県別に保育園を探す</h3>
            <a href="#" class="bns-text-link">東京都</a>
            <a href="#" class="bns-text-link">神奈川県</a>
            <a href="#" class="bns-text-link">千葉県</a>
            <a href="#" class="bns-text-link">埼玉県</a>
          </div><!-- /.bns-layout -->
        </section><!-- /.bns-section -->
      </article>
    </main>
    <VueFooter></VueFooter>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import VueHeader from "./_partial/VueHeader.vue";
import BreadCrumbs from "./_partial/BreadCrumbs.vue";
import VueFooter from "./_partial/VueFooter.vue";

import HeadTagUtility from '../classes/util/HeadTagUtility';

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      BreadCrumbs: BreadCrumbs,
      VueFooter: VueFooter
    }
  }
)
export default class Vue0010 extends Vue {

  public created(): void {
    console.log('Vue0010.created!!');
    HeadTagUtility.setInfo(
      'サービス概要',
      '保活ナビ,サービス概要ページ',
      'サービス概要のページです'
    );
  }

  public mounted(): void {
    console.log('Vue0010.mounted!!');
    document.title = 'Vue0010';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0010.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0010.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0010.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
