<template>
  <header class="bns-header" data-bns-nav="content">
    <div class="bns-header__lead">{{ catchtext }}</div>
    <nav class="bns-header-nav" data-bns-nav="target">
      <div class="bns-header-nav__inner">
        <h1 class="bns-header-logo">保活ナビ</h1>
        <div class="bns-header-func">
          <div class="bns-header__btn">
            <a href="javascript: void(0);" class="bns-header-icon--look">
              <img src="/images/btn_header01.svg" alt="後で見る" />
            </a>
            <i class="bns-header-icon--badge">20</i>
          </div>
          <div class="bns-header__btn">
            <a href="javascript: void(0);" class="bns-header-icon--menu" data-bns-dropmenu="target-nav">
              <img src="/images/btn_header02.svg" alt="メニュー" />
            </a>
          </div>
        </div>
      </div>

      <aside v-if="searchEnabled" class="bns-dropmenu" data-bns-dropmenu="content">
        <div class="bns-dropmenu__heading">
          <div class="ui grid">
            <div class="four wide column">
              <a href="javascript: void(0);" class="bns-btn--secondary" data-bns-dropmenu="close">戻る</a>
            </div>
            <div class="twelve wide column">
              <p class="bns-text--lg">検索方法を選ぶ</p>
            </div>
          </div>
        </div>
        <div class="bns-dropmenu__body">
          <div class="ui grid">
            <div class="doubling eight column row">
              <div class="column">
                <a href="#" class="bns-btn-icon--primary">
                  <span class="bns-btn-icon__area">
                    <i class="bns-icon-loupe--search"></i>
                  </span>
                  <span class="bns-btn-icon__text">市区町村から探す</span>
                </a>
              </div>
              <div class="column">
                <a href="#" class="bns-btn-icon--primary">
                  <span class="bns-btn-icon__area">
                    <i class="bns-icon-train"></i>
                  </span>
                  <span class="bns-btn-icon__text">沿線・駅から探す</span>
                </a>
              </div>
            </div>
          </div><!-- /.ui grid -->
        </div>
      </aside><!-- /.bns-dropmenu -->
      
    </nav>
  </header><!-- /.bns-header -->
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { Prop } from 'vue-property-decorator'

@Component
export default class VueHeader extends Vue {

  @Prop({ default: '' })
  public catchtext: string;

  public searchEnabled = false;

  public created(): void {
    if (this.$route.path === '/0001') this.searchEnabled = true;
    else                              this.searchEnabled = false;
  }

}
</script>
