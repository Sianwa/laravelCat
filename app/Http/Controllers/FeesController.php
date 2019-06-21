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
			'Amount'=>'required',
			'date_of_payment'=>'required',
		]);
		
			Fees::create($request->all());
		return redirect('/fees');
		

	}
	

}
