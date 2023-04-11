<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Home'], function() {
  Route::get('/', 'IndexController')->name('home.index');
});

Route::group(['namespace' => 'Post'], function() {
  Route::get('posts/', 'IndexController')->name('post.index');
  Route::get('posts/create', 'CreateController')->name('post.create');
  Route::get('posts/restore', 'TrashController')->name('post.trash');
  Route::post('posts/', 'StoreController')->name('post.store');
  Route::get('posts/{post}', 'ShowController')->name('post.show');
  Route::delete('posts/{post}', 'DeleteController')->name('post.delete');
  Route::get('posts/{post}/restore', 'RestoreController')->name('post.restore');
  Route::get('posts/{post}/edit', 'EditController')->name('post.edit');
  Route::patch('posts/{post}', 'UpdateController')->name('post.update');
});
