<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('/', 'LoginController@index')
        ->name('admin.login.page');

    Route::group(['prefix' => 'login'], function(){
        Route::post('/post', 'LoginController@login')
            ->name('admin.login.post');

        Route::get('logout', 'LoginController@logout')
            ->name('admin.logout');
    });

    Route::group(['middleware' => 'auth'], function (){
        Route::get('dashboard', 'IndexController@index')
            ->name('admin.dashboard');

        Route::group(['prefix' => 'panel'], function (){

            Route::get('/', 'StatePanelController@index')
                ->name('admin.statePanel.page');
        });

        Route::group(['prefix' => 'categories'], function(){

            Route::get('/', 'CategoriesController@index')
                ->name('admin.categories.page');
        });

        Route::group(['prefix'=>'products'], function (){

            Route::get('/', 'ProductsController@index')
                ->name('admin.products.page');
        });
    });
});
