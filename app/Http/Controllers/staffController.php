<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subject;
use App\StudentSubject;
use App\User;

class staffController extends Controller
{

    public function main(){
    	$subjects = Subject::where('user_id', Auth::id())->paginate(6);
    	return view('staff.main', compact('subjects'));
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('staff_login');
    }

    public function staff_students($subject_id){
    	$subject = Subject::find($subject_id);
    	$students = StudentSubject::where('subject_id', $subject_id)->get();
    	return view('staff.students', compact('students','subject'));
    }

    public function add_subject(Request $request){
    	$this->validate($request, [
    		'code'=> 'required|max:10',
    		'description'=> 'required|max:100'
    	]);

    	$user = User::find(Auth::id());
    	$subject = new subject;
    	$subject->code = $request['code'];
    	$subject->description = $request['description'];
    	$user->subject()->save($subject);

    	return redirect()->back()->with('subject', 'You have successfully added your new subject');

    }
}
