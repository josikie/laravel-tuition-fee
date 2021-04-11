<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GradeController;
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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// grup yang hanya bisa diakses jika sudah login
Route::group(['middleware' => 'auth'], function() {
    //dashboard
    Route::get('dashboard',  [DashboardController::class, 'index'])->name('dashboard');
    //logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    //grades
    Route::resource('grades', GradeController::class);
    Route::get('/grades/destroy/{id}', [GradeController::class, 'destroy']);

});