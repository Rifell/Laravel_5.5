<?php

Route::get('/admin/pages', ['uses'=>'PagesController@execute', 'as'=>'pages'])->middleware('auth');

Route::match(['get','post'], '/admin/pages/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd'])->middleware('auth');

Route::match(['get','post','delete'], '/admin/pages/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit'])->middleware('auth');
