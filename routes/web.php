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
    return view('index');
});

Route::get('/dangnhap', function () {
    return view('dangnhap');
});

Route::get('/lienhe', function () {
    return view('lienhe');
});

Route::get('/gioithieu', function () {
    return view('gioithieu');
});

Route::get('/dangkygiasu', function () {
    return view('dangkygiasu');
});

Route::get('/dangbaitimgiasu', function () {
    return view('dangbaitimgiasu');
});

Route::get('/baidang', function () {
    return view('baidang');
});

Route::get('/giasu', function () {
    return view('giasu');
});

