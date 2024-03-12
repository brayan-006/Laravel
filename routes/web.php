<?php

use Illuminate\Support\Facades\Route;

Route::view('/index', 'index');

Route::view('/editar', 'editar');

Route::view('/listar-usuario', 'listar-usuario');

Route::view('/novo-usuario', 'novo-usuario');

Route::view('/', 'index');
