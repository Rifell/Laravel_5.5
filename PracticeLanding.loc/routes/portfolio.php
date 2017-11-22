<?php

Route::get('/portfolio', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
Route::match(['get','post'], '/portfolio/add', ['uses'=>'PortfolioAddController@execute', 'as'=>'portfolioAdd']);
Route::match(['get','post','delete'], '/portfolio/edit/{page}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit']);