<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});



Route::get('/income', [IncomeController::class,'incomePage'])->name('income');

Route::get('/expense', [ExpenseController::class,'expensePage'])->name('expense');

Route::get('/income-form', [IncomeController::class,'incomeForm'])->name('incomeForm');
Route::post('/income-store', [IncomeController::class, 'store'])->name('incomes.store');

Route::get('/expese-form', [ExpenseController::class,'expenseForm'])->name('expeseForm');
Route::post('/expense-store', [ExpenseController::class, 'store'])->name('expenses.store');
