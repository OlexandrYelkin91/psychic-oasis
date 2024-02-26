<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/production', function () {
    return view('production');
})->name('production');

Route::get('/production/hiddendoor', "\App\Http\Controllers\PagesController@hiddendoor")->name('hiddendoor');

Route::get('/production/doorfittings', "\App\Http\Controllers\PagesController@doorfittings")->name('doorfittings');

Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/stock', function () {
    return view('stock');
})->name('stock');
Route::get('/articles', function () {
    return view('articles');
})->name('articles');
Route::get('/hitsale', function () {
    return view('hitsale');
})->name('hitsale');
Route::get('/basket', function () {
    return view('basket');
})->name('basket');
Route::get('/crm', function () {
    return view('crm');
})->name('crm');
Route::get('/basket/ordering', function () {
    return view('ordering');
})->name('ordering');
Route::get('/crm/allgoods/edit/{id}', function () {
    return view('moduls/inc/editgoodsblock');
})->name('edit_goods');

Route::post('/crm/add_pages', '\App\Http\Controllers\PagesController@submit')->name('add_pages');
Route::post('/crm/add_goods', '\App\Http\Controllers\MarchendiseController@AddGoods')->name('add_goods');
Route::post('/crm/add_brend', '\App\Http\Controllers\MarchendiseController@AddBrends')->name('add_brend');
Route::post('/add_besket', '\App\Http\Controllers\BasketController@addBasketFitting')->name('add_besket');
Route::post('/add_besketHidendoors', '\App\Http\Controllers\BasketController@addBasketHidenDoors')->name('add_besketHidendoors');

Route::get('/production/{parent}/{link}', '\App\Http\Controllers\PagesController@linkTwo')->name('link-two_pages');

Route::get('/production/hiddendoor/{parent}/{link}', '\App\Http\Controllers\PagesController@hiddendoor_page')->name('hiddendoor_pages');
Route::get('/production/doorfittings/{parent}/{link}/{brend}/', '\App\Http\Controllers\PagesController@doorfittings_brend_pages')->name('doorfittings_brend_pages');
Route::get('/production/doorfittings/{parent}/{link}', '\App\Http\Controllers\PagesController@doorfittings_pages')->name('doorfittings_pages');

Route::get('/production/doorfittings/handles/{link}/{brend}/{id}', '\App\Http\Controllers\PagesController@product_Handle_pages')->name('product_Handle_pages');
Route::get('/production/doorfittings/{link}/{brend}/{id}', '\App\Http\Controllers\PagesController@product_pages')->name('product_pages');

Route::get('/cheng_besket/{todos}/{id}/', '\App\Http\Controllers\BasketController@chengBasketFitting')->name('cheng_besket');
Route::get('/check_user', '\App\Http\Controllers\UserController@getIdtolocal')->name('check_user');

Route::post('/basket/ordering/formalized',  '\App\Http\Controllers\BasketController@formalized' )->name('formalized');
Route::post('/basket/ordering/works',  '\App\Http\Controllers\BasketController@works' )->name('works');
Route::get('/crm/allgoods/delete/{id}', '\App\Http\Controllers\MarchendiseController@DeleteMarchendase')->name('delete_marchendase');
Route::post('/crm/{id}/edit', '\App\Http\Controllers\MarchendiseController@EditMarchendase')->name('edit_marchendase');
