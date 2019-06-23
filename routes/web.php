<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.page.homepage');
});
Route::get('/404error',function (){
    return view('admin.errors.error404');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about-us', 'AboutController@index')->name('about');
Route::get('/contact-us', 'ContactController@index')->name('contact');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('category-list', function () {
		return view('pages.table_list');
	})->name('table');

    Route::resource('admin/category','CategoryController');
    Route::resource('admin/content','ContentController');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});


Route::group(['middleware' => 'auth'], function () {

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware'=>'IsAdmin'], function (){

//    Route::resource('admin/users', 'AdminUserController');
    Route::resource('user', 'UserController');

});


