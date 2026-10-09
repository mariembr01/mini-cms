php artisan route:list<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
