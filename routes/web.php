<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('add-student', [StudentController::class, 'add'])->name('student.add');
Route::post('add-student', [StudentController::class, 'create']);
Route::get('edit-student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::post('edit-student/{id}', [StudentController::class, 'edit']);
Route::get('test', function () {
    return view("app");
});