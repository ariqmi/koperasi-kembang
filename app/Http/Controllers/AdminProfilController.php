<?php

namespace App\Http\Controllers;

use App\Models\User;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;


class AdminProfilController extends Controller
{
    public function show(): View
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        return view('admin.profil.show', compact('user'));
    }

    public function edit(): View
    {
            $userId = Auth::id();
            $user = User::findOrFail($userId);
    
            return view('admin.profil.edit', compact('user'));
    }
        
    public function update(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
       
        $request->validate([
            'username' => 'required|unique:users,username,'.$userId,
            'password' => 'nullable|min:8|confirmed',
        ]);
        
        if($request->password != null) {
            $user->update([
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $user->update([
                'username' => $request->username
            ]);
        }

        

        return redirect()->route('admin.dashboard.index')->with(['success' => 'Profil Anda Berhasil Diperbarui.']);
    }
}