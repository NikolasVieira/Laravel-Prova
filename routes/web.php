<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TributacaoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/produto', ProdutoController::class);
Route::resource('/tributacao', TributacaoController::class);
Route::resource('/fornecedor', FornecedorController::class);

