<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeacherLoad;
use App\Section;
use App\Subject;



class TeacherLoadsController extends Controller
{
    public function index()
    {
    	$teacherloads = TeacherLoad::all();
        $sections = Section::all();
        $subjects = Subject::all();

    	return view('teacher-loads.index',compact('sections','subjects'))->with('teacherloads', $teacherloads);
    }
    public function store()
    {
        request()->validate([
            'subject_id' => 'required',
            'section_id' => 'required',
            
        ]);
        
    	$teacherload = new TeacherLoad;
    	$teacherload->subject_id = request()->subject_id;
        $teacherload->section_id = request()->section_id;
    	$teacherload->save();

    	return redirect('/teacher-loads');
    }
    
   
    public function edit(TeacherLoad $teacherload)
    {
        $sections = Section::all();
        return view('teacher-loads.edit',compact('sections','teacherload'));
    }

    public function update(TeacherLoad $teacherload)
    {
        $teacherload->name = request()->name;
        $teacherload->save();
        return redirect('/teacher-loads');
    }


}
