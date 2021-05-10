<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookControler;
Route::resource('/', BookControler::class);