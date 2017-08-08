<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('NON0001');
})->name('home');

Route::get('NON0002', function () {
  return view('NON0002');
})->name('city-search');

Route::get('NON0003', function () {
  return view('NON0003');
})->name('wayside');

Route::get('NON0004', function () {
  return view('NON0004');
})->name('NON0004');

Route::get('NON0005', function () {
  return view('NON0005');
})->name('NON0005');

Route::get('NON0006', function () {
  return view('NON0006');
})->name('search-result');

Route::get('NON0007', function () {
  return view('NON0007');
})->name('facility-detail');

Route::get('NON0008', function () {
  return view('NON0008');
})->name('agreement');

Route::get('NON0009', function () {
  return view('NON0009');
})->name('nursery-select-point');

Route::get('NON0010', function () {
  return view('NON0010');
})->name('service');

Route::get('NON0011', function () {
  return view('NON0011');
})->name('seelater');

Route::get('NON0012', function () {
  return view('NON0012');
})->name('recommendnews');

Route::get('NON0013', function () {
  return view('NON0013');
})->name('faq');

Route::get('NON0014', function () {
  return view('NON0014');
})->name('sitemap');

Route::get('NON0015', function () {
  return view('NON0015');
})->name('error');

Route::get('modules', function () {
  return view('modules');
})->name('modules');

Route::get('filelist', function () {
  return view('filelist');
})->name('filelist');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
