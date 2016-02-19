<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Crona\DashboardController@getIndex');
});
