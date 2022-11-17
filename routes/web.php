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
Route::post('/admin/create', [AdminController::class, 'adminSave' ])->name('admin.save');
Route::get('/admin/edit/{work}', [AdminController::class, 'adminEdit' ])->name('admin.edit');
Route::put('/admin/update/{work}', [AdminController::class, 'adminUpdate' ])->name('admin.update');
Route::delete('/admin/delete/{work}', [AdminController::class, 'adminDelete' ])->name('admin.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






require __DIR__.'/auth.php';
