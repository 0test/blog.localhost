<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('index');
});

//  user profile
Route::group(['namespace' => 'Profile', 'prefix' => 'profile','middleware' => ['auth']], function () {
    Route::group(['namespace' => 'Main', 'prefix' => '' ], function () {
        Route::get('/', 'IndexController')->name('profile.main.index');
    });
    Route::group(['namespace' => 'Likes', 'prefix'=>'likes'], function () {
        //Route::get('/create', 'CreateController')->name('profile.likes.create');
        Route::get('/', 'IndexController')->name('profile.likes.index');
        Route::post('/{post}', 'DeleteController')->name('profile.likes.delete');

    });

    Route::group(['namespace' => 'Comments', 'prefix' => 'comments'], function () {
        //Route::get('/create', 'CreateController')->name('admin.post.create');
        //Route::post('/', 'StoreController')->name('profile.comment.store');
        Route::get('/', 'IndexController')->name('profile.comments.index');
        Route::get('/{comment}/edit', 'EditController')->name('profile.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('profile.comment.update');
        Route::post('/{comment}', 'DeleteController')->name('profile.comment.delete');

    });


});
//  end user profile

//  site content
Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
    
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show')->where('post','[0-9]+');
    Route::get('/random', 'RandomPostController')->name('post.random');
});
Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/{category}', 'ShowController')->name('category.show');
});
Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
    Route::get('/', 'IndexController')->name('tags.index');

    Route::get('/{tag}', 'ShowController')->name('tag.show');
});

//  end site content 

//  Odmen actions
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth','admin','verified']], function () {
    //  Admin home
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
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

    //  Users
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
   });
   //  end Users
});
//  end Odmen actions
Auth::routes(['verify' => true]);
