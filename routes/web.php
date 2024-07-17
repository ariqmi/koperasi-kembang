<?php

use App\Enums\UserRole;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\AnggotaHimpunanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FODashboardController;
use App\Http\Controllers\FOProfilController;
use App\Http\Controllers\HimpunanSayaController;
use App\Http\Controllers\KelolaKumpulanController;
use App\Http\Controllers\KumpulanSayaController;
use App\Http\Controllers\MemberDashboardController;
use App\Http\Controllers\MemberProfilController;
use App\Http\Controllers\RegistrasiMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return view('landingpage.beranda');
});

Route::get('/kontak', function () {
    return view('landingpage.kontak');
   });


// route for login
Route::get('/login', [AuthController::class,'index'])->name('login.index');
Route::post('/login/verify', [AuthController::class,'verify'])->name('login.verify');
Route::get('/login/logout', [AuthController::class,'logout'])->name('login.logout');


// route for registrasi
Route::get('/registrasi', [RegistrasiMemberController::class,'create'])->name('registrasi.create');
Route::post('/registrasi', [RegistrasiMemberController::class,'store'])->name('registrasi.store');


//route for dashboard admin
Route::get('/admindashboard', [AdminDashboardController::class,'index'])->name('admin.dashboard.index')->middleware('role:' . UserRole::Admin->value);

//route for profil admin
Route::get('/adminprofil', [AdminProfilController::class,'show'])->name('admin.profil.show')->middleware('role:' . UserRole::Admin->value);
Route::get('/adminprofil/edit', [AdminProfilController::class,'edit'])->name('admin.profil.edit')->middleware('role:' . UserRole::Admin->value);
Route::put('/adminprofil/update', [AdminProfilController::class,'update'])->name('admin.profil.update')->middleware('role:' . UserRole::Admin->value);

//route resource for himpunans
Route::resource('/himpunan', \App\Http\Controllers\HimpunanController::class)->
names([
    'index' => 'admin.himpunans.index',
    'create' => 'admin.himpunans.create',
    'store' => 'admin.himpunans.store',
    'show' => 'admin.himpunans.show',
    'edit' => 'admin.himpunans.edit',
    'update' => 'admin.himpunans.update',
    'destroy' => 'admin.himpunans.destroy'
])->middleware('role:' . UserRole::Admin->value);

//route resource for user field officer
Route::resource('/fieldofficer', \App\Http\Controllers\UserFOController::class)->
names([
    'index' => 'admin.fieldofficers.index',
    'create' => 'admin.fieldofficers.create',
    'store' => 'admin.fieldofficers.store', 
    'show' => 'admin.fieldofficers.show',
    'edit' => 'admin.fieldofficers.edit',
    'update' => 'admin.fieldofficers.update',
    'destroy' => 'admin.fieldofficers.destroy'
])->middleware('role:' . UserRole::Admin->value);


// route for dashboard fo
Route::get('/fodashboard', [FODashboardController::class,'index'])->name('fo.dashboard.index')->middleware('role:' . UserRole::Fo->value);

//route for profil fo
Route::get('/foprofil', [FOProfilController::class,'show'])->name('fo.profil.show')->middleware('role:' . UserRole::Fo->value);
Route::get('/foprofil/edit', [FOProfilController::class,'edit'])->name('fo.profil.edit')->middleware('role:' . UserRole::Fo->value);
Route::put('/foprofil/update', [FOProfilController::class,'update'])->name('fo.profil.update')->middleware('role:' . UserRole::Fo->value);

//route for himpunan saya
Route::get('/himpunansaya', [HimpunanSayaController::class,'index'])->name('fo.himpunansaya.index')->middleware('role:' . UserRole::Fo->value);
// todo:ganti setelah ada parameter id
Route::get('/himpunansaya/{id}', [HimpunanSayaController::class,'show'])->name('fo.himpunansaya.show')->middleware('role:' . UserRole::Fo->value);

//route for anggota himpunan
Route::get('/anggotahimpunan/{id}', [AnggotaHimpunanController::class,'index'])->name('fo.anggotahimpunan.index')->middleware('role:' . UserRole::Fo->value);
Route::get('/anggotahimpunan/show/{id}', [AnggotaHimpunanController::class,'show'])->name('fo.anggotahimpunan.show')->middleware('role:' . UserRole::Fo->value);
Route::get('/anggotahimpunan/edit/{id}', [AnggotaHimpunanController::class,'edit'])->name('fo.anggotahimpunan.edit')->middleware('role:' . UserRole::Fo->value);
Route::put('/anggotahimpunan/{id}', [AnggotaHimpunanController::class,'update'])->name('fo.anggotahimpunan.update')->middleware('role:' . UserRole::Fo->value);
Route::delete('/anggotahimpunan/destroy/{id}', [AnggotaHimpunanController::class,'destroy'])->name('fo.anggotahimpunan.destroy')->middleware('role:' . UserRole::Fo->value);
Route::get('/anggotahimpunan/dashboard/{id}', [AnggotaHimpunanController::class,'dashboard'])->name('fo.anggotahimpunan.dashboard')->middleware('role:' . UserRole::Fo->value);

//route for kelola kumpulan
Route::get('/kelolakumpulan/{id}', [KelolaKumpulanController::class,'index'])->name('fo.kelolakumpulan.index')->middleware('role:' . UserRole::Fo->value);
Route::get('/kelolakumpulan/create/{id}', [KelolaKumpulanController::class,'create'])->name('fo.kelolakumpulan.create')->middleware('role:' . UserRole::Fo->value);
// todo:ganti setelah ada parameter id
Route::get('/kelolakumpulan/edit', [KelolaKumpulanController::class,'edit'])->name('fo.kelolakumpulan.edit')->middleware('role:' . UserRole::Fo->value);

//route for kelola kumpulan anggota
Route::get('kumpulananggota/create/{id}', [KelolaKumpulanController::class,'createanggota'])->name('fo.kumpulananggota.create')->middleware('role:' . UserRole::Fo->value);
Route::get('kumpulananggota/edit', [KelolaKumpulanController::class,'editanggota'])->name('fo.kumpulananggota.edit')->middleware('role:' . UserRole::Fo->value);



// route for dashboard member
Route::get('/memberdashboard', [MemberDashboardController::class,'index'])->name('member.dashboard.index')->middleware('role:' . UserRole::Member->value);

//route for profil member
Route::get('/memberprofil', [MemberProfilController::class,'show'])->name('member.profil.show')->middleware('role:' . UserRole::Member->value);
Route::get('/memberprofil/edit', [MemberProfilController::class,'edit'])->name('member.profil.edit')->middleware('role:' . UserRole::Member->value);
Route::put('/memberprofil/update', [MemberProfilController::class,'update'])->name('member.profil.update')->middleware('role:' . UserRole::Member->value);

Route::get('/kumpulansaya', [KumpulanSayaController::class,'index'])->name('member.kumpulansaya.index')->middleware('role:' . UserRole::Member->value);
// todo:ganti setelah ada paramter id
Route::get('/kumpulansaya/show', [KumpulanSayaController::class,'show'])->name('member.kumpulansaya.show')->middleware('role:' . UserRole::Member->value);