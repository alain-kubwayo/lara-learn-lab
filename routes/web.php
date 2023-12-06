<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;

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
    return view('welcome');
});

Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipments.index')->middleware('auth');
Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('equipments.create');
Route::post('/equipments', [EquipmentController::class, 'store'])->name('equipments.store');
Route::get('/equipments/{id}', [EquipmentController::class, 'show'])->name('equipments.show')->middleware('auth');
Route::delete('/equipments/{id}', [EquipmentController::class, 'destroy'])->name('equipments.destroy')->middleware('auth');

// Auth::routes();

// disable registration
Auth::routes([
    'register' => false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
