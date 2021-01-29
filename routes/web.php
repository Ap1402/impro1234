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

Route::get('rastreo', 'trackerController@index');

 Route::get('test', 'trackerController@test');
 Route::get('/api/tracking/statuses', 'trackerController@getTrackingStatuses');
 Route::get('/api/tracking/{trackingNumber}', 'trackerController@getTrackingInfo');
