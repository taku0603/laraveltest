<?php

use Illuminate\Support\Facades\Route;

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

// ここでルーティングする。Route::get(アドレス, 関数など);
// テンプレートはresources/viewsに記載する
Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/google', function () {
    return view('google');
});
//Route::get('/hello', function () {
//    return view('hello');
//});
// Controllerで引数を渡さないと反映されない
//Route::get('/hello/{msg}', function ($msg) {
//    return view('hello');
//});

//Route::get('/hello/{msg}', function ($msg) {
//    $html = <<<EOF
//<!DOCTYPE html>
//<html lang="ja">
//<head>
//<meta charset="utf-8">
//<title>Hello</title>
//</head>
//<body>
//
//<h1>Hello.blade.php</h1>
//<p>{$msg}</p>
//
//</body>
//</html>
//EOF;
//    return $html;
//});
//
//Route::get('/hello', 'HelloController@index');
Route::get('/hello','App\Http\Controllers\HelloController@index');
Route::get('/hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('/hello/result', 'App\Http\Controllers\HelloController@result');
Route::get('/hello/newline', 'App\Http\Controllers\HelloController@newline');

// テンプレートを組み合わせる「継承」と「セクション」
Route::get('/star', 'App\Http\Controllers\StarController@index');
Route::get('/star/sun', 'App\Http\Controllers\StarController@sun');
Route::get('/star/moon', 'App\Http\Controllers\StarController@moon');

// バリデーションを試す
// シングルページでのチェックなので同一uri
Route::get('/board', 'App\Http\Controllers\BoardController@index');
Route::post('/board', 'App\Http\Controllers\BoardController@add');

// bbs
//Route::get('/bbs', 'App\Http\Controllers\PostsController@index');
Route::resource('/bbs', 'App\Http\Controllers\PostsController', ['only' => ['index', 'show']]);

// todo こんな書き方もできる
//use App\Http\Controllers\HelloController;
//Route::post('newline', [HelloController::class, 'newline']);
