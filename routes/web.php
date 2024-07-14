<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FODashboardController;
use App\Http\Controllers\MemberDashboardController;
use App\Http\Controllers\RegistrasiMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return view('landingpage.beranda');
});

Route::get('/kontak', function () {
    return view('landingpage.kontak');
   });


// route for dashboard fo
Route::get('/registrasi', [RegistrasiMemberController::class,'create'])->name('registrasi.create');
Route::post('/registrasi', [RegistrasiMemberController::class,'store'])->name('registrasi.store');


//route resource for dashboard admin
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


// route for dashboard fo
Route::get('/fodashboard', [FODashboardController::class,'index'])->name('fo.dashboard.index');

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


// route for dashboard member
Route::get('/memberdashboard', [MemberDashboardController::class,'index'])->name('member.dashboard.index');