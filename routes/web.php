<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;

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
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

// mahasiswa
Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/mahasiswa', 'index');
    Route::get('/mahasiswa/create', 'create');
    Route::post('/mahasiswa', 'store');
    Route::get('/mahasiswa/{id}', 'show');
    Route::get('/mahasiswa/{id}/edit', 'edit');
    Route::put('/mahasiswa/{id}', 'update');
    Route::delete('/mahasiswa/{id}', 'destroy');
});

// students
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students', [StudentsController::class, 'store']);
Route::get('/students/{student}', [StudentsController::class, 'show']);
Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
Route::put('/students/{student}', [StudentsController::class, 'update']);
Route::delete('/students/{student}', [StudentsController::class, 'destroy']);






