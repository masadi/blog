<?php

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
    return view('homepage');
})->name('home');
Route::get('/home', function () {
    return view('homepage');
});
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard')->middleware(['auth']);
Route::get('/admin/{vue_capture?}', function () {
    return view('admin.index');  
})->where('vue_capture', '[\/\w\.-]*')->middleware(['auth']);
Route::get('/read/{vue_capture?}', function () {
    return view('homepage');  
})->where('vue_capture', '[\/\w\.-]*')->middleware(['auth']);
