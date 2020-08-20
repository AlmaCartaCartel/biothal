<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::group(['prefix' => 'login'], function(){
        Route::get('/', 'LoginController@index')
            ->name('admin.login.page');

        Route::post('/post', 'LoginController@login')
            ->name('admin.login.post');

        Route::get('logout', 'LoginController@logout')
            ->name('admin.logout');
    });

    Route::group(['middleware' => 'auth'], function (){
        Route::get('dashboard', 'IndexController@index')
            ->name('admin.dashboard');
    });
});
