<template>
  <div>
    <VueHeader catchtext="サイトマップのページです"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">サイトマップ</h2>
          <ul class="bns-list">
            <li class="bns-list__item">
              <ul class="bns-list__item-inner">
                <li class="bns-list-heading"><span class="bns-list-heading__text">エリアを選んでください</span></li>
                <li class="bns-list-category__item">
                  <ul class="bns-list-child">
                    <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">東京都</a></li>
                    <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">神奈川県</a></li>
                    <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">千葉県</a></li>
                    <li class="bns-list-child__item"><a href="#" class="bns-list-child__link">埼玉県</a></li>
                  </ul>
                </li>
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">現在地からさがす</a></li>
              </ul>
            </li><!-- /.bns-list__item -->
            <li class="bns-list__item">
              <ul class="bns-list__item-inner">
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">あとで見る一覧</a></li>
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">記事一覧</a></li>
              </ul>
            </li><!-- /.bns-list__item -->
            <li class="bns-list__item">
              <ul class="bns-list__item-inner">
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">保育園選びのポイント</a></li>
                <li class="bns-list-heading"><a href="#"  class="bns-list-heading__text">サービス紹介</a></li>
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">FAQ</a></li>
              </ul>
            </li><!-- /.bns-list__item -->
            <li class="bns-list__item">
              <ul class="bns-list__item-inner">
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">ご利用規約</a></li>
                <li class="bns-list-heading"><a href="#" class="bns-list-heading__text">サイトマップ</a></li>
              </ul>
            </li><!-- /.bns-list__item -->
          </ul><!-- /.bns-list -->
        </section>

        <section class="bns-section">
          <BreadCrumbs></BreadCrumbs>
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
export default class Vue0014 extends Vue {

  public created(): void {
    console.log('Vue0014.created!!');
    HeadTagUtility.setInfo(
      'サイトマップ',
      '保活ナビ,サイトマップページ',
      'サイトマップのページです'
    );
  }

  public mounted(): void {
    console.log('Vue0014.mounted!!');
    document.title = 'Vue0014';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0014.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0014.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0014.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
