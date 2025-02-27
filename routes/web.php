<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CattleController;


Route::get('/error', [IndexController::class, 'index'])->name('error');
Route::get('/typography', [IndexController::class, 'index'])->name('typography');
Route::get('/root/test', [IndexController::class, 'index'])->name('root.test');
Route::get('/root/test-two', [IndexController::class, 'view'])->name('root.test.two');
Route::get('/main', [IndexController::class, 'index'])->name('main');
Route::get('/main/test', [IndexController::class, 'index'])->name('main.test');
Route::get('/main/test-two', [IndexController::class, 'index'])->name('main.test.two');
Route::get('/', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::resource('dashboard', DashboardController::class)->only(['index']);
    Route::resource('cattle', CattleController::class)->only(['index'])->middleware('auth');
});

