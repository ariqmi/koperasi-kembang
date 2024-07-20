<?php

namespace App\Http\Controllers;

//import model
use App\Models\Himpunan;
use App\Models\KumpulanAnggota;
use App\Models\User;
use App\Models\UserFO;
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



class AnggotaHimpunanController extends Controller
{

  public function index(string $id) : View
  {
    $usermembers = UserMember::where('himpunan_id', $id)->oldest()->paginate(10);
    
    return view('fo.himpunansaya.anggotahimpunan.index', compact('usermembers'));
  }

  public function show(string $id) : View
  {
    $user = User::findOrFail($id);
    $usermember = UserMember::where('user_id', $id)->firstOrFail();
    $himpunans = Himpunan::where('id', $usermember->himpunan_id)->firstOrFail();
    $userfos = UserFO::where('user_id', $himpunans->user_fo_id)->firstOrFail();
    
    return view('fo.himpunansaya.anggotahimpunan.show',  compact('usermember', 'user', 'userfos', 'himpunans'));
  }

  public function edit(string $id) : View
  {
    $user = User::findOrFail($id);
    $usermember = UserMember::where('user_id', $id)->firstOrFail();
    $himpunans = Himpunan::where('id', $usermember->himpunan_id)->latest()->get();
    
    return view('fo.himpunansaya.anggotahimpunan.edit',  compact('usermember', 'user', 'himpunans'));
  }

  public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);
      $usermember = UserMember::where('user_id', $id)->firstOrFail();
       
        $request->validate([
            'username' => 'required|unique:users,username,'.$id,
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
            'himpunan_id' => 'required',
        ]);
	
        if($request->password != null) {
            $user = User::findOrFail($id)->update([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user = User::findOrFail($id)->update([
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
           'user_id' => $id,
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
       ]);
   
       } else if ($request->hasFile('foto_ktp')) {

            //upload new foto_ktp
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp->storeAs('public', $foto_ktp->hashName());

            //delete old foto_ktp
            Storage::delete('public/'.$usermember->foto_ktp);

    
        UserMember::findOrFail($usermember->id)->update([
            'user_id' => $id,
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
            'himpunan_id' => $request->himpunan_id,
        ]);

    } else if ($request->hasFile('foto_kk')) {

         //upload new foto_kk
        $foto_kk = $request->file('foto_kk');
        $foto_kk->storeAs('public', $foto_kk->hashName());

          //delete old foto_kk
        Storage::delete('public/'.$usermember->foto_kk);

    UserMember::findOrFail($usermember->id)->update([
        'user_id' => $id,
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
        'himpunan_id' => $request->himpunan_id,
    ]);

    } else {
        
        UserMember::findOrFail($usermember->id)->update([
            'user_id' => $id,
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
            'himpunan_id' => $request->himpunan_id,
        ]);
    }

        return redirect()->route('fo.anggotahimpunan.index', $usermember->himpunan_id )->with(['success' => 'Profil Anggota Berhasil Diperbarui.']);
    }
  public function destroy($id) : RedirectResponse
  {
    $user = User::findOrFail($id);
    $usermember = UserMember::where('user_id', $id)->firstOrFail();

    $user->delete();
    $usermember->delete();

    return redirect()->route('fo.anggotahimpunan.index', $usermember->user_id)->with(['success' => 'Data Berhasil Dihapus!']);
  }

  public function dashboard($id) : View
  {
        $usermember = UserMember::where('id', $id)->firstOrFail();

        $pinjaman = 0;
        $simpanananggota = 0;
        $simpanankelompok = 0;
        $simpanansukarela = 0;

        $pencairanpinjaman = KumpulanAnggota::where('user_member_id', $id)->sum('pencairan_pinjaman');
        $angsuran = KumpulanAnggota::where('user_member_id', $id)->sum('angsuran');
        $pinjaman = $pencairanpinjaman - $angsuran;

        $simpanananggotamasuk = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_anggota_masuk');
        $simpanananggotakeluar = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_anggota_keluar');
        $simpanananggota = $simpanananggotamasuk - $simpanananggotakeluar;

        $simpanankelompokmasuk = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_kelompok_masuk');
        $simpanankelompokkeluar = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_kelompok_keluar');
        $simpanankelompok = $simpanankelompokmasuk - $simpanankelompokkeluar;

        $simpanansukarelamasuk = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_sukarela_masuk');
        $simpanansukarelakeluar = KumpulanAnggota::where('user_member_id', $id)->sum('simpanan_sukarela_keluar');
        $simpanansukarela = $simpanansukarelamasuk - $simpanansukarelakeluar;
        
        
       
        return view('fo.himpunansaya.anggotahimpunan.dashboard', ['usermember' => $usermember, 'pinjaman' => $pinjaman, 'simpanananggota' => $simpanananggota, 'simpanankelompok' => $simpanankelompok, 'simpanansukarela' => $simpanansukarela]);
  }
  
  
}