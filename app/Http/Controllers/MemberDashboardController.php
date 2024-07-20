<?php

namespace App\Http\Controllers;

//import model
use App\Models\KumpulanAnggota;
use App\Models\UserMember;

//import return type View
use Illuminate\View\View;


use Illuminate\Support\Facades\Auth;

class MemberDashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $userId = Auth::id();
        $usermember = UserMember::where('user_id', $userId)->firstOrFail();

        $pinjaman = 0;
        $simpanananggota = 0;
        $simpanankelompok = 0;
        $simpanansukarela = 0;

        $pencairanpinjaman = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('pencairan_pinjaman');
        $angsuran = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('angsuran');
        $pinjaman = $pencairanpinjaman - $angsuran;

        $simpanananggotamasuk = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_anggota_masuk');
        $simpanananggotakeluar = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_anggota_keluar');
        $simpanananggota = $simpanananggotamasuk - $simpanananggotakeluar;

        $simpanankelompokmasuk = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_kelompok_masuk');
        $simpanankelompokkeluar = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_kelompok_keluar');
        $simpanankelompok = $simpanankelompokmasuk - $simpanankelompokkeluar;

        $simpanansukarelamasuk = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_sukarela_masuk');
        $simpanansukarelakeluar = KumpulanAnggota::where('user_member_id', $usermember->id)->sum('simpanan_sukarela_keluar');
        $simpanansukarela = $simpanansukarelamasuk - $simpanansukarelakeluar;
        
        
       
        return view('member.dashboard.index', ['pinjaman' => $pinjaman, 'simpanananggota' => $simpanananggota, 'simpanankelompok' => $simpanankelompok, 'simpanansukarela' => $simpanansukarela]);
    }
}