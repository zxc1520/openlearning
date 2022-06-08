<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SigninController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('signin');
    }

    public function authenticate(Request $request)
    {
        # code...
        $rules = [
            'email' => 'required|email:dns',
            'password' => 'required'
        ];

        $credentials = $request->validate($rules);

        if (Auth::attempt($credentials)) {
            # code...
            if(auth()->user()->is_admin == 1) {
                $request->session()->regenerateToken();

                //Alert::success('Berhasil Login');

                return redirect()
                        ->intended('/dashboard')
                        ->withSuccess('Successfully Login');
            } else {
                $request->session()->regenerateToken();

                return redirect()
                        ->intended('/')
                        ->with('success', 'Berhasil Login');
            }
        } else {

            return back()
                    ->with('toast_error', 'Kesalahan login');
        }
    }

    public function signout(Request $request)
    {
        # code...
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/signin')->with('info', 'Anda Telah Logout');
    }
}
