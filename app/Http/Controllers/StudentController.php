<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

	public function index(){
		return view('100052.student');
	}
    
		public function createStudent(Request $request)
	{
		//create a new student record
		$validateData= $request->validate([
			'FullName'=>'required',
			'Address'=>'required',
			'date_of_birth'=>'required',
		]);
		
		Student::create($request->all());
		return redirect('/student');
		
		/*
		var_dump(request('FullName'));
		var_dump(request('Address'));
		var_dump(request('date_of_birth'));
		*/

		

	}


}
