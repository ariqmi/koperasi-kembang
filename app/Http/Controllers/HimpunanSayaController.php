<?php

namespace App\Http\Controllers;

//import model
use App\Models\Himpunan;
use App\Models\User;
use App\Models\UserFO;
use App\Models\UserMember;

//import return type View
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;


class HimpunanSayaController extends Controller
{
  public function index() : View
  {
    $userId = Auth::id();
    $user =   User::findOrFail($userId);
    $userfo = UserFO::where('user_id', $userId)->firstOrFail();

    $himpunans = Himpunan::where('user_fo_id', $userId)->paginate(10);

    foreach ($himpunans as $himpunan) {
      $jumlahAnggota = UserMember::where('himpunan_id', $himpunan->id)->count();
      $himpunan->jumlah_anggota = $jumlahAnggota;
  }

    return view('fo.himpunansaya.index', compact ('himpunans'));
  }

  public function show(string $id): View
    {
        $himpunan = Himpunan::findOrFail($id);
        $jumlahAnggota = UserMember::where('himpunan_id', $id)->count();
        $userfos = UserFO::where('user_id', $himpunan->user_fo_id)->firstOrFail();

        return view('fo.himpunansaya.show', ['jumlahAnggota' => $jumlahAnggota, 'himpunan' => $himpunan, 'userfos' => $userfos]);
    }
  
}