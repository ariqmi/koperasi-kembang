<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserFO;

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


class FOProfilController extends Controller
{
    public function show(): View
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $userfo = UserFO::where('user_id', $userId)->firstOrFail();

        return view('fo.profil.show', compact('user', 'userfo'));
    }

    public function edit(): View
    {
            $userId = Auth::id();
            $user = User::findOrFail($userId);
            $userfo = UserFO::where('user_id', $userId)->firstOrFail();

    
            return view('fo.profil.edit', compact('user', 'userfo'));
    }
        
    public function update(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $userfo = UserFO::where('user_id', $userId)->firstOrFail();
       
        $request->validate([
            'username' => 'required|unique:users,username,'.$userId,
            'password' => 'nullable|min:8|confirmed',
            'nama' => 'required',
            'nik' => 'required|unique:user_f_o_s,nik,'.$userfo->id,
            'foto_ktp' => 'image|mimes:jpeg,jpg,png|max:2048',
            'email' => 'required|email|unique:user_f_o_s,email,'.$userfo->id,
            'no_hp' => 'required',
            'kokab' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'alamat' => 'required',
            'sertifikasi' => 'required',
            'coverage_area' => 'required',
        ]);
	
        $user = User::findOrFail($userId);

        if ($request->hasFile('foto_ktp')) {

            //upload new foto_ktp
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp->storeAs('public', $foto_ktp->hashName());

            //delete old foto_ktp
            Storage::delete('public/'.$userfo->foto_ktp);

            

            if($request->password != null) {
                $user = User::findOrFail($userId)->update([
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user = User::findOrFail($userId)->update([
                    'username' => $request->username,
                ]);
            }
       

        UserFO::findOrFail($userfo->id)->update([
            'user_id' => $userId,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'foto_ktp' => $foto_ktp->hashName(),
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'kokab' => $request->kokab,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat' => $request->alamat,
            'sertifikasi' => $request->sertifikasi,
            'coverage_area' => $request->coverage_area,
            // todo: setelah ada auth ganti value
            'jumlah_himpunan' => 0,
            'jumlah_anggota' => 0,
        ]);

    } else {

        if($request->password != null) {
            $user = User::findOrFail($userId)->update([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user = User::findOrFail($userId)->update([
                'username' => $request->username,
            ]);
        }
        UserFO::findOrFail($userfo->id)->update([
            'user_id' => $userId,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'kokab' => $request->kokab,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rw' => $request->rw,
            'rt' => $request->rt,
            'alamat' => $request->alamat,
            'sertifikasi' => $request->sertifikasi,
            'coverage_area' => $request->coverage_area,
            // todo: setelah ada auth ganti value
            'jumlah_himpunan' => 0,
            'jumlah_anggota' => 0,
        ]);
    }

        return redirect()->route('fo.dashboard.index')->with(['success' => 'Profil Anda Berhasil Diperbarui.']);
    }
}