<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(StudentController::class)->group(function () {
        Route::get('/student', 'index')->name('student');
        Route::get('/student/add', 'create')->name('add');
        Route::post('/student/add', 'store')->name('student.save');
        Route::get('/student/edit/{nim}', 'getEdit')->name('edit');
        Route::post('/student/edit/{nim}', 'postEdit')->name('student.edit');
        Route::post('/student/delete/{nim}', 'delete')->name('student.delete');
    });
});

require __DIR__.'/auth.php';
