<?php

namespace App\Http\Controllers;

//import model himpunan
use App\Models\Himpunan; 

//import return type View
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

        //render view with himpunans
        return view('admin.himpunans.index', compact('himpunans'));
    }

    public function create(): view 
    {
        //todo:ganti value 1 saat sudah ada auth
        $jumlah_anggota = Himpunan::where('id', '1')->value('jumlah_anggota');
         
        return view('admin.himpunans.create', compact('jumlah_anggota'));
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
            // 'user_fo_id'        => 'required',
            'mitra'             => 'required',
            'email_mitra'       => 'required|email',
            'no_hp_mitra'       => 'required'
            
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
            // todo:ganti value user_fo_id
            'user_fo_id'        => 1, 
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

        //render view with himpunan
        return view('admin.himpunans.show', compact('himpunan'));
    }

    public function edit(string $id): View
    {
	//get himpunan by ID
    $himpunan = Himpunan::findOrFail($id);

    //render view with himpunan
    return view('admin.himpunans.edit', compact('himpunan'));
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
            // 'user_fo_id'        => 'required',
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
            // todo:ganti value user_fo_id
            'user_fo_id'        => 1, 
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

    //delete himpunan
    $himpunan->delete();

    //redirect to index
    return redirect()->route('admin.himpunans.index')->with(['success' => 'Data Berhasil Dihapus!']);
	
    }

}