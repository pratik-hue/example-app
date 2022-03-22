<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('students', compact('student'));
    }
     public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->contact_no = $request->input('contact_no');
        $student->age = $request->input('age');
        $student->subject_name = $request->input('subject_name');
        $student->save();
        return redirect()->back()->with('status','Student Added Successfully');
    }
    public function create()
    {
       return view('add-student');

    }
     public function edit($id)
    {
       $student = Student::find($id);
        return view('edit-student',compact('student'));
    }

   public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->contact_no = $request->input('contact_no');
        $student->age = $request->input('age');
        $student->subject_name = $request->input('subject_name');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function destroy($id)
    {


        $success = student::where('id',$id)->delete();
        return redirect()->route('students')->with('status', 'Student Deleted');
    }
   
    
}
