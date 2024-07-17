<?php


namespace App\Http\Controllers;

use App\Models\Himpunan;
use App\Models\User;
use App\Models\UserFO;

//import return type View
use App\Models\UserMember;
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

        $himpunan = Himpunan::where('user_fo_id', $userId)->firstOrFail();
        $jumlahHimpunan = Himpunan::where('user_fo_id', $userId)->count();
        $jumlahAnggota= UserMember::where('himpunan_id', $himpunan->id)->count();


        //render view
        return view('fo.dashboard.index', ['jumlahHimpunan' => $jumlahHimpunan, 'userfo' => $userfo, 'user' => $user, 'jumlahAnggota' => $jumlahAnggota]);
    }
}