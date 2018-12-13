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
Route::get('/', [
    'as' => 'index',
    'uses' => 'Pages\DashboardController@Index'
]);

// Route::get('/','Pages/DashboardController@Index');

Route::get('/log-in', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@getLogin'
]);

Route::post('/login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login',
]);

Route::post('log-out', [
    'as' => 'logout',
    'Auth\LogoutController@postLogout'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'Pages\ContactController@getContact'
]);

Route::get('/introduce', [
    'as' => 'introduce',
    'uses' => 'Pages\IntroduceController@getIntroduction'
]);

Route::resource('post', 'Pages\PostController');

Route::resource('tutor', 'Pages\TutorController');



Route::get('/dangkygiasu', function () {
    return view('dangkygiasu');
});
// Route::get('controller', GiaSuDangBai@dangBai);

// Route::get('/dangkygiasu', function () {
//     return view('dangkygiasu');
// });

// Route::get('/dangbaitimgiasu', function () {
//     return view('dangbaitimgiasu');
// });

// Route::get('/baidang', function () {
//     return view('baidang');
// });

// Route::get('/giasu', function () {
//     return view('giasu');
// });
