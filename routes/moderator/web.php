<?php

use Illuminate\Support\Facades\Route;


Route::prefix('moderator')
->name('moderator.')
->middleware(['auth', 'role:user'])
->group(
    function () {

        Route::get('/dashboard', 'HomeController@index')->name('home');

        Route::resource('projects', 'ProjectController')->only(['index']);
        Route::resource('apartments', 'ApartmentController')->only(['index']);
        Route::post('/check/{id}', 'ApartmentController@check')->name('apartments.check');
        Route::get('/floors/index/{id}', 'FloorController@index')->name('floors.index');
        Route::post('/floors/store', 'FloorController@store')->name('floors.store');
        Route::get('/floors/show/{id}', 'FloorController@show')->name('floors.show');
        Route::post('/floors/update', 'FloorController@update')->name('floors.update');
        Route::get('/floors/destroy/{id}', 'FloorController@destroy')->name('floors.destroy');

        Route::get('/settings/changePassword', 'SettingController@changePassword')->name('setting.changePassword');
        Route::post('/settings/changePass', 'SettingController@changePass')->name('setting.changePass');



    }
);
