<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SignupController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('signup');
    }

    public function store(Request $request)
    {
        # code...
        $rules = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:dns',
            'special' => 'min:2',
            'desc' => 'min:2',
            'password' => 'required|min:3|max:255',
            'is_admin' => 'min:1'
        ]);

        $rules['password'] = bcrypt($rules['password']);

        if ($rules) {
            # code...
            User::create($rules);

            return redirect('/signin')
                    ->with('success', 'Data created successfully, now you must login');
        } else {
            return back()
                    ->with('error', 'Something Went Wrong');
        }
    }
}
