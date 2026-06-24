<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'site.home');

Route::view('/design-system', 'design-system.index');