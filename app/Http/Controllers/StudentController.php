<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\subjects;

class StudentController extends Controller
{
    public function index()
    {
        $students = students::all();
        $subjects = subjects::all();

        return view('index',compact('students', 'subjects'));
    }

    public function create()
    {
        $subjects = subjects::all();
        return view('create',compact('subjects'));
    }

    public function store(Request $request)
    {
        //validate data
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'subject_id' => 'required'
        ]);

        $student = new students();
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->subject_id = $request->subject_id;

        $student->save();
        return back()->withSuccess('Student created successfully !!!!');
    }
} 
