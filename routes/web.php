<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TheLoaiController;
use App\Http\Controllers\TinTucController;
use Brian2694\Toastr\Facades\Toastr;

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

Route::get('/', function () {
    Toastr::success('Has been add successfully :)', 'Success');
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ======= TheLoai controller =======
Route::controller(TheLoaiController::class)->group(function () {
    Route::get('theloai/list', 'index')->name('theloai.list');
    Route::get('theloai/create', 'create')->name('theloai.create');
    Route::post('theloai/store', 'store')->name('theloai.store');
    Route::get('theloai/edit/{id}', 'edit')->name('theloai.edit');
    Route::post('theloai/update/{id}', 'update')->name('theloai.update');
    Route::get('theloai/destroy/{id}', 'destroy')->name('theloai.destroy');
    Route::get('theloai/search', 'search')->name('theloai.search');
});

// ======= TinTuc controller =======
Route::controller(TinTucController::class)->group(function () {
    Route::get('tintuc/list', 'index')->name('tintuc.list');
    Route::get('tintuc/create', 'create')->name('tintuc.create');
    Route::post('tintuc/store', 'store')->name('tintuc.store');
    Route::get('tintuc/edit/{id}', 'edit')->name('tintuc.edit');
    Route::post('tintuc/update/{id}', 'update')->name('tintuc.update');
    Route::get('tintuc/destroy/{id}', 'destroy')->name('tintuc.destroy');
    Route::get('tintuc/search', 'search')->name('tintuc.search');
});
