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
