<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'site.home');
Route::view('/design-system', 'design-system.index');

Route::view('/veiculos', 'site.vehicles');
Route::view('/veiculo/bmw-320i-m-sport-2021', 'site.vehicle-show');

Route::view('/vendedor/luis-santos', 'site.seller-profile');

Route::view('/login', 'site.auth.login');
Route::view('/cadastro', 'site.auth.register');
Route::view('/esqueci-senha', 'site.auth.forgot-password');

Route::view('/dashboard', 'dashboard.index');

Route::view('/meus-anuncios', 'dashboard.my-ads');
Route::view('/novo-anuncio', 'dashboard.create-ad');