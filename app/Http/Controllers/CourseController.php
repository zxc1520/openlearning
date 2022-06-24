<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
            "category" => "required|max:255",
            "description" => "required|min:8",
            "requirements" => "required|max:255",
            "content" => "required",
        ]);

        if ($validate) {
            // dd($validate);

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

        return view('dashboard.course-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        # code...
        $rules = $request->validate([
            "user_id" => "required",
            "title" => "required|min:8|max:255",
            "category" => "required|max:255",
            "description" => "required|min:8",
            "requirements" => "required|max:255",
            "content" => "required",
            "video_link" => "required"
        ]);

        if ($rules) {
            # code...
            Course::where('id', $id)
                    ->update($rules);

            return redirect('/dashboard')
                    ->with('success', 'Course edited successfully !');
        } else {
            return back()
                    ->with('error', 'something went wrong !');
        }
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
