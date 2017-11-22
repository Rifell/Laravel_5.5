<?php

Route::get('/services', ['uses'=>'ServiceController@execute', 'as'=>'services']);
Route::match(['get','post'], '/services/add', ['uses'=>'ServiceAddController@execute', 'as'=>'servicesAdd']);
Route::match(['get','post','delete'], '/services/edit/{service}', ['uses'=>'ServiceEditController@execute', 'as'=>'servicesEdit']);