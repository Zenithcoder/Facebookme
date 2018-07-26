<?php


Route::get('/facebook', function(){
	return FBM::getCreds();
	//return "Hello, From";
});

Route::get('/face', 'zenithcoder\facebook\Controllers\FacebookController@index');