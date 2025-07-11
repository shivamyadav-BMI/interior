<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminSessionController;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('/admin')->middleware('guest')->group(function(){
    Route::get('/login', [AdminSessionController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminSessionController::class, 'store'])->name('admin.login.store')->middleware(HandlePrecognitiveRequests::class);

});
Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('role:admin')->name('admin.dashboard');


});

Route::get('/', function(){
    // User::create([
    //     'name' => 'Shivam yadav',
    //     'email' => 'shivam@gmail.com',
    //     'password' => '00000000'
    // ]);
});

