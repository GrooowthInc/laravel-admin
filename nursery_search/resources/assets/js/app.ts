import Vue from 'vue';
import VueRouter from 'vue-router';
import Component from 'vue-class-component';
import $ from 'jquery';
// require('../semantic/dist/semantic.js');

declare function require(x: string): any;

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.use(VueRouter);

// Register the router hooks with thier names
Component.registerHooks(
  [
    'beforeRouteEnter',
    'beforeRouteUpdate',
    'beforeRouteLeave'
  ]
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Example from './components/Example.vue';
import Vue0001 from './components/Vue0001.vue';
import Vue0011 from './components/Vue0011.vue';
// import Example from './components/Example';
const router = new VueRouter({
    mode: 'history',
    routes: [
      { path: '/ex', component: Example },
      { path: '/cp', component: require('./components/Copy.vue') },
      { path: '/0001', component: Vue0001 },
      { path: '/0011', component: Vue0011 },
    ]
});

const app = new Vue({
  router,
  el: '#app'
});

import Accordion from './components/Accordion';
import AllCheck from './components/AllCheck';
import Dropmenu from './components/Dropmenu';
import HeightLine from './components/HeightLine';
import MapUrlScheme from './components/MapUrlScheme';
import Modal, { ModalDefault, ModalTooltip } from './components/Modal';
import Nav from './components/Nav';
import SearchMap from './components/SearchMap';
import SeeLater from './components/SeeLater';
import Slick, { Carousel } from './components/Slick';
import TextOverflow from './components/TextOverflow';




$(function(){
  // FAQのアコーディオン
  new Accordion();
  // NON0002 チェックボックスの一括解除
  new AllCheck();
  // 園生活におすすめ広告カルーセル
  new Carousel({
    target: '[data-bns-slick="target-recommend"]',
    setting: {
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true
    }
  });
  // 施設詳細カルーセル
  new Carousel({
    target: '[data-bns-slick="target"]',
    setting: {
      dots: true,
      arrows: true
    }
  });
  // ヘッダーのハンバーガーメニュー
  new Dropmenu();
  // 広告カルーセルの要素の高さ揃える
  new HeightLine({
    target: '[data-bns-height="carousel"]'
  });
  // GoogleMapに誘導するスキーム
  new MapUrlScheme();
  // モーダル
  new ModalDefault();
  // 初回だけツールチップが出てくるモーダル
  new ModalTooltip();
  // グロナビ追従
  new Nav();
  // GoogleMap
  new SearchMap();
  // あとで見る
  new SeeLater();
  // 三点リーダ―
  new TextOverflow();

});