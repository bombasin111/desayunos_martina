<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/panel', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/desayunos', function () {
    return view('desayunos'); // Esto será la vista con Star, VIP, Con Detalle
});

Route::get('/detalles', function () {
    return 'Página Detalles 🎀'; // Placeholder por ahora
});

Route::get('/desayunos/star', function () {
    return view('desayunos.star');
})->name('desayunos.star');

Route::get('/desayunos/vip', function () {
    return view('desayunos.vip');
})->name('desayunos.vip');

Route::get('/desayunos/detalle', function () {
    return view('desayunos.detalle');
})->name('desayunos.detalle');

