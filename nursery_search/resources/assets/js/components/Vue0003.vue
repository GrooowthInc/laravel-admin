<template>
  <div>
    <VueHeader catchtext="東京都の保育園探しをサポートします。"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">東京都の沿線から保育園をさがす</h2>
          <p class="bns-text">東京都の沿線別保育園事情は、ダミーコピーです。ダミーコピーです。ダミーコピーです。ダミーコピーです。ダミーコピーです。</p>

          <h3 class="bns-title-level3">東京都・沿線を選択</h3>

          <div class="bns-form-select">
            <h4 class="bns-title-level4">JR</h4>
            <div class="bns-layout--negative" data-bns-checkbox="container">
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox01" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">JR山手線（14件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox02" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">JR京浜東北線（11件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox03" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">JR東海道本線（3件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox04" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">JR常磐線（2件）</span>
              </label>
            </div><!-- /.bns-layout--negative -->
            <h4 class="bns-title-level4">東京メトロ</h4>
            <div class="bns-layout--negative" data-bns-checkbox="container">
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox01" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">東京メトロ銀座線（14件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox02" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">東京メトロ丸ノ内線（11件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox03" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">東京メトロ日比谷線（3件）</span>
              </label>
              <label class="bns-form-select__label">
                <input type="checkbox" name="checkbox04" class="bns-form-select__check" data-bns-checkbox="check">
                <span class="bns-form-select__text">東京メトロ東西線（2件）</span>
              </label>
            </div><!-- /.bns-layout--negative -->
            <div class="bns-layout">
              <p class="bns-text--left">
                <label>
                  <input type="checkbox" name="all-release" class="bns-form-select__check" data-bns-checkbox="release-trigger">
                  <span class="bns-text-link--area"><i class="bns-icon-carret"></i>全てのチェックを外す</span>
                </label>
              </p>
            </div><!-- /.bns-layout -->

            <div class="ui two column centered grid">
              <div class="column">
                <a href="#" class="bns-btn--primary">検索</a>
              </div>
            </div><!-- /.ui .column -->
          </div><!-- /.bns-form-select -->
        </section>
        <section class="bns-section">
          <!-- ▼広告カルーセル▼ -->
          <AdCarousel></AdCarousel>
          <!-- ▲広告カルーセル▲ -->

          <!-- ▼最近見た保育園▼ -->
          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="images/ico_school.svg" alt="" /></i>最近見た保育園</h2>
          <RecentlySeeNursery></RecentlySeeNursery>
          <!-- ▲最近見た保育園▲ -->

          <!-- ▼おすすめ記事▼ -->
          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="images/ico_news.svg" alt="" /></i>おすすめ記事</h2>
          <RecommendNews></RecommendNews>
          <!-- ▲おすすめ記事▲ -->

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
    </main>
    <VueFooter></VueFooter>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import VueHeader from "./_partial/VueHeader.vue";
import AdCarousel from './_partial/AdCarousel.vue';
import RecentlySeeNursery from './_partial/RecentlySeeNursery.vue';
import RecommendNews from './_partial/RecommendNews.vue';
import VueFooter from "./_partial/VueFooter.vue";

import HeadTagUtility from '../classes/util/HeadTagUtility';

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      AdCarousel: AdCarousel,
      RecentlySeeNursery: RecentlySeeNursery,
      RecommendNews: RecommendNews,
      VueFooter: VueFooter
    }
  }
)
export default class Vue0003 extends Vue {

  public created(): void {
    console.log('Vue0003.created!!');
    HeadTagUtility.setInfo(
      '保育園検索　沿線選択',
      '保活ナビ,保育園検索',
      '保育園検索　沿線選択です'
    );
  }

  public mounted(): void {
    console.log('Vue0003.mounted!!');
    document.title = 'Vue0003';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0003.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0003.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0003.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
