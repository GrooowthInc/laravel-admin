<template>
  <div>
    <VueHeader catchtext="ご利用規約のページです"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">
            <i class="bns-title-icon"><img src="https://dummyimage.com/40x30/000/808080.png&text=dummy" alt="" /></i>ご利用規約
          </h2>
          <p class="bns-text">
            第５条（運営方針）<br>
            １. 当社は、会員が安心して楽しく、便利にサービスを利
            用するために、本サイトを以下の方針で運営します。<br>
            <br>
            (1)当社は、会員の個人情報の保護には、万全の注意を
            払います。<br>
            <br>
            (2)当社は、虚偽または不快な情報の送信、第三者の名
            誉・プライバシーの侵害その他の権利・利益を害する一
            切の行為に対し、厳正な態度で臨みます。<br>
            <br>
            ２. 本サイト上において、当社は、個々のサービスを自由
            に設置し、容を決定・変更し、一時停止または廃止するこ
            とができます。<br>
            <br>
            ３. 当社は、会員に対し、本サイトを運営するために必要
            な通知・連絡等を、電子メール・郵便・電話・ＦＡＸ・その他
            の方法により行うものとし、会員はこれを適宜確認するも
            のとします。<br>
            <br>
            第６条（料金）<br>
            <br>
            １．本サイトの会員登録は無料で行うことができます。<br>
            <br>
            ２．当社は、本サイトにおいて、無料で提供するサービス
            と、有料で提供するサービスを設けることができます。<br>
            <br>
            ３．本サイトへの会員登録および本サイトの閲覧、サービ
            スの利用の際、会員と通信会社およびプロバイダとの契
            約に基づく通信料およびインターネット接続料が発生しま
            す。当該料金および通信機器等の費用、
          </p>
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
export default class Vue0008 extends Vue {

  public created(): void {
    console.log('Vue0008.created!!');
    HeadTagUtility.setInfo(
      'ご利用規約',
      '保活ナビ,ご利用規約ページ',
      'ご利用規約のページです'
    );
  }

  public mounted(): void {
    console.log('Vue0008.mounted!!');
    document.title = 'Vue0008';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0008.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0008.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0008.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
