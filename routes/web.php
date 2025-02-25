<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Роут главной страницы - home
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\BlogCategory', 'prefix' => 'categories'], function () {
    Route::get('/'          , 'IndexController')->name('category.index');
    Route::get('/{category}', 'ShowController') ->name('category.show');
});

// Роуты блога
Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::get('/'      , 'IndexController')   ->name('blog.post.index');
    Route::get('/{post}', 'ShowController')    ->name('blog.post.show');

    // blog/1/comment --- nested route
    //Другой вариант создать для комментариев полностью отдельный неймспейс
    Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function() {
        Route::post('/', 'StoreController')->name('blog.post.comment.store');
    });

    Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function() {
        Route::post('/', 'StoreController')->name('blog.post.like.store');
    });


});

// Роуты постов
// Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
//     Route::get('/post');
// });

// Роуты админ панели 'auth', 'admin', 'verified'
Route::middleware([])->group(function () {
    Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function() {
        Route::group(['namespace' => 'Main'], function () {
            Route::get('/', 'IndexController')->name('admin.main.index');
        });

        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
            Route::get   ('/'                 , 'IndexController') ->name('admin.category.index');
            Route::get   ('/create'           , 'CreateController')->name('admin.category.create');
            Route::post  ('/'                 , 'StoreController') ->name('admin.category.store');
            Route::get   ('/{category}'       , 'ShowController')  ->name('admin.category.show');
            Route::get   ('/{category}/edit'  , 'EditController')  ->name('admin.category.edit');
            Route::patch ('/{category}/update', 'UpdateController')->name('admin.category.update');
            Route::delete('/{category}/delete', 'DeleteController')->name('admin.category.delete');
        });

        Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
            Route::get   ('/'            , 'IndexController') ->name('admin.tag.index');
            Route::get   ('/create'      , 'CreateController')->name('admin.tag.create');
            Route::post  ('/'            , 'StoreController') ->name('admin.tag.store');
            Route::get   ('/{tag}'       , 'ShowController')  ->name('admin.tag.show');
            Route::get   ('/{tag}/edit'  , 'EditController')  ->name('admin.tag.edit');
            Route::patch ('/{tag}/update', 'UpdateController')->name('admin.tag.update');
            Route::delete('/{tag}/delete', 'DeleteController')->name('admin.tag.delete');
        });

        Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
            Route::get   ('/'             , 'IndexController') ->name('admin.post.index');
            Route::get   ('/create'       , 'CreateController')->name('admin.post.create');
            Route::post  ('/'             , 'StoreController') ->name('admin.post.store');
            Route::get   ('/{post}'       , 'ShowController')  ->name('admin.post.show');
            Route::get   ('/{post}/edit'  , 'EditController')  ->name('admin.post.edit');
            Route::patch ('/{post}/update', 'UpdateController')->name('admin.post.update');
            Route::delete('/{post}/delete', 'DeleteController')->name('admin.post.delete');
        });

        Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
            Route::get   ('/'             , 'IndexController') ->name('admin.user.index');
            Route::get   ('/create'       , 'CreateController')->name('admin.user.create');
            Route::post  ('/'             , 'StoreController') ->name('admin.user.store');
            Route::get   ('/{user}'       , 'ShowController')  ->name('admin.user.show');
            Route::get   ('/{user}/edit'  , 'EditController')  ->name('admin.user.edit');
            Route::patch ('/{user}/update', 'UpdateController')->name('admin.user.update');
            Route::delete('/{user}/delete', 'DeleteController')->name('admin.user.delete');
        });
    });
});

// Роуты админ панели пользователей не обладающий админ правами
Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal'], function () {
        Route::group(['namespace' => 'Main'], function () {
            Route::get('/', 'IndexController')->name('personal.main.index');
        });

        Route::group(['namespace' => 'Liked'], function () {
            Route::get   ('/liked' , 'IndexController') ->name('personal.liked.index');   
            Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
        });

        Route::group(['namespace' => 'Comment'], function () {
            Route::get   ('/comment'         , 'IndexController')  ->name('personal.comment.index');
            Route::get   ('/{comment}/edit'  , 'EditController')   ->name('personal.comment.edit');
            Route::patch ('/{comment}'       , 'UpdateController') ->name('personal.comment.update');
            Route::delete('/{comment}/delete', 'DeleteController') ->name('personal.comment.delete');
        });
    });
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
