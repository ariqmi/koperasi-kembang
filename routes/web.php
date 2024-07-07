<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for dashboard
Route::get('/admindashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard.index');


//route resource for himpunans
Route::resource('/himpunans', \App\Http\Controllers\HimpunanController::class)->
names([
    'index' => 'admin.himpunans.index',
    'create' => 'admin.himpunans.create',
    'store' => 'admin.himpunans.store',
    'show' => 'admin.himpunans.show',
    'edit' => 'admin.himpunans.edit',
    'update' => 'admin.himpunans.update',
    'destroy' => 'admin.himpunans.destroy'
]);

//route resource for user field officer
Route::resource('/fieldofficers', \App\Http\Controllers\UserFOController::class)->
names([
    'index' => 'admin.fieldofficers.index',
    'create' => 'admin.fieldofficers.create',
    'store' => 'admin.fieldofficers.store', 
    'show' => 'admin.fieldofficers.show',
    'edit' => 'admin.fieldofficers.edit',
    'update' => 'admin.fieldofficers.update',
    'destroy' => 'admin.fieldofficers.destroy'
]);