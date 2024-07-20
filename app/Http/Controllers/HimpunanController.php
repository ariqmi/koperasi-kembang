<?php

namespace App\Http\Controllers;

//import model himpunan
use App\Models\Himpunan; 

//import return type View
use App\Models\UserFO;
use App\Models\UserMember;
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class HimpunanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all himpunans
        $himpunans = Himpunan::latest()->paginate(10);

        foreach ($himpunans as $himpunan) {
            $jumlahAnggota = UserMember::where('himpunan_id', $himpunan->id)->count();
            $himpunan->jumlah_anggota = $jumlahAnggota;
        }

        //render view with himpunans
        return view('admin.himpunans.index', compact('himpunans'));
    }

    public function create(): view 
    {
        $userfos = UserFO::latest()->get();
            
        return view('admin.himpunans.create', compact('userfos'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_himpunan'     => 'required|unique:himpunans',
            'kode_himpunan'     => 'required|unique:himpunans',
            'tanggal_aktivasi'  => 'required',
            'kokab'             => 'required',
            'kecamatan'         => 'required',
            'kelurahan'         => 'required',
            'rw'                => 'required|numeric',
            'rt'                => 'required|numeric',
            'alamat'            => 'required',
            'user_fo_id'        => 'required',
            'mitra'             => 'required',
            'email_mitra'       => 'required|email',
            'no_hp_mitra'       => 'required|numeric'
            
]);
        //create himpunan
             Himpunan::create([
            'nama_himpunan'     => $request->nama_himpunan,
            'kode_himpunan'     => $request->kode_himpunan,
            'tanggal_aktivasi'  => $request->tanggal_aktivasi,
            'kokab'             => $request->kokab,
            'kecamatan'         => $request->kecamatan,
            'kelurahan'         => $request->kelurahan,
            'rw'                => $request->rw,
            'rt'                => $request->rt,
            'alamat'            => $request->alamat,
            'user_fo_id'        => $request->user_fo_id, 
            'mitra'             => $request->mitra,
            'email_mitra'       => $request->email_mitra,
            'no_hp_mitra'       => $request->no_hp_mitra
]);

        //redirect to index
        return redirect()->route('admin.himpunans.index')->with(['success' => 'Data Berhasil Disimpan!']);


    }

    public function show(string $id): View
    {
        //get himpunan by ID
        $himpunan = Himpunan::findOrFail($id);
        $jumlahAnggota = UserMember::where('himpunan_id', $id)->count();
        $userfos = UserFO::where('user_id', $himpunan->user_fo_id)->firstOrFail();

        //render view with himpunan
        return view('admin.himpunans.show', ['jumlahAnggota' => $jumlahAnggota, 'himpunan' => $himpunan, 'userfos' => $userfos]);
    }

    public function edit(string $id): View
    {
	//get himpunan by ID
    $himpunan = Himpunan::findOrFail($id);
    $jumlahAnggota = UserMember::where('himpunan_id', $id)->count();
    $userfos = UserFO::latest()->get();

        //render view with himpunan
        return view('admin.himpunans.edit', ['jumlahAnggota' => $jumlahAnggota, 'himpunan' => $himpunan, 'userfos' => $userfos]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_himpunan'     => 'required|unique:himpunans,nama_himpunan,'.$id, 
            'kode_himpunan'     => 'required|unique:himpunans,kode_himpunan,'.$id,
            'tanggal_aktivasi'  => 'required',
            'kokab'             => 'required',
            'kecamatan'         => 'required',
            'kelurahan'         => 'required',
            'rw'                => 'required|numeric',
            'rt'                => 'required|numeric',
            'alamat'            => 'required',
            'user_fo_id'        => 'required',
            'mitra'             => 'required',
            'email_mitra'       => 'required|email',
            'no_hp_mitra'       => 'required|numeric'
            
]);
	
        //get himpunan by ID
        $himpunan = Himpunan::findOrFail($id)->update([
            'nama_himpunan'     => $request->nama_himpunan,
            'kode_himpunan'     => $request->kode_himpunan,
            'tanggal_aktivasi'  => $request->tanggal_aktivasi,
            'kokab'             => $request->kokab,
            'kecamatan'         => $request->kecamatan,
            'kelurahan'         => $request->kelurahan,
            'rw'                => $request->rw,
            'rt'                => $request->rt,
            'alamat'            => $request->alamat,
            'user_fo_id'        => $request->user_fo_id,
            'mitra'             => $request->mitra,
            'email_mitra'       => $request->email_mitra,
            'no_hp_mitra'       => $request->no_hp_mitra
]);


        //redirect to index
        return redirect()->route('admin.himpunans.index')->with(['success' => 'Data Berhasil Diubah!']);
	
    }

    public function destroy($id): RedirectResponse
    {

	//get himpunan by ID
    $himpunan = Himpunan::findOrFail($id);

    $jumlahusermember = UserMember::where('himpunan_id', $id)->count();

    if ($jumlahusermember == 0) {
        //delete himpunan
        $himpunan->delete();
    } else {
        return redirect()->route('admin.himpunans.index')->with(['error' => 'Himpunan Tidak Dapat Dihapus!']);
    }

    //redirect to index
    return redirect()->route('admin.himpunans.index')->with(['success' => 'Data Berhasil Dihapus!']);
	
    }

}