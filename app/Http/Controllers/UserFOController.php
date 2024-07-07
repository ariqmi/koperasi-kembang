<?php

namespace App\Http\Controllers;

//import model user field officer
use App\Models\UserFO; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

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

        //render view with fo
        return view('admin.fieldofficers.index', compact('userfos'));
    }

}