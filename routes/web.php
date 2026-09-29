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