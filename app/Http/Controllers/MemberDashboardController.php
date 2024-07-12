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

class MemberDashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get data


        //render view
        return view('member.dashboard.index');
    }
}