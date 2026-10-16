<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;

abstract class Controller
{
    //

}
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

