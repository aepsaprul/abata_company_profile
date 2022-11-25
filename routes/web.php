<?php

use App\Http\Controllers\ComproController;
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

Route::get('/', [ComproController::class, 'index'])->name('compro');
Route::get('/tentang', [ComproController::class, 'tentang'])->name('compro.tentang');
Route::get('/kebijakan-perusahaan', [ComproController::class, 'privacy'])->name('compro.privacy');
Route::get('/syarat-dan-ketentuan', [ComproController::class, 'term'])->name('compro.term');
Route::post('/kontak/store', [ComproController::class, 'kontakStore'])->name('compro.kontak.store');
