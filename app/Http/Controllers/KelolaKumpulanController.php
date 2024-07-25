<?php

namespace App\Http\Controllers;

//import model
use App\Models\UserMember;
use App\Models\Kumpulan;
use App\Models\KumpulanAnggota;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;


class KelolaKumpulanController extends Controller
{
  public function index($id) : View
  {
    $kumpulans = Kumpulan::where('himpunan_id', $id)->oldest()->paginate(10);

    return view('fo.himpunansaya.kelolakumpulan.index', ['himpunan_id' => $id, 'kumpulans' => $kumpulans]);
  }

  public function create(request $request, $id) : View
  {
    $usermembers = UserMember::where('himpunan_id', $id)->latest()->paginate(10);

    $listusermemberid = UserMember::where('himpunan_id', $id)->pluck('id')->all();

    $datas = $request->session()->get('data', []);

    if (count($datas) == 0) {
      foreach ($listusermemberid as $usermemberid) {
        $datas[] = (object) [
          'himpunan_id' => $id,
          'is_edited' => false,
          'user_member_id' => $usermemberid,
          'absensi' => '',
          'pencairan_pinjaman' => 0,
          'takaful' => 0,
          'angsuran' => 0,
          'simpanan_anggota_masuk' => 0,
          'simpanan_anggota_keluar' => 0,
          'simpanan_kelompok_masuk' => 0,
          'simpanan_kelompok_keluar' => 0,
          'simpanan_sukarela_masuk' => 0,
          'simpanan_sukarela_keluar' => 0,
          'infaq' => 0,
          'iuran_anggota' => 0,
          'lainnya' => 0,
      ];
      }
  
      $request->session()->put('data', $datas);
    }

    return view('fo.himpunansaya.kelolakumpulan.create', ['himpunan_id' => $id, 'usermembers' => $usermembers]);
  }

  public function store(request $request, $id) : RedirectResponse
  {
    $request->validate([
      'tanggal' => 'required',
      'judul_materi' => 'required'
    ]);

    $kumpulan = Kumpulan::create([
      'tanggal'      => $request->tanggal,
      'judul_materi' => $request->judul_materi,
      'himpunan_id' => $id
    ]);

    $datas = $request->session()->get('data', []);

    foreach($datas as $data) {
      KumpulanAnggota::create([
          'kumpulan_id' => $kumpulan->id,
          'user_member_id' => $data->user_member_id,
          'absensi' => $data->absensi,
          'pencairan_pinjaman' => $data->pencairan_pinjaman,
          'takaful' => $data->takaful,
          'angsuran' => $data->angsuran,
          'simpanan_anggota_masuk' => $data->simpanan_anggota_masuk,
          'simpanan_anggota_keluar' => $data->simpanan_anggota_keluar,
          'simpanan_kelompok_masuk' => $data->simpanan_kelompok_masuk,
          'simpanan_kelompok_keluar' => $data->simpanan_kelompok_keluar,
          'simpanan_sukarela_masuk' => $data->simpanan_sukarela_masuk,
          'simpanan_sukarela_keluar' => $data->simpanan_sukarela_keluar,
          'infaq' => $data->infaq,
          'iuran_anggota' => $data->iuran_anggota,
          'lainnya' => $data->lainnya,
      ]);
    }

    $request->session()->forget("data");

    return redirect()->route('fo.kelolakumpulan.index', $id)->with(['success' => 'Data Berhasil Disimpan!']);
  }

  public function edit($id) : View
  {
    $kumpulan = Kumpulan::findOrFail($id);
    $kumpulananggotas = KumpulanAnggota::where('kumpulan_id', $id)->orderBy('created_at', 'asc')->paginate(10);

    return view('fo.himpunansaya.kelolakumpulan.edit', compact('kumpulan', 'kumpulananggotas'));
  }

  public function update(request $request, $id) : RedirectResponse
  {
    $kumpulan = Kumpulan::findOrFail($id);

    $request->validate([
      'tanggal' => 'required',
      'judul_materi' => 'required'
    ]);

      Kumpulan::findOrFail($id)->update([
      'tanggal'      => $request->tanggal,
      'judul_materi' => $request->judul_materi
    ]);
    return redirect()->route('fo.kelolakumpulan.index', $kumpulan->himpunan_id)->with(['success' => 'Data Berhasil Diubah!']);
  }

  public function createanggota(request $request, $id) : View
  {
    $usermember = UserMember::findOrFail($id);

    $datas = $request->session()->get('data', []);

    $userdata = [];
    foreach($datas as $data) {
      if ($data->user_member_id == $id) {
        $userdata = $data;
      }
    }
    
    return view('fo.himpunansaya.kelolakumpulan.kumpulananggota.create', compact('usermember', 'userdata'));
  }

  public function storeanggota(Request $request, $id): RedirectResponse
    {
      $request->validate([
        'pencairan_pinjaman' => 'integer|min:0',
        'takaful' => 'integer|min:0',
        'angsuran' => 'integer|min:0',
        'simpanan_anggota_masuk' => 'integer|min:0',
        'simpanan_anggota_keluar' => 'integer|min:0',
        'simpanan_kelompok_masuk' => 'integer|min:0',
        'simpanan_kelompok_keluar' => 'integer|min:0',
        'simpanan_sukarela_masuk' => 'integer|min:0',
        'simpanan_sukarela_keluar' => 'integer|min:0',
        'infaq' => 'integer|min:0',
        'iuran_anggota' => 'integer|min:0',
        'lainnya' => 'integer|min:0',
      ]);

      $datas = $request->session()->get('data', []);

      $himpunan_id = 0;
      
      foreach($datas as $data) {
      if ($data->user_member_id == $id) {
        $data->absensi = $request->absensi;
        $data->pencairan_pinjaman = $request->pencairan_pinjaman;
        $data->takaful = $request->takaful;
        $data->angsuran = $request->angsuran;
        $data->simpanan_anggota_masuk = $request->simpanan_anggota_masuk;
        $data->simpanan_anggota_keluar = $request->simpanan_anggota_keluar;
        $data->simpanan_kelompok_masuk = $request->simpanan_kelompok_masuk;
        $data->simpanan_kelompok_keluar = $request->simpanan_kelompok_keluar;
        $data->simpanan_sukarela_masuk = $request->simpanan_sukarela_masuk;
        $data->simpanan_sukarela_keluar = $request->simpanan_sukarela_keluar;
        $data->infaq = $request->infaq;
        $data->iuran_anggota = $request->iuran_anggota;
        $data->lainnya = $request->lainnya;
        $data->is_edited = true;

        $himpunan_id = $data->himpunan_id;
      }
    }

      $request->session()->put('data', $datas);
        
      //redirect to create
      return redirect()->route('fo.kelolakumpulan.create', $himpunan_id)->with(['success' => 'Data Berhasil Disimpan!']);
    }

  public function editanggota($id) : View
  {
    $kumpulananggota = KumpulanAnggota::findOrFail($id);

    return view('fo.himpunansaya.kelolakumpulan.kumpulananggota.edit', compact('kumpulananggota'));
  }

  public function updateanggota(Request $request, $id): RedirectResponse
  {
    $request->validate([
      'pencairan_pinjaman' => 'integer|min:0',
      'takaful' => 'integer|min:0',
      'angsuran' => 'integer|min:0',
      'simpanan_anggota_masuk' => 'integer|min:0',
      'simpanan_anggota_keluar' => 'integer|min:0',
      'simpanan_kelompok_masuk' => 'integer|min:0',
      'simpanan_kelompok_keluar' => 'integer|min:0',
      'simpanan_sukarela_masuk' => 'integer|min:0',
      'simpanan_sukarela_keluar' => 'integer|min:0',
      'infaq' => 'integer|min:0',
      'iuran_anggota' => 'integer|min:0',
      'lainnya' => 'integer|min:0',
]);

    $kumpulananggota = KumpulanAnggota::findOrFail($id);

      KumpulanAnggota::findOrFail($id)->update([
      'absensi' => $request->absensi,
      'pencairan_pinjaman' => $request->pencairan_pinjaman,
      'takaful' => $request->takaful,
      'angsuran' => $request->angsuran,
      'simpanan_anggota_masuk' => $request->simpanan_anggota_masuk,
      'simpanan_anggota_keluar' => $request->simpanan_anggota_keluar,
      'simpanan_kelompok_masuk' => $request->simpanan_kelompok_masuk,
      'simpanan_kelompok_keluar' => $request->simpanan_kelompok_keluar,
      'simpanan_sukarela_masuk' => $request->simpanan_sukarela_masuk,
      'simpanan_sukarela_keluar' => $request->simpanan_sukarela_keluar,
      'infaq' => $request->infaq,
      'iuran_anggota' => $request->iuran_anggota,
      'lainnya' => $request->lainnya,
]);
    //redirect to create
    return redirect()->route('fo.kelolakumpulan.edit', $kumpulananggota->kumpulan_id)->with(['success' => 'Data Berhasil Disimpan!']);
  }

  
}