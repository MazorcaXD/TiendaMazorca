<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Mail\Emailcontact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', ProductoController::class);
Route::resource('/productos', ProductoController::class);
Route::resource('/clientes', ClienteController::class);
Route::resource('/pedidos', PedidoController::class);
Route::get('/pdf',[ClienteController::class, 'clientesPdf'])->name('clientes_pdf');
Route::get('/email', function() { return new EmailContact();});