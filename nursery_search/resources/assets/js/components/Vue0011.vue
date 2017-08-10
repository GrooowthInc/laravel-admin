<template>
  <div>
    <VueHeader catchtext="あとで見る一覧"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_school.svg" alt="" /></i>あとで見る一覧</h2>
          
          <SeeLater></SeeLater>

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
          {!! Breadcrumbs::render('seelater',$title ) !!}
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
import SeeLater from "./_partial/SeeLater.vue";
import VueFooter from "./_partial/VueFooter.vue";

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      SeeLater: SeeLater,
      VueFooter: VueFooter
    }
  }
)  
export default class Vue0011 extends Vue {

  public created(): void {
    console.log('Vue0011.created!!');
    document.title = 'あとで見る一覧|保育園 - 保活ナビ';
  }

  public mounted(): void {
    console.log('Vue0011.mounted!!');
    document.title = '２Vue0011';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0011.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0011.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0011.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
