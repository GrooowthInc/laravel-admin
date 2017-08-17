<template>
  <div>
    <VueHeader catchtext="FAQのページです"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <section class="bns-section">
          <h2 class="bns-title-level2">FAQ</h2>
          <div class="bns-accordion">
            <ul class="bns-accordion-list">
              <li class="bns-accordion-list__item">
                <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
                  <i class="bns-icon-carret__bottom"></i>
                  <span class="bns-accordion__text">1日の流れはどのような感じですか？</span>
                </a>
                <div class="bns-accordion__body" data-bns-accordion="content">
                  <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
                </div>
              </li>
              <li class="bns-accordion-list__item">
                <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
                  <i class="bns-icon-carret__bottom"></i>
                  <span class="bns-accordion__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolor architecto, hic velit?</span>
                </a>
                <div class="bns-accordion__body" data-bns-accordion="content">
                  <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
                </div>
              </li>
              <li class="bns-accordion-list__item">
                <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
                  <i class="bns-icon-carret__bottom"></i>
                  <span class="bns-accordion__text">1日の流れはどのような感じですか？</span>
                </a>
                <div class="bns-accordion__body" data-bns-accordion="content">
                  <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
                </div>
              </li>
              <li class="bns-accordion-list__item">
                <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
                  <i class="bns-icon-carret__bottom"></i>
                  <span class="bns-accordion__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolor architecto, hic velit?</span>
                </a>
                <div class="bns-accordion__body" data-bns-accordion="content">
                  <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
                </div>
              </li>
            </ul>
          </div><!-- /.bns-accordion -->
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
export default class Vue0013 extends Vue {

  public created(): void {
    console.log('Vue0013.created!!');
    HeadTagUtility.setInfo(
      'FAQ',
      '保活ナビ,FAQページ',
      'FAQのページです'
    );
  }

  public mounted(): void {
    console.log('Vue0013.mounted!!');
    document.title = 'Vue0013';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0013.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0013.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0013.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
