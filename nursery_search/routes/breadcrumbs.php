<?php

// トップ
Breadcrumbs::register('home', function ($breadcrumbs) {
  $breadcrumbs->push('保活ナビトップ', route('home'));
});

// トップ > モジュール一覧
Breadcrumbs::register('modules', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('modules'));
});

// トップ > 市区町村検索 NON0002
Breadcrumbs::register('city-search', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('city-search'));
});

// トップ > 沿線選択 NON0003
Breadcrumbs::register('wayside', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('wayside'));
});

// トップ > 施設詳細 NON0007
Breadcrumbs::register('facility-detail', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('facility-detail'));
});

// トップ > ご利用規約 NON0008
Breadcrumbs::register('agreement', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('agreement'));
});

// トップ > 保育園選びのポイント NON0009
Breadcrumbs::register('nursery-select-point', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('nursery-select-point'));
});

// トップ > サービス概要 NON0010
Breadcrumbs::register('service', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('service'));
});

// トップ > あとで見る一覧 NON0011
Breadcrumbs::register('seelater', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('seelater'));
});

// トップ > おすすめ記事一覧 NON0012
Breadcrumbs::register('recommendnews', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('recommendnews'));
});

// トップ > FAQ NON0013
Breadcrumbs::register('faq', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('faq'));
});

// トップ > サイトマップ NON0014
Breadcrumbs::register('sitemap', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('sitemap'));
});

// トップ > エラーページ NON0015
Breadcrumbs::register('error', function ($breadcrumbs, $title) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push($title, route('error'));
});