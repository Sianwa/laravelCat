<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;

class FeesController extends Controller
{
    	public function index()
    {
    	return view('100052.fees');
    }

    	
   public function pay(Request $request)
	{ 
		$validateData= $request->validate([
			'id'=> 'required|exists:students',
			'amount'=>'required',
			'date_of_payment'=>'required',
			
		]);
		
		Fees::create($request->all());
		return redirect('/fees')->with('success','Fee payment succesful');

	}
	/*
	public function search(Request $request){
		$search=$request->get('search');
		$field=$request->get('field') != '' ? $request->get('field') : 'id';
		$customers= fees::where('id','like','%'.$search . '%');

		return view('100052.fees',compact('customers'));
	}
	
*/
}
