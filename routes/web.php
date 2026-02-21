<?php

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

Route::get('/', [\App\Http\Controllers\UploadController::class, 'index']);
Route::post('/doupload', [\App\Http\Controllers\UploadController::class, 'upload'])->name('doupload');
Route::get('/documento/{file}', [\App\Http\Controllers\UploadController::class,
'documento'])->name('documento');
Route::get('/check/{file}', [\App\Http\Controllers\UploadController::class,
'check'])->name('check');
Route::get('/check_cdr/{file}', [\App\Http\Controllers\UploadController::class,
'check_cdr'])->name('check_cdr');
Route::get('/documento_xml/{file}', [\App\Http\Controllers\UploadController::class,
'documento_xml'])->name('documento_xml');
Route::get('/check_xml/{file}', [\App\Http\Controllers\UploadController::class,
'check_xml'])->name('check_xml');
Route::get('/documento_cdr/{file}', [\App\Http\Controllers\UploadController::class,
'documento_cdr'])->name('documento_cdr');


