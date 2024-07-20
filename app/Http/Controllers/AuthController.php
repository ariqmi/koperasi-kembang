<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;

//import Http Request
use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    //

    public function index()
    {
        
        return view('login.index');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        $user = Auth::user();
        switch ($user->role) {
            case UserRole::Admin:
                return redirect()->intended('/admindashboard');
            case UserRole::Fo:
                return redirect()->intended('/fodashboard');
            case UserRole::Member:
                return redirect()->intended('/memberdashboard');
            default:
                return redirect()->route('login.index')->with(['error' => 'Role tidak dikenali, Silahkan Coba Kembali']);
        }
    } else {
        return redirect()->route('login.index')->with(['error' => 'Username dan Password Salah, Silahkan Coba Kembali']);
    }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index')->with(['success' => 'Anda Telah Berhasil Logout.']);
    }

}