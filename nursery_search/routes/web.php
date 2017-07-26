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
});
Route::get('NON0002', function () {
  return view('NON0002');
});
Route::get('NON0003', function () {
  return view('NON0003');
});
Route::get('NON0004', function () {
  return view('NON0004');
});
Route::get('NON0005', function () {
  return view('NON0005');
});
Route::get('modules', function () {
  return view('modules');
});
Route::get('filelist', function () {
  return view('filelist');
});