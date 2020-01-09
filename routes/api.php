<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'Auth\ApiAuthController@login');
Route::post('register', 'Auth\ApiAuthController@register');
Route::post('logout', 'Auth\ApiAuthController@logout');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'Auth\ApiAuthController@details');
});
