<template>
  <div class="bns-layout--negative">
    <div class="bns-block-recommend">
      <a href="#" class="bns-block-recommend__item">
        <div class="bns-block-recommend__image">
          <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
        </div>
        <div class="bns-block-recommend__body">
          <p class="bns-block-recommend__date">2017.08.01</p>
          <p class="bns-block-recommend__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </a>
      <a href="#" class="bns-block-recommend__item">
        <div class="bns-block-recommend__image">
          <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
        </div>
        <div class="bns-block-recommend__body">
          <p class="bns-block-recommend__date">2017.12.17</p>
          <p class="bns-block-recommend__title">年末年始お休みのお知らせ</p>
        </div>
      </a>
      <a href="#" class="bns-block-recommend__item">
        <div class="bns-block-recommend__image">
          <img src="https://dummyimage.com/100x100/000/808080.png&text=dummy" alt="" />
        </div>
        <div class="bns-block-recommend__body">
          <p class="bns-block-recommend__date">2018.01.01</p>
          <p class="bns-block-recommend__title">明けましておめでとうございます。今年も宜しくお願いいたします。</p>
        </div>
      </a>
    </div>
  </div><!-- /.bns-layout--negative -->
<!-- TODO NON0012 に記述
  @if(!Request::is('NON0012'))
    <div class="bns-layout">
      <p class="bns-text--right">
        <a href="#" class="bns-text-link--area">記事一覧へ<i class="bns-icon-carret--sm"></i></a>
      </p>
    </div><!-- /.bns-layout
  @endif
-->
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component
export default class RecommendNews extends Vue {
}
</script>
