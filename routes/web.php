<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/sobre-nos', [PrincipalController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [PrincipalController::class, 'contato'])->name('site.contato');
Route::get('/termos', [PrincipalController::class, 'termos'])->name('site.termos');
Route::get('/ajuda', [PrincipalController::class, 'ajuda'])->name('site.ajuda');
Route::get('/imagem', [PrincipalController::class, 'imagem'])->name('site.imagem');