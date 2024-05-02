<?php

use Illuminate\Support\Facades\Route;

Route::resource('/post', \App\Http\Controllers\PostController::class);