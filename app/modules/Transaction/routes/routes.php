<?php

Route::group(['prefix' => 'payments'], function(){
   Route::get('/', ['as' => 'payments.index', 'uses' => 'Transaction\Controllers\PaymentsController@getIndex']);
});