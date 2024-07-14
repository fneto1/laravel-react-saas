<?php

use App\Http\Controllers\CreditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DifferenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/buy-credits/webhook', [CreditController::class, 'webhook'])->name('credit.webhook');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sum', [SumController::class, 'index'])->middleware(['auth', 'verified'])->name('sum.index');
Route::post('/sum', [SumController::class, 'calculate'])->middleware(['auth', 'verified'])->name('sum.calculate');
Route::get('/diff', [DifferenceController::class, 'index'])->middleware(['auth', 'verified'])->name('diff.index');
Route::post('/diff', [DifferenceController::class, 'calculate'])->middleware(['auth', 'verified'])->name('diff.calculate');
Route::get('/buy-credits', [CreditController::class, 'index'])->middleware(['auth', 'verified'])->name('credit.index');
Route::get('/buy-credits/success', [CreditController::class, 'success'])->middleware(['auth', 'verified'])->name('credit.success');
Route::get('/buy-credits/cancel', [CreditController::class, 'cancel'])->middleware(['auth', 'verified'])->name('credit.cancel');
Route::post('/buy-credits/{package}', [CreditController::class, 'buyCredits'])->middleware(['auth', 'verified'])->name('credit.buy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
