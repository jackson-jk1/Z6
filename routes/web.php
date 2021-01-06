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


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function(){
    Auth::routes();
    Route::group([
        'name'=> 'Admin\\',
        'as' => 'admin.',
        'middleware' => ['auth','can:admin']
    ], function (){
        Route::resource('users','\App\Http\Controllers\Admin\UserController');

    });
});


Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');

