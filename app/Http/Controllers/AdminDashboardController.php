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


        //render view
        return view('admin.dashboard.index');
    }
}