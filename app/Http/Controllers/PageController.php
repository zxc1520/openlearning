<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
        $data = Course::findOrFail($id);

        if (Auth::check()) {
            # code...
            return view('pages.course-detail', [
                "data" => $data,
                "data2" => CourseSection::select('*')
                                            ->where('course_id', '=', $id)
            ]);
        }

        return view('signin')->with('info', 'You May Login First !');
    }

    public function search(Request $request)
    {
        # code...
        if ($request->ajax()) {
            # code...
            $data = Course::where('id', 'LIKE', '%'. $request->search . '%')
                    ->orWhere('user_id', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('category', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $request->search . '%')
                    ->get();

            $output = '';
                $output .= '
                <img src="{{ asset("img/course-1.jpg")}}" class="img-fluid" alt="...">
                    <div class="course-content">
                ';
                foreach ($data as $d=>$v) {
                    # code...
                    $output .=
                    '
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>' . $v->category . '</h4>
                            <p class="price">FREE</p>
                        </div>
                        <h3><a href="/courses/' . $v->id . '">'. $v->title . '</a></h3>
                        <p>'. $v->description .'</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span>'. $v->user->name . '</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-heart"></i>&nbsp;'. $v->likes .'
                            </div>
                        </div>
                    ';
                }
                $output .= '</div>';


            return Response($output);
        }
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
                "data" => Course::select('*')
                            ->where('user_id', '=', auth()->user()->id)
                            ->get()
            ]);
        } else {
            return redirect('/signin')
                    ->with('error', 'You May Logged in as instructor !');
        }

    }

    // Course Section
    public function CourseSection()
    {
        # code...

        return view('dashboard.coursection', [
            "data" => CourseSection::all()
        ]);
    }

    public function CoursecAdd($id)
    {
        # code...
        $data = Course::find($id);
        return view('dashboard.coursecadd', compact('data'));
    }

    public function CoursecAddSec(Request $request)
    {
        # code...
        $validate = $request->validate([
            "course_id" => "required",
            "sec_title" => "required|max:255",
            "sec_desc"  => "required|max:255",
            "sec_media" => "required"
        ]);

        if ($validate) {
            # code...
            CourseSection::create($validate);

            return redirect('/coursection')
                    ->with('toast_success', 'Section Created Successfully !');
        } else {
            return back()
                    ->with('error', 'something went wrong !');
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
