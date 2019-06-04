<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

//Route::group(['middleware' => 'cors'], function () {
    Route::get('/employees', 'api\HomeController@getEmployees');
    Route::get('/comments', 'api\HomeController@getReviews');
    Route::get('/comments/store', 'api\HomeController@saveReview');
    Route::get('/services', 'api\HomeController@getServices');
    Route::get('/services/all', 'api\HomeController@getAllServices');
    Route::get('/service', 'api\HomeController@getService');
    Route::get('/appointment/store', 'api\HomeController@store');
//});

