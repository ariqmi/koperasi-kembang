<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMember;

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


class MemberProfilController extends Controller
{
    public function show(): View
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $usermember = UserMember::where('user_id', $userId)->firstOrFail();

        return view('member.profil.show', compact('user', 'usermember'));
    }

    public function edit(): View
    {
            $userId = Auth::id();
            $user = User::findOrFail($userId);
            $usermember = UserMember::where('user_id', $userId)->firstOrFail();

    
            return view('member.profil.edit', compact('user', 'usermember'));
    }
        
    public function update(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $usermember = UserMember::where('user_id', $userId)->firstOrFail();
       
        $request->validate([
            'username' => 'required|unique:users,username,'.$userId,
            'password' => 'nullable|min:8|confirmed',
            'nama' => 'required',
            'nik' => 'required|unique:user_members,nik,'.$usermember->id,
            'no_kk' => 'required|unique:user_members,no_kk,'.$usermember->id,
            'foto_ktp' => 'image|mimes:jpeg,jpg,png|max:2048',
            'foto_kk' => 'image|mimes:jpeg,jpg,png|max:2048',
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
            // 'himpunan_id' => 'required',
            // 'user_fo_id' => 'required',
        ]);
	
        $user = User::findOrFail($userId);

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


        if ($request->hasFile('foto_ktp') AND ($request->hasFile('foto_kk'))) {
            //upload new foto_ktp
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp->storeAs('public', $foto_ktp->hashName());
    
           //delete old foto_ktp
            Storage::delete('public/'.$usermember->foto_ktp);
            
   
            //upload new foto_kk
           $foto_kk = $request->file('foto_kk');
           $foto_kk->storeAs('public', $foto_kk->hashName());
   
             //delete old foto_kk
           Storage::delete('public/'.$usermember->foto_kk);
           
           UserMember::findOrFail($usermember->id)->update([
           'user_id' => $userId,
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
           'himpunan_id' => 0,
           'user_fo_id' => 0
       ]);
   
       } else if ($request->hasFile('foto_ktp')) {

            //upload new foto_ktp
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp->storeAs('public', $foto_ktp->hashName());

            //delete old foto_ktp
            Storage::delete('public/'.$usermember->foto_ktp);

    
        UserMember::findOrFail($usermember->id)->update([
            'user_id' => $userId,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'foto_ktp' => $foto_ktp->hashName(),
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
            'himpunan_id' => 0,
            'user_fo_id' => 0
        ]);

    } else if ($request->hasFile('foto_kk')) {

         //upload new foto_kk
        $foto_kk = $request->file('foto_kk');
        $foto_kk->storeAs('public', $foto_kk->hashName());

          //delete old foto_kk
        Storage::delete('public/'.$usermember->foto_kk);

    UserMember::findOrFail($usermember->id)->update([
        'user_id' => $userId,
        'nama' => $request->nama,
        'nik' => $request->nik,
        'no_kk' => $request->no_kk,
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
        'himpunan_id' => 0,
        'user_fo_id' => 0
    ]);

    } else {
        
        UserMember::findOrFail($usermember->id)->update([
            'user_id' => $userId,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
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
            'himpunan_id' => 0,
            'user_fo_id' => 0
        ]);
    }

        return redirect()->route('member.dashboard.index')->with(['success' => 'Profil Anda Berhasil Diperbarui.']);
    }

}