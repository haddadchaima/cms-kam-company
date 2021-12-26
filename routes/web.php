<?php

use Illuminate\Support\Facades\Route;

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

//dashboard and logout route
Route::get('admin', 'AdminLoginController@index')->name('login');
Route::post('admin', 'AdminLoginController@postLogin')->name('saveadminlogin');


Route::middleware('auth')->group(function(){
Route::get('admin/home', 'admin\AdminController@dashboard')->name('home');
Route::get('admin/homes', 'admin\AdminController@dashboards')->name('homes');
Route::get('admin/home/search', 'admin\AdminController@getAutocompleteData')->name('home.search');
Route::get('admin/home/search/details/{id}', 'admin\AdminController@detailsSearchData')->name('details.search');
Route::patch('admin/languages/update', 'admin\AdminController@update_languages')->name('admin.update.languages');
Route::patch('admin/dashboard', 'admin\AdminController@update_dashboard')->name('admin.update.dashboard');

/***** Theme *****/
Route::get('admin/theme/{idprojet}', 'admin\ThemesController@index');
Route::get('admin/gotoaddtheme', 'admin\ThemesController@redirectToAddTheme');
Route::post('admin/addtheme', 'admin\ThemesController@addTheme')->name('addtheme');

/***** Component ****/
Route::get('admin/listcomponent', 'admin\ComponentController@listComp');
Route::get('admin/gotoaddcomponent', 'admin\ComponentController@redirectToAddComponent');
Route::post('admin/addcomponent', 'admin\ComponentController@addComponent')->name('addcomponent');

/*** Media  *****/
Route::get('admin/media', 'admin\MediaController@index');
Route::post('admin/addmedia', 'admin\MediaController@uploadMedia')->name('uploadmedia');
Route::delete('admin/deletemedia/{id}', 'admin\MediaController@deleteMedia');

/**** Project ***/
Route::get('admin/myproject', 'admin\ProjectController@index');
Route::post('admin/addproject', 'admin\ProjectController@createProject')->name('createProject');

/***** Logout */
Route::post('admin/logout', 'AdminLoginController@logout')->name('logout');
});
