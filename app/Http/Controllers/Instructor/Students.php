<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\CourseMaterial;
use Illuminate\Http\Request;
use App\Models\CoursePurchase;

class Students extends Controller
{
    public function index()
    {
        //get lists of students
        $students = (new CoursePurchase())->getStudents();
        return view('instructor.students', compact('students'));
    }

    public function sendFile($id)
    {
        //get lists of students
        $courses = (new CoursePurchase())->getCourses();
        $students = (new CoursePurchase())->getStudents();
        $files = (new CourseMaterial())->getFiles($id);
        return view('instructor.send-file', compact('students', 'id', 'courses', 'files'));
    }

    public function uploadFile(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'course_id' => 'required',
            'file' => 'required|file|max:2048',

        ]);

        $file = $request->file('file')->store('uploads/materials');

        $coursePurchase = new CourseMaterial;
        $coursePurchase->course_id = $request->course_id;
        $coursePurchase->title = $request->title;
        $coursePurchase->description = $request->description;
        $coursePurchase->user_id = $id;
        $coursePurchase->instructor_id = auth()->user()->id;
        $coursePurchase->file = $file;
        $coursePurchase->save();

        return redirect()->back()->with('success', 'File uploaded successfully');
    }
}
