<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dump(config('database.connections.mysql.database'));

    return view('welcome');
});
