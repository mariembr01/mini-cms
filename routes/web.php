php artisan route:list<?php

use Illuminate\Support\Facades\Route;

Route::get('/a-propos', function () {
    return view('a-propos', [
        'auteur' => 'Prenom Nom',
        'groupe' => 'MDW32',
    ]);
});
