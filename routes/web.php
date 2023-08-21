<?php

use App\Http\Controllers\Admin\{SuporteController};
use App\Http\Controllers\Site\SiteController;
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

Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte.index');
Route::get('/suporte/create', [SuporteController::class, 'create'])->name('suporte.create');
Route::post('/suporte/create', [SuporteController::class, 'store'])->name('suporte.store');
Route::get('/suporte/{id}', [SuporteController::class, 'show'])->name('suporte.show');

Route::get("/contato", [SiteController::class, "index"]);

Route::get('/', function () {
    return view('welcome');
});
