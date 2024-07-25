<?php

namespace App\Http\Controllers;

//import model
use App\Models\KumpulanAnggota;
use App\Models\UserMember;

//import return type View
use Illuminate\View\View;


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