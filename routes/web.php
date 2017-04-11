<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Subject;
use App\Student;
use App\StudentSubject;
use App\User;


//Student Route
Route::get('/', [
	'as'=> 'index',
	'uses'=> 'studentController@main'
]);

Route::get('/subject/{subject_id}', [
	'as'=> 'subject',
	'uses'=> 'studentController@subject'
]);
Route::get('/subject/{subject_id}/new-student', [
	'as'=> 'new_student',
	'uses'=> 'studentController@new_student'
]);

Route::post('/subject/{subject_id}/new-student', [
	'as'=> 'add_student',
	'uses'=> 'studentController@add_student'
]);

Route::get('/about', [
	'as'=> 'about',
	'uses'=> 'studentController@about'
]);

Route::get('/contact', [
	'as'=>'contact',
	'uses'=> 'studentController@contact'
]);

//Auth Route

Route::get('/auth/login', [
	'as'=> 'staff_login',
	'uses'=> 'authController@staff_login'
]);

Route::post('/auth/login', [
	'as'=> 'login_check',
	'uses'=> 'authController@login_check'
]);
Route::get('/register', [
	'as'=> 'register',
	'uses'=> 'authController@register'
]);

Route::post('/register', [
	'as'=> 'checkRegister',
	'uses'=> 'authController@checkRegister'
]);

//Staff/Teachers Route

Route::get('/staff', [
	'as'=> 'staff',
	'uses'=> 'staffController@main'
]);
Route::get('/logout', [
	'as'=> 'logout',
	'uses'=> 'staffController@logout'
]);
Route::get('/staff/{subject_id}', [
	'as'=> 'staff_students',
	'uses'=> 'staffController@staff_students'
]);

Route::post('/staff', [
	'as'=> 'add_subject',
	'uses'=> 'staffController@add_subject'
]);




Route::get('/addSubject', function(){
	$user = User::find(2);

$subject = new Subject;
$subject->code = 'Fil 112';
$subject->description = 'Pagsulat at desiplina';

$user->subject()->save($subject);
});

Route::get('/addStudent', function(){
	$student = new student;
	$student->id = 23232;
	$student->lname = 'asdsa';
	$student->fname = 'sada';
	$student->mname = 'dasad';
	$student->dob = '20/11/1990';
	$student->course = 'BSCS';
	$student->year = 2;
	$student->email = 'emai232l1@yahoo.com';
	$student->contact = '+639546978';
	$student->address = 'duol layo unahan bais city';
	$student->campus = 1;
	$student->save();

});

Route::get('/student_subject', function(){
	$stud_subj = new StudentSubject;
	$stud_subj->student_id = 23232;
	$stud_subj->subject_id = 3;
	$stud_subj->save();
});

Route::get('/addUser', function(){
$user = new User;

$user->lname = '22133';
$user->fname = 'sda21321sd';
$user->mname = 'asew321ada';
$user->email = 'emai21233@yahoo.com';
$user->address = 'ba12321312sa city near fear';
$user->contact = '3988';
$user->username = 'user';
$user->password = bcrypt('user');
$user->save();  
});



