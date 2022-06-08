<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        return view('pages.course-detail', compact('data'));
    }

    public function HomeInstructor()
    {
        # code...
        //$data = DB::table('users')->where('is_admin', '', '1');
        return view('pages.instructor', [
            "data" => User::where('users', '1')
        ]);
    }

    public function instructor()
    {
        # code...
        return view('dashboard.dashboar', [
            "data" => Course::all()
        ]);
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
