<?php

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

use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::resource('employees', EmployeeController::class);
    Route::resource('wash-types', WashTypeController::class);
    Route::resource('washes', WashController::class);
    Route::resource('payments', PaymentController::class);

    Route::get('reports/employees', [ReportController::class, 'employees'])->name('reports.employees');
    Route::get('reports/financial', [ReportController::class, 'financial'])->name('reports.financial');
});

use App\Http\Controllers\WashController;

Route::get('/agenda', [WashController::class, 'index'])->name('agenda.index');
Route::patch('/agenda/{wash}/status', [WashController::class, 'updateStatus'])->name('agenda.updateStatus');
Route::patch('/washes/{wash}/status', [WashController::class, 'updateStatus'])->name('washes.updateStatus');


use App\Http\Controllers\CompanyController;

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');

require __DIR__.'/auth.php';

