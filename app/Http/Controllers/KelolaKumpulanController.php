<?php

namespace App\Http\Controllers;

use App\Models\Himpunan;
use App\Models\User;
use App\Models\UserFO;

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

class KelolaKumpulanController extends Controller
{
  public function index($id) : View
  {
    return view('fo.himpunansaya.kelolakumpulan.index', ['himpunan_id' => $id]);
  }

  public function create($id) : View
  {
    $usermembers = UserMember::where('himpunan_id', $id)->latest()->paginate(10);

    return view('fo.himpunansaya.kelolakumpulan.create', ['himpunan_id' => $id, 'usermembers' => $usermembers]);
  }

  public function edit() : View
  {
    
    return view('fo.himpunansaya.kelolakumpulan.edit');
  }

  public function createanggota($id) : View
  {
    $usermember = UserMember::findOrFail($id);
    
    return view('fo.himpunansaya.kelolakumpulan.kumpulananggota.create', compact('usermember'));
  }

  public function editanggota() : View
  {
    
    return view('fo.himpunansaya.kelolakumpulan.kumpulananggota.edit');
  }
  
}