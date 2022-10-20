<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterProfessorController;
use App\Http\Controllers\RegisterStudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/auth/logout', [AuthController::class, 'logoutUser'])->name('users.logout');
    Route::post('/students/register', [RegisterStudentController::class, 'registerStudent'])->name('students.register');
    Route::post('/professors/register', [RegisterProfessorController::class, 'registerProfessor'])->name('students.register');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/auth/register', 'registerUser')->name('users.register');
    Route::post('/auth/login', 'loginUser')->name('users.login');
});