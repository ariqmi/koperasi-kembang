<?php

namespace App\Http\Controllers;

//import return type View
use App\Enums\UserRole;
use App\Models\Himpunan;
use App\Models\User;
use App\Models\UserFO;
use App\Models\UserMember;
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

class RegistrasiMemberController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function create(): View
    {
        $himpunans = Himpunan::latest()->get();
        
        return view('registrasi.create', compact('himpunans'));
    }

    public function store(Request $request)
    {
      $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'nama' => 'required',
            'nik' => 'required|unique:user_members',
            'no_kk' => 'required|unique:user_members',
            'foto_ktp' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'foto_kk' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'no_hp' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'kokab' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'alamat' => 'required',
            'himpunan_id' => 'required',
            // 'user_fo_id' => 'required',
        ]);

         //upload ktp
         $foto_ktp = $request->file('foto_ktp');
         $foto_ktp->storeAs('public', $foto_ktp->hashName());
         
         //upload kk
         $foto_kk = $request->file('foto_kk');
         $foto_kk->storeAs('public', $foto_kk->hashName());
         
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => UserRole::Member
        ]);

        UserMember::create([
            'user_id' => $user->id,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'foto_ktp' => $foto_ktp->hashName(),
            'foto_kk' => $foto_kk->hashName(),
            'no_hp' => $request->no_hp,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kokab' => $request->kokab,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat' => $request->alamat,
            'himpunan_id' => $request->himpunan_id,
            'user_fo_id' => 0
        ]);
        

        //redirect to index
        return redirect()->route('login.index')->with(['success' => 'Buat Akun Berhasil Silahkan Login!']);
    }


}