<?php

use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', HomeControler::class);

Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'adminCreate' ])->name('admin.create');
Route::get('/admin/edit', [AdminController::class, 'adminEdit' ])->name('admin.edit');
Route::get('/admin/update', [AdminController::class, 'adminUpdate' ])->name('admin.update');
Route::get('/admin/destroy', [AdminController::class, 'adminDestroy' ])->name('admin.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






require __DIR__.'/auth.php';
