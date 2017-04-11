<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function student_subject(){
    	return $this->hasOne('App\StudentSubject');
    }
}
