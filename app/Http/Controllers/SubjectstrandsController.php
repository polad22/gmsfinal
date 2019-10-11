<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjectstrand;
use App\Subject;
use App\Strand;


class SubjectstrandsController extends Controller
{
    public function index()
    {
    	$subjectstrands = Subjectstrand::all();
    	return view('subject-strands.index')->with('subjectstrands', $subjectstrands);
    }
    public function create()
    {
        $subjects = Subject::all();
        $strands = Strand::all();

        return view('subject-strands.create',compact('subjects','strands'));
    	
    }
     public function store()
    {
        request()->validate([
            'subject_id' => 'required',
            'strand_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required',

         
            
        ]);
        
    	$subjectstrand = new Subjectstrand;
    	$subjectstrand->subject_id = request()->subject_id;
        $subjectstrand->strand_id = request()->strand_id;
        $subjectstrand->semester = request()->semester;
        $subjectstrand->grade_level = request()->grade_level;
        
    	$subjectstrand->save();

    	return redirect('/subject-strands');
    }
    
   
    public function edit(Subjectstrand $subjectstrand)
    {
        return view('subject-strands.edit')->with('subjectstrand', $subjectstrands);
    }

    public function update(Subjectstrand $subjectstrand)
    {
        $subjectstrand->name = request()->name;
        $subjectstrand->save();
        return redirect('/subject-strands');
    }


}
