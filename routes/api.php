<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});


Route::get('/employees', 'api\HomeController@getEmployees');
Route::get('/comments', 'api\HomeController@getReviews');
Route::post('/comments', 'api\HomeController@saveReview');
Route::get('/services', 'api\HomeController@getServices');
Route::get('/service', 'api\HomeController@getService');
Route::get('/appointment/store', 'api\HomeController@store');
