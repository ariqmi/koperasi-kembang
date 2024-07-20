<?php

namespace App\Http\Controllers;

use App\Models\Kumpulan;
use App\Models\KumpulanAnggota;
use App\Models\User;

//import return type View
use App\Models\UserMember;
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


class KumpulanSayaController extends Controller
{
  public function index() : View
  {
    $userId = Auth::id();
    $userMember = UserMember::where('user_id', $userId)->firstOrFail();
    $kumpulans = KumpulanAnggota::where('user_member_id', $userMember->id)->paginate(10);

    return view('member.kumpulansaya.index', compact('kumpulans'));
  }

  public function show($id) : View
  {
    $kumpulananggota = KumpulanAnggota::findOrFail($id);

    return view('member.kumpulansaya.show', compact('kumpulananggota'));

  }
  
  
}