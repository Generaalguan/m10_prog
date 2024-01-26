<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectAdminController;
use Illuminate\Support\Facades\Route;
//mijn controllers
use App\Http\Controllers\ProjectenController;
use App\Http\Controllers\ProjectController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//mijn routes
//route naar de welcom page
Route::get('/', function () {
    return view('welcome');
})->name('bmv');

//route naar mijn projecten
Route::get('/projecten', [ProjectenController::class, 'index'])->name('projecten');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('projecten.show');
Route::get('/projecten/add', [ProjectController::class, 'add'])->name('projecten.add');

//Admin 

//dashboard groep
Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function () {

    // route naar dashboard

    Route::get('/', function () {
        return view('dashboard');
        
    })->name('dashboard');
    


    Route::resources([
        'projecten' => ProjectAdminController::class,
    ]);

});

require __DIR__ . '/auth.php';
