<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('dashboard.course');
    }

    public function store(Request $request)
    {
        # code...
        $validate = $request->validate([
            "user_id" => "required",
            "title" => "required|min:8|max:255",
            "category" => "required|min:8|max:255",
            "description" => "required|min:8",
            "requirements" => "required|min:8",
            "content" => "required|min:8",
        ]);

        if ($validate) {
            # code...
            Course::create($validate);

            return redirect('/dashboard')
                    ->with('toast_success', 'Data Recorded Successfully');
        } else {
            return back()
                    ->with('error', 'Something went wrong !');
        }

    }

    public function show($id)
    {
        # code...
        $data = Course::find($id);

        return view('dashboard.course', compact('data'));
    }

    public function destroy($id)
    {
        # code...
        $data = Course::destroy($id);

        if ($data) {
            # code...
            return redirect('/dashboard')
                    ->with('toast_success', 'Course Deleted');
        } else {
            return back()
                    ->with('toast_error', 'Something Went Wrong');
        }
    }
}
