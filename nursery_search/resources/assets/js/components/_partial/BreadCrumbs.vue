<template>
  <div class="bns-breadcrumb">
    <ol class="bns-breadcrumb-list">
      <li v-for="(route, index) in breadCrumbs" class="bns-breadcrumb-list__item" :key="route.name">
        <router-link :to="route" v-if="index < breadCrumbs.length - 1" href=" $breadcrumb->url " class="bns-breadcrumb-list__link"> {{ route.display }} </router-link>
        <template v-if="index === breadCrumbs.length - 1">{{ route.display }}</template>
      </li>
    </ol>
  </div><!-- /.end bns-breadcrumb -->
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import RouteData from '../../classes/data/RouteData';

@Component
export default class BreadCrumbs extends Vue {

  public breadCrumbs:  {
    path:      string,
    component: object,
    name:      string,
    display:   string
   }[];

  public created(): void {
    console.log('BreadCrumbs', this.$route);

    switch(this.$route.name) {
      // トップ NON0001
      case RouteData.ROUTES.top.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top
        ];
        break;
      // トップ > 市区町村検索 NON0002
      case RouteData.ROUTES.citySearch.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.citySearch
        ];
        break;
      // トップ > 沿線選択 NON0003
      case RouteData.ROUTES.wayside.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.wayside
        ];
        break;
      // トップ > 地図検索 NON0005
      case RouteData.ROUTES.searchMap.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.searchMap
        ];
        break;
      // トップ > 検索結果一覧 NON0006
      case RouteData.ROUTES.searchResult.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.searchResult
        ];
        break;
      // トップ > 施設詳細 NON0007
      case RouteData.ROUTES.facilityDetail.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.facilityDetail
        ];
        break;
      // トップ > ご利用規約 NON0008
      case RouteData.ROUTES.agreement.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.agreement
        ];
        break;
      // トップ > 保育園選びのポイント NON0009
      case RouteData.ROUTES.nurserySelectPoint.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.nurserySelectPoint
        ];
        break;
      // トップ > サービス概要 NON0010
      case RouteData.ROUTES.service.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.service
        ];
        break;
      // トップ > あとで見る一覧 NON0011
      case RouteData.ROUTES.seeLater.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.seeLater
        ];
        break;
      // トップ > おすすめ記事一覧 NON0012
      case RouteData.ROUTES.recommendNews.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.recommendNews
        ];
        break;
      // トップ > FAQ NON0013
      case RouteData.ROUTES.faq.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.faq
        ];
        break;
      // トップ > サイトマップ NON0014
      case RouteData.ROUTES.siteMap.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.siteMap
        ];
        break;
      // トップ > エラーページ NON0015
      case RouteData.ROUTES.error.name:
        this.breadCrumbs = [
          RouteData.ROUTES.top,
          RouteData.ROUTES.error
        ];
        break;
    }
    console.log('BreadCrumbs', this.$route, this.breadCrumbs);
  }
}
</script>
