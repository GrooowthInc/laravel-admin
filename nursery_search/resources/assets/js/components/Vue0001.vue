<template>
  <div>
    <VueHeader catchtext="保育園探しから申し込みまでサポート"></VueHeader>
    <main id="dashboard" class="bns-main" data-bns-nav="main">
      <article class="bns-article">
        <div class="bns-section">
          <div class="bns-info">
            ニュースのコピーですLorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
        <section class="bns-section">
          <h2 class="bns-title-area"><span class="bns-title-area__text"><i class="bns-icon-loupe"></i>保育園を探す</span></h2>
          <div class="bns-block-active ui grid">
            <div class="doubling four column row">
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">東京都</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">神奈川県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">千葉県</button>
              </div>
              <div class="column">
                <button class="bns-btn--primary"  data-bns-dropmenu="target">埼玉県</button>
              </div>
            </div>
          </div><!-- /.ui grid -->
          <div class="bns-block-active ui grid centered">
            <div class="fifteen wide column">
              <button class="bns-btn--primary">現在地からさがす</button>
            </div>
          </div><!-- /.ui grid -->
          <div class="bns-block-active ui grid centered">
            <div class="fifteen wide column">
              <form class="bns-form">
                <input class="bns-form-search__textbox" type="search" name="freeword_search" placeholder="市区町村・駅名等を検索">
                <button class="bns-form-search__button" type="submit" name="action" value="send"></button>
              </form><!-- /.bns-form -->
              <p class="bns-text">保育園情報は東京都・神奈川県・千葉県・埼玉県のみです</p>
            </div>
          </div><!-- /.ui grid -->

          <div class="bns-layout">
            <button class="bns-btn-radius--secondary"><i class="bns-icon-point"></i>初めての保育園の探しかた</button>
          </div>

          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_school.svg" alt="" /></i>最近見た保育園</h2>
          <RecentlySeeNursery></RecentlySeeNursery>

          <!-- ▼広告カルーセル▼ -->
          <AdCarousel></AdCarousel>
          <!-- ▲広告カルーセル▲ -->

          <h2 class="bns-title-level2"><i class="bns-title-icon"><img src="/images/ico_news.svg" alt="" /></i>おすすめ記事</h2>
          <RecommendNews></RecommendNews>

          <div class="bns-layout">
            <h3 class="bns-title-level3">保育園を探す</h3>
            <a href="#" class="bns-text-link">東京都</a>
            <a href="#" class="bns-text-link">神奈川県</a>
            <a href="#" class="bns-text-link">千葉県</a>
            <a href="#" class="bns-text-link">埼玉県</a>
            <p class="bns-text">「保育園探しナビ」では各地域の保育園探しから、見学までをサポ―ト。<br>
            各地域の認可保育園はもちろん、認証保育園、小規模保育園、認定こども園、家庭的保育などの情報をまとめました。<br>
            施設情報に加え、教育方針や子どもの過ごし方がわかる、「保育園探しナビ」オリジナルの情報も掲載しています。<br>
            さらに、保育園探しに役立つポイントがわかる記事や読み物もお届けします。<br>
            はじめての保育園探しにぜひお役立てくださいね。</p>
          </div><!-- /.bns-layout -->
        </section>
      </article>
      <BannerArea></BannerArea>
      TODO: @yield('breadcrumbs') 
    </main>
    <VueFooter></VueFooter>
  </div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import VueHeader from "./_partial/VueHeader.vue";
import RecentlySeeNursery from "./_partial/RecentlySeeNursery.vue";
import AdCarousel from "./_partial/AdCarousel.vue";
import RecommendNews from "./_partial/RecommendNews.vue";
import BannerArea from "./_partial/BannerArea.vue";
import VueFooter from "./_partial/VueFooter.vue";

@Component
(
  {
    components: {
      VueHeader: VueHeader,
      RecentlySeeNursery: RecentlySeeNursery,
      AdCarousel: AdCarousel,
      RecommendNews: RecommendNews,
      BannerArea: BannerArea,
      VueFooter: VueFooter
    }
  }
)  
export default class Vue0001 extends Vue {

  public created(): void {
    console.log('Vue0001.created!!');
    document.title = '近くの保育園探しなら - 保活ナビ';
  }

  public mounted(): void {
    console.log('Vue0001.mounted!!');
    document.title = '２Vue0001';
  }

  public beforeRouteEnter(to: any, from: any, next: any): void {
    console.log('Vue0001.beforeRouteEnter!!', to, from, next);
    // このコンポーネントを描画するルートが確立する前に呼ばれます。
    // `this` でのこのコンポーネントへのアクセスはできません。
    // なぜならばこのガードが呼び出される時にまだ作られていないからです!
    next();
  }

  public beforeRouteUpdate(to: any, from: any, next: any): void {
    console.log('Vue0001.beforeRouteUpdate!!', to, from, next);
    // このコンポーネントを描画するルートが変更されたときに呼び出されますが、
    // このコンポーネントは新しいルートで再利用されます。
    // たとえば、動的な引数 /foo/:id を持つルートの場合、/foo/1 と /foo/2 の間を移動すると、
    // 同じ Foo コンポーネントインスタンスが再利用され、そのときにこのフックが呼び出されます。
    // `this` でコンポーネントインスタンスにアクセスできます。
    next();
  }

  public beforeRouteLeave(to: any, from: any, next: any): void {
    console.log('Vue0001.beforeRouteLeave!!', to, from, next);
    // このコンポーネントを描画するルートが間もなく
    // ナビゲーションから離れていく時に呼ばれます。
    // `this` でのコンポーネントインスタンスへのアクセスができます。
    next();
  }

}
</script>
