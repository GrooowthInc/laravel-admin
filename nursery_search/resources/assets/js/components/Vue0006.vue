<template>
  <div>
    <VueHeader catchtext="検索結果一覧"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">東京都杉並区【認証保育園】保育園一覧</h2>
          <p class="bns-text--sm">検索条件:&nbsp;東京都・杉並区・認証保育園（5件）</p>

          <div class="ui grid">
            <div class="doubling four column row">
              <div class="column">
                <!-- TODO: リンク先 -->
                <a href="#" class="bns-btn--primary"><i class="bns-icon-here"></i>地図で見る</a>
              </div>
              <div class="column">
                <button class="bns-btn--primary"><i class="bns-icon-list"></i>一覧で見る</button>
              </div>
            </div>
          </div><!-- /.ui grid -->
          <div class="bns-layout">
            <!-- TODO: リンク先 -->
            <a href="#modal-search" class="bns-btn--third-no-arrow" data-bns-tooltip="trigger" >検索条件の追加</a>
            <div class="ui flowing popup bottom center bns-tooltip--bottom" data-bns-tooltip="content">
              <a href="javascript: void(0);" class="bns-tooltip-btn" data-bns-tooltip="close"></a>
              <div class="ui divided center aligned grid">
                <div class="column">
                  <p class="bns-text">許可・許可外等の種別や<br>開園時間等で絞込検索できます</p>
                </div>
              </div><!-- /.bns-tooltip -->
            </div>
          </div>
          <NearNursery></NearNursery>

          <div class="bns-layout">
            <div class="bns-pagenation">
              <ul class="bns-pagenation-list">
                <li class="bns-pagenation-list__item">
                  <a href="#" class="bns-pagenation-list__prev"></a>
                </li>
                <li class="bns-pagenation-list__item">
                  <a href="#" class="bns-pagenation-list__link is-current">1</a>
                </li>
                <li class="bns-pagenation-list__item">
                  <a href="#" class="bns-pagenation-list__link">2</a>
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
import NearNursery from "./_partial/NearNursery.vue";
import BreadCrumbs from "./_partial/BreadCrumbs.vue";
import VueFooter from "./_partial/VueFooter.vue";

import HeadTagUtility from '../classes/util/HeadTagUtility';

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      NearNursery: NearNursery,
      BreadCrumbs: BreadCrumbs,
      VueFooter: VueFooter
    }
  }
)
export default class Vue0006 extends Vue {

  public created(): void {
    console.log('Vue0006.created!!');
    HeadTagUtility.setInfo(
      '検索結果一覧',
      '保活ナビ,検索結果一覧',
      '検索結果一覧'
    );
  }

  public mounted(): void {
    console.log('Vue0006.mounted!!');
    document.title = 'Vue0006';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0006.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0006.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0006.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
