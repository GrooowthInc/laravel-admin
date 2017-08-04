
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
  el: '#dashboard'
});

import Accordion from './components/Accordion';
import Dropmenu from './components/Dropmenu';
import HeightLine from './components/HeightLine';
import Nav from './components/Nav';
import { Slick, Carousel } from './components/Slick';
import TextOverflow from './components/TextOverflow';

$(function(){
  // FAQのアコーディオン
  new Accordion();

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