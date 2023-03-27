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

Route::get('/confirm', [CotactController::class, 'confirm']);
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

Route::get('/thanks', [CotactController::class, 'send']);
Route::post('/thanks', [ContactController::class, 'send'])->name('send');
Route::post('/todo/create', [CotactController::class, 'create'])->name('Management.create');

Route::get('/Management/main', [CotactController::class, 'main'])->name('Management.main');
Route::get('/find', [CotactController::class, 'find']);
Route::post('/find', [CotactController::class, 'search']);

Route::post('/Management/delete', [CotactController::class, 'delete'])->name('Managemant.delete');