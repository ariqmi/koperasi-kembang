<?php

namespace App\Http\Controllers;

//import model user field officer
use App\Enums\UserRole;
use App\Models\Himpunan;
use App\Models\UserFO; 

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


class UserFOController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all user and user fo
        $userfos = UserFO::latest()->paginate(10);

        // todo: masih blm muncul valuenya
        foreach ($userfos as $userfo) {
            $jumlahHimpunan = Himpunan::where('user_fo_id', $userfo->user_id)->count();
            $userfo->jumlah_himpunan = $jumlahHimpunan;
        }

        //render view with fo
        return view('admin.fieldofficers.index', compact('userfos'));
    }

    public function create(): View
    {
        return view('admin.fieldofficers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'nama' => 'required',
            'nik' => 'required|unique:user_f_o_s',
            'foto_ktp' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'email' => 'required|email|unique:user_f_o_s',
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

         //upload ktp
         $foto_ktp = $request->file('foto_ktp');
         $foto_ktp->storeAs('public', $foto_ktp->hashName());
 
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => UserRole::Fo
        ]);

        UserFO::create([
            'user_id' => $user->id,
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
        ]);

        //redirect to index
        return redirect()->route('admin.fieldofficers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
    $userfo = UserFO::where('user_id', $id)->firstOrFail();
    $user = User::where('id', $id)->firstOrFail();

    $himpunan = Himpunan::where('user_fo_id', $id)->firstOrFail();
    $jumlahHimpunan = Himpunan::where('user_fo_id', $id)->count();
    $jumlahAnggota= UserMember::where('himpunan_id', $himpunan->id)->count();

   
    return view('admin.fieldofficers.show', ['jumlahHimpunan' => $jumlahHimpunan, 'userfo' => $userfo, 'user' => $user, 'jumlahAnggota' => $jumlahAnggota]);
}

    public function edit(string $id): View
    {
    $userfo = UserFO::where('user_id', $id)->firstOrFail();
    $user = User::where('id', $id)->firstOrFail();

    $himpunan = Himpunan::where('user_fo_id', $id)->firstOrFail();
    $jumlahHimpunan = Himpunan::where('user_fo_id', $id)->count();
    $jumlahAnggota= UserMember::where('himpunan_id', $himpunan->id)->count();

    //redirect to index
    return view('admin.fieldofficers.edit', ['jumlahHimpunan' => $jumlahHimpunan, 'userfo' => $userfo, 'user' => $user, 'jumlahAnggota' => $jumlahAnggota]);
}

public function update(Request $request, $id): RedirectResponse
    {
        $userfo = UserFO::where('user_id', $id)->firstOrFail();
        //validate form
        $request->validate([
            'username' => 'required|unique:users,username,'.$id,
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
	
        $user = User::findOrFail($id);

        if ($request->hasFile('foto_ktp')) {

            //upload new foto_ktp
            $foto_ktp = $request->file('foto_ktp');
            $foto_ktp->storeAs('public', $foto_ktp->hashName());

            //delete old foto_ktp
            Storage::delete('public/'.$userfo->foto_ktp);

            

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
       

        UserFO::findOrFail($userfo->id)->update([
            'user_id' => $id,
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
        ]);

    } else {

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
        UserFO::findOrFail($userfo->id)->update([
            'user_id' => $id,
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
        ]);
    }


        //redirect to index
        return redirect()->route('admin.fieldofficers.index')->with(['success' => 'Data Berhasil Diubah!']);
    
}

    public function destroy($id): RedirectResponse
    {

        $userfo = UserFO::where('user_id', $id)->firstOrFail();
        $user = User::where('id', $id)->firstOrFail();

        $userfo->delete();
        $user->delete();
        
    //redirect to index
    return redirect()->route('admin.fieldofficers.index')->with(['success' => 'Data Berhasil Dihapus!']);
	
    }

}