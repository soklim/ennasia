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

//Route::get('/', function () {
//    return view('front.page.homepage');
//});
Route::get('/', 'HomePageController@index');
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
    Route::resource('admin/sys_static','SysStaticController');
    Route::resource('admin/real_estate','Real_EstateController');

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

Route::post('upload_image','CkeditorController@uploadImage')->name('upload');

Route::get('/news-detail/{id}', 'HomePageController@newsdetail');

Route::get('/category/{id}', 'HomePageController@category');
Route::get('/real_estate', 'HomePageController@real_estate');
Route::get('/real_estate/{id}', 'HomePageController@real_estate_detail');


