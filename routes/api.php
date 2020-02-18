<?php

// use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'Auth\ApiAuthController@login');
Route::post('register', 'Auth\ApiAuthController@register');
Route::post('logout', 'Auth\ApiAuthController@logout');
Route::group(['middleware' => 'auth:api'], function(){
  Route::get('me', 'Auth\ApiAuthController@me');
  Route::apiResource('folders', 'FoldersController');
  Route::apiResource('files', 'FilesController');
  Route::apiResource('users', 'UsersController');
	Route::apiResource('snippets', 'SnippetsController');
	Route::apiResource('tasks', 'TasksController');
});
