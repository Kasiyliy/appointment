<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});
Route::get('/services', 'api\HomeController@getServices');
Route::get('/employees', 'api\HomeController@getEmployees');
Route::post('/appointment/store', 'api\HomeController@store');