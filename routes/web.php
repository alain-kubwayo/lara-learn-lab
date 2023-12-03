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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipments', function() {
    // $equipments = ['name' => 'dumbbells', 'price' => 75];
    // return view('equipments.index', $equipments);
    $equipments = [
        ['name' => 'dumbbells', 'price' => 124],
        ['name' => 'treadmill', 'price' => 400]
    ];
    return view('equipments.index', [ 'equipments' => $equipments ]);
});
