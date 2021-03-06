<?php

//use App\Http\Controllers\ProductoController;

use App\Http\Livewire\ProductoEdit;
use App\Http\Livewire\ProductosTable;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/Producto',ProductosTable::class)->middleware('auth')-> name('producto');
Route::get('/Producto/{id}',ProductoEdit::class)->middleware('auth')-> where('id','[0-9]+')-> name('producto.edit');
Route::get('/Producto/New',ProductoEdit::class)->middleware('auth')-> name('producto.new');