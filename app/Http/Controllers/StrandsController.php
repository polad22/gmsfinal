<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strand;


class StrandsController extends Controller
{
    public function index()
    {
    	$strands = Strand::all();
    	return view('strands.index')->with('strands', $strands);
    }
    public function create()
    {
    	return view('strands.create');
    }
     public function store()
    {
        request()->validate([
            'name' => 'required',
            
        ]);
        
    	$strand = new Strand;
    	$strand->name = request()->name;
    	$strand->save();

    	return redirect('/strands');
    }
    
   
    public function edit(Strand $strand)
    {
        return view('strands.edit')->with('strand', $strands);
    }

    public function update(Strand $strand)
    {
        $strand->name = request()->name;
        $strand->save();
        return redirect('/strands');
    }


}
