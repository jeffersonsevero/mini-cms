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

//rotas site
Route::get('/', 'Site\HomeController@index');



//rotas painel
Route::prefix('painel')->group(function(){
    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::get('login','Admin\Auth\LoginController@index' )->name('login');
    Route::post("login", "Admin\Auth\LoginController@authenticate");

    Route::get("register", "Admin\Auth\RegisterController@index")->name("register");
    Route::post("register", "Admin\Auth\RegisterController@register");

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');


    //rotas de usuários
    Route::resource('users', 'Admin\UserController');
    Route::resource('pages', 'Admin\PageController');


    Route::get('profile', 'Admin\ProfileController@index')->name('profile');
    Route::put("profilesave", "Admin\ProfileController@save")->name('profile.save');


    Route::get('settings','Admin\SettingsController@index')->name('settings');
    Route::put('settingssave', 'Admin\SettingsController@save')->name('settings.save');



});

Route::fallback('Site\PageController@index');
