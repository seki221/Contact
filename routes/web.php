<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/',[ContactController::class,'index'])->name('index');
Route::get('/validation', [ContactController::class, 'index']);
Route::post('/validation',[ContactController::class, 'index']);
Route::get('/Management/main', [ContactController::class, 'main'])->name('Management.main');

Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

Route::get('/thanks', [ContactController::class, 'send']);
Route::post('/thanks', [ContactController::class, 'send'])->name('send');
Route::post('/todo/create', [ContactController::class, 'create'])->name('Management.create');

Route::get('/find', [ContactController::class, 'find']);
Route::post('/find', [ContactController::class, 'search']);

Route::post('/Management/delete', [ContactController::class, 'delete'])->name('Managemant.delete');