<?php
/*
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\IndexController;
*/

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('index');
   
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    //  Admin home
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
    });
    //  End Admin home

    //  Posts
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');

   });
    //  End posts

    //  Categories
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
         Route::get('/', 'IndexController')->name('admin.category.index');
         Route::get('/create', 'CreateController')->name('admin.category.create');
         Route::post('/', 'StoreController')->name('admin.category.store');
         Route::get('/{category}', 'ShowController')->name('admin.category.show');
         Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
         Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
         Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');

    });
    //  end Categories

    //  Tags
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
   });
   //  end Tags
});

Auth::routes();
