<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//mijn controllers
use App\Http\Controllers\ProjectenController;

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
})->name('bmv');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//mijn routes

//route naar mijn projecten
Route::get('/projecten', [ProjectenController::class, 'index'])->name('projecten');
Route::get('/projecten/project', [ProjectenController::class, 'show'])->name('projecten.show');


require __DIR__.'/auth.php';
