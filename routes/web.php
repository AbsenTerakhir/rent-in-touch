<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tenant', [TenantController::class, 'index'])
    ->name('tenant.index');

Route::get('/tenant/create', [TenantController::class, 'create'])
    ->name('tenant.create');

Route::post('/tenant', [TenantController::class, 'store'])
    ->name('tenant.store');

Route::get('/tenant/{id_tenant}/edit',  [TenantController::class, 'edit'])
     ->name('tenant.edit');
     
Route::put('/tenant/{id_tenant}', [TenantController::class, 'update'])
         ->name('tenant.update');

Route::delete('/tenant/{id_tenant}', [TenantController::class, 'destroy'])
    ->name('tenant.destroy');