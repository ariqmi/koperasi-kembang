<?php

namespace App\Http\Controllers;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class FODashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get jumlah himpunan dan anggota


        //render view
        return view('fo.dashboard.index');
    }
}