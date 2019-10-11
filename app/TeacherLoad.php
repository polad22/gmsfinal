<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherLoad extends Model
{
    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function section()
    {
    	return $this->belongsTo(Section::class);
    }
}
