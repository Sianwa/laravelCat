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
		//create a new student record
		$validateData= $request->validate([
			'id'=> 'required|exists:student',
			'amount'=>'required',
			'date_of_payment'=>'required',
		]);
		
			Fees::create($request->all());
		return redirect('/fees')->with('success','Fees payed');  
		

	}
	public function search(Request $request){
		$search=$request->get('search');
		$field=$request->get('field') != '' ? $request->get('field') : 'id';
		$customers= fees::where('id','like','%'.$search . '%');

		return view('100052.fees',compact('customers'));
	}
	

}
