<?php

Route::get('/', 'ItemController@index');
Route::get('/add/beacon', 'BeaconController@add');
Route::get('/add/gateway', 'GatewayController@add');
Route::get('/add/other', 'OtherController@add');
Route::get('/add/scan', 'ItemController@add');
Route::get('/list', 'ItemController@viewList');

Route::post('/store/beacons', 'BeaconController@store');
Route::post('/store/gateways', 'GatewayController@store');
Route::post('/store/others', 'OtherController@store');
Route::post('/store/scan', 'ItemController@store');

Route::post('/store/beacons/{id}', 'BeaconController@replace');
Route::post('/store/gateways/{id}', 'GatewayController@replace');
Route::post('/store/others/{id}', 'OtherController@replace');

Route::get('/delete/beacons/{id}', 'BeaconController@delete');
Route::get('/delete/gateways/{id}', 'GatewayController@delete');
Route::get('/delete/others/{id}', 'OtherController@delete');

Route::get('/edit/beacons/{id}', 'BeaconController@edit');
Route::get('/edit/gateways/{id}', 'GatewayController@edit');
Route::get('/edit/others/{id}', 'OtherController@edit');

Route::get('/download-csv/beacon', 'BeaconController@download');
Route::get('/download-csv/gateway', 'GatewayController@download');
Route::get('/download-csv/other', 'OtherController@download');
Route::get('/download-csv', 'ItemController@download');
Route::get('/send-csv', 'ItemController@sendMail');
