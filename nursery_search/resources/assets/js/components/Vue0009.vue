<template>
  <div>
    <VueHeader catchtext="保育園選びのポイントのページです"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">保育園選びのポイント
          </h2>
          <div class="bns-layout">
            <p class="bns-text">
              ダミー：幼稚園と違って、保育園は条件に合うところを選ぶ余裕がない場合もあります。年齢によっては定員が決まっていて入園が不可能など、さまざまな状況も考慮しつつ園選びを進めましょう。
            </p>
          </div><!-- bns-layout -->
          <div class="bns-layout">
            <p class="bns-text">
              また現在、幼児教育施設は多様化しています。地域によっては幼稚園と保育所を統合した形の「認定こども園」や幼保一体化施設もあります。また、保育時間はさまざまで延長保育（有料）が可能な園もありますので、わが家の実情に合う園を選ぶようにしましょう。
            </p>
          </div><!-- bns-layout -->
        </section>

        <section class="bns-section">
          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="images/ico_school.svg" alt="" /></i>最近見た保育園</h2>
          <RecentlySeeNursery></RecentlySeeNursery>

          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="images/ico_news.svg" alt="" /></i>おすすめ記事</h2>
          <RecommendNews></RecommendNews>

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
import RecentlySeeNursery from './_partial/RecentlySeeNursery.vue';
import RecommendNews from './_partial/RecommendNews.vue';
import BreadCrumbs from "./_partial/BreadCrumbs.vue";
import VueFooter from "./_partial/VueFooter.vue";

import HeadTagUtility from '../classes/util/HeadTagUtility';

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      RecentlySeeNursery: RecentlySeeNursery,
      RecommendNews: RecommendNews,
      BreadCrumbs: BreadCrumbs,
      VueFooter: VueFooter
    }
  }
)
export default class Vue0009 extends Vue {

  public created(): void {
    console.log('Vue0009.created!!');
    HeadTagUtility.setInfo(
      '保育園選びのポイント',
      '保活ナビ,保育園選びのポイントページ',
      '保育園選びのポイントのページです'
    );
  }

  public mounted(): void {
    console.log('Vue0009.mounted!!');
    document.title = 'Vue0009';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0009.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0009.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0009.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
