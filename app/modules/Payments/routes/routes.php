<?php

Route::group(['prefix' => 'payments'], function(){
   Route::get('/', ['as' => 'payments.index', 'uses' => 'Payments\Controllers\PaymentsController@getIndex']);
});