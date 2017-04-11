<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentSubject;
class Subject extends Model
{
    public function student_subjects(){
    	return $this->hasOne('App\StudentSubject');
    }
    public function students($subject_id){
    	return $students = StudentSubject::where('subject_id',$subject_id)->count();
    }
    public function teacher(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
