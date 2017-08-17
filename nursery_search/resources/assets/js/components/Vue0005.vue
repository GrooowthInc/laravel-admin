<template>
  <div>
    <VueHeader catchtext="地図検索"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <div class="bns-header-fixed">
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
      </div><!-- bns-header-fixed -->

      <!-- TODO: 地図表示 -->
      <div id="map" data-search-map data-search-map-lat="35.686847" data-search-map-lng="139.781360" data-search-map-zoom="15"></div>

      <div class="bns-footer-fixed">
        <BreadCrumbs></BreadCrumbs>
      </div><!-- bns-footer-fixed -->
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
export default class Vue0005 extends Vue {

  public created(): void {
    console.log('Vue0005.created!!');
    HeadTagUtility.setInfo(
      '地図検索',
      '保活ナビ,地図検索',
      '地図検索'
    );
  }

  public mounted(): void {
    console.log('Vue0005.mounted!!');
    document.title = 'Vue0005';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0005.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0005.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0005.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
