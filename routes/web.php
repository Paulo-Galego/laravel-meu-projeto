<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourseController;
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

//CURSOS
Route::get('/index-course',[CourseController::class, 'index'])->name('course.index');
Route::get('/show-course/{course}',[CourseController::class, 'show'])->name('course.show');
Route::get('/create-course',[CourseController::class, 'create'])->name('course.create');
Route::post('/store-course',[CourseController::class, 'store'])->name('course.store');
Route::get('/edit-course/{course}',[CourseController::class, 'edit'])->name('course.edit');
Route::put('/update-course/{course}',[CourseController::class, 'update'])->name('course.update');
Route::delete('/destroy-course/{course}',[CourseController::class, 'destroy'])->name('course.destroy');

//Aulas
Route::get('/index-classe/{course}',[ClasseController::class, 'index'])->name('classe.index');
Route::get('/show-classe/{classe}', [ClasseController::class,'show'])->name('classe.show');
Route::get('/create-classe/{course}', [ClasseController::class, 'create'])->name('classe.create');
Route::post('/store-classe',[ClasseController::class, 'store'])->name('classe.store');
Route::get('/edit-classe/{classe}',[ClasseController::class, 'edit'])->name('classe.edit');
Route::put('/update-classe/{classe}',[ClasseController::class, 'update'])->name('classe.update');
Route::delete('/destroy-classe/{classe}',[ClasseController::class, 'destroy'])->name('classe.destroy');