<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
// falta passar o id de funcionario para editar
Route::get('/funcionarios/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}/delete', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');


Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
// falta passar o id de produto para editar
Route::get('/produtos/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}/delete', [ProdutoController::class, 'destroy'])->name('produtos.destroy');


Route::get('/movimentacoes', [MovimentacaoController::class, 'index'])->name('movimentacoes.index');


Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');


Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::get('/categorias', [TipoProdutoController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [TipoProdutoController::class, 'store'])->name('categorias.store');
Route::get('/categorias/create', [TipoProdutoController::class, 'create'])->name('categorias.create');
Route::put('/categorias/{id}', [TipoProdutoController::class, 'update'])->name('categorias.update');
// falta passar o id do tipo produto para editar
Route::get('/categorias/edit', [TipoProdutoController::class, 'edit'])->name('categorias.edit');


Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::put('/departamentos/{id}', [DepartamentoController::class, 'update'])->name('departamentos.update');
// falta passar o id do departamento para editar
Route::get('/departamentos/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
// falta passar o id do usuário para editar
Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
