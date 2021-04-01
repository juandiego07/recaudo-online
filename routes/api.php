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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', 'App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');
Route::post('confirmation/store', 'App\Http\Controllers\ConfirmationController@store');

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::post('user', 'App\Http\Controllers\UserController@getAuthenticatedUser');
    Route::get('log/index', 'App\Http\Controllers\LogController@index');
    Route::post('log/store', 'App\Http\Controllers\LogController@store');
    Route::post('invoice/show', 'App\Http\Controllers\InvoiceController@show');
    Route::post('invoice/store', 'App\Http\Controllers\InvoiceController@store');

});