<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
  'as' => 'api',
    ], function (){
    Route::post('/access_token', 'App\Http\Controllers\API\AuthController@accessToken');
    Route::group(['middleware' => 'auth:api'],function (){
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::post('/logout', 'App\Http\Controllers\API\AuthController@logout');
    });

}
);
