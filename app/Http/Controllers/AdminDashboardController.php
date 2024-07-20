<?php

namespace App\Http\Controllers;

//import model
use App\Models\Himpunan;
use App\Models\UserFO;

//import return type View
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get jumlah himpunan dan fo
        $jumlahHimpunan = Himpunan::count();
        $jumlahFO = UserFO::count();

        //render view
        return view('admin.dashboard.index', ['jumlahHimpunan' => $jumlahHimpunan, 'jumlahFO' => $jumlahFO]);
    }
}