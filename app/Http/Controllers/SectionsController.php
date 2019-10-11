<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;


class SectionsController extends Controller
{
    public function index()
    {
    	$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
    }
    public function create()
    {
    	return view('sections.create');
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            'is_active' => 'required',
            
        ]);
        
    	$section = new Section;
    	$section->name = request()->name;
        $section->is_active = request()->is_active;
    	$section->save();

    	return redirect('/sections');
    }
    
   
    public function edit(Section $section)
    {
        return view('sections.edit')->with('section', $section);
    }

    public function update(Section $section)
    {
        $section->name = request()->name;
        $section->save();
        return redirect('/sections');
    }


}
