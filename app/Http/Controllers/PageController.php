<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PageController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('index');
    }

    public function courses()
    {
        # code...
        return view('pages.courses', [
            "data" => Course::all()
        ]);
    }

    public function CourseDetail($id)
    {
        # code...
        $data = Course::find($id);

        if (Auth::check()) {
            # code...
            return view('pages.course-detail', compact('data'));
        }

        return view('signin')->with('info', 'You May Login First !');
    }

    public function HomeInstructor()
    {
        # code...
        
        return view('pages.instructor', [
            "data" => User::select('name', 'special', 'desc')
                            ->where('is_admin', '=', '1')
                            ->get()
        ]);
    }

    public function instructor()
    {
        # code...
        
        if (Auth::check()) {
            # code...
            return view('dashboard.dashboar', [
                "data" => Course::all()
            ]);
        } else {
            return redirect('/signin')
                    ->with('error', 'You May Logged in as instructor !');
        }
        
    }

    public function profile()
    {
        # code...
        return view('pages.profile');
    }

    public function setting()
    {
        # code...
        return view('pages.setting');
    }

    public function change(Request $request)
    {
        # code...
        $request->validate([
            "curr_password" => "required",
            "password" => "required|min:3|confirmed"
        ]);

        if (! Hash::check($request->curr_password, auth()->user()->password)) {
            throw ValidationException::withMessages([
                "curr_password" => "Current Password Didn't match with our record !"
            ]);
        } else {

            User::find(auth()->user()->id)->update(["password" => Hash::make($request->password)]);

            return back()
            ->with('success', 'Password telah diupdate');
        }

    }
}
