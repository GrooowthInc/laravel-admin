import Vue from 'vue';
import VueRouter from 'vue-router';
import $ from 'jquery';

declare function require(x: string): any;

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [
      { path: '/ex', component: require('./components/Example.vue') },
      { path: '/cp', component: require('./components/Copy.vue') },
    ]
});

const app = new Vue({
  router,
  el: '#dashboard'
});

import Dropmenu from './components/Dropmenu';
import HeightLine from './components/HeightLine';
import Nav from './components/Nav';
import Slick, { Carousel } from './components/Slick';
import TextOverflow from './components/TextOverflow';

$(function(){
  // NON0001 園生活におすすめ広告カルーセル
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

  new HeightLine({
    target: '[data-bns-height="carousel"]'
  });

  new Nav();
  new TextOverflow();

});