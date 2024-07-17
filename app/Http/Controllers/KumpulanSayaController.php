<?php

namespace App\Http\Controllers;

use App\Models\User;

//import return type View
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
      return view('member.kumpulansaya.index');
  }

  public function show() : View
  {
      return view('member.kumpulansaya.show');
  }
  
  
}