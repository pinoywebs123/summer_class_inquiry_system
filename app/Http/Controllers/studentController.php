<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\StudentSubject;

class studentController extends Controller
{
    public function main(){
    	$subjects = Subject::all(); 

    	return view('student.main', compact('subjects'));
    }

    public function subject($subject_id){
    	$subject = Subject::find($subject_id);
    	$students = StudentSubject::where('subject_id',$subject_id)->paginate(10);
    	return view('student.subject', compact('subject','students'));
    }

    public function new_student($subject_id){
		$subject = Subject::find($subject_id);
		return view('student.newstudent',compact('subject'));
    }

    public function add_student(Request $request, $subject_id){
    	$find_subject = Subject::find($subject_id);
    	$this->validate($request, [
    		'lname'=> 'required|min:2|max:12',
    		'fname'=> 'required|min:2|max:12',
    		'mname'=> 'required|min:2|max:12',
    		'dob'=> 'required|max:20',
    		'addr'=> 'required|max:150',
    		'student_id'=> 'required|max:20',
    		'course'=> 'required|max:5',
    		'year'=> 'required|max:5',
    		'campus'=> 'required|max:5',
    		'email'=> 'required|max:30',
    		'contact'=> 'required|max:15',
    	]);

    	if($find_subject){
            $find_student_id = Student::find($request['student_id']);
            if($find_student_id){

                return redirect()->back()->with('id_error', 'Student ID Already Exist');
            }
            $student = new Student;
            $student->id = $request['student_id'];
            $student->lname = $request['lname'];
            $student->fname = $request['fname'];
            $student->mname = $request['mname'];
            $student->lname = $request['lname'];
            $student->dob = $request['dob'];
            $student->address = $request['addr'];
            $student->course = $request['course'];
            $student->year = $request['year'];
            $student->campus = $request['campus'];
            $student->email = $request['email'];
            $student->contact = $request['contact'];
            $student->save();

            $find_subject = Student::find($request['student_id']);
            $StudentSubject = new StudentSubject;
            $StudentSubject->subject_id = $subject_id;
            $find_subject->student_subject()->save($StudentSubject);

            return redirect()->route('subject', ['subject_id'=> $subject_id])->with('success', 'You have been added to this subject for this summer class');
        }else{
            return 'we are very sorry we failed to find that suject you want to enroll';
        }
    	
    }

    public function about(){
        return view('student.about');
    }
    public function contact(){
        return view('student.contact');
    }

}
