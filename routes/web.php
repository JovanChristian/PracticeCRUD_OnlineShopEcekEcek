<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients;

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('clients',Clients::class);
