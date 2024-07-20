<?php


namespace App\Http\Controllers;

//import model
use App\Models\Himpunan;
use App\Models\User;
use App\Models\UserFO;
use App\Models\UserMember;

//import return type View
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;


class FODashboardController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $userfo = UserFO::where('user_id', $userId)->firstOrFail();

        $listhimpunanid = Himpunan::where('user_fo_id', $userId)->pluck('id')->all();

        $jumlahHimpunan = Himpunan::where('user_fo_id', $userId)->count();
        $jumlahAnggota= UserMember::whereIn('himpunan_id', $listhimpunanid)->count();


        //render view
        return view('fo.dashboard.index', ['jumlahHimpunan' => $jumlahHimpunan, 'userfo' => $userfo, 'user' => $user, 'jumlahAnggota' => $jumlahAnggota]);
    }
}