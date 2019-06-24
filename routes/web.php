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
use Illuminate\Support\Facades\Input;
use App\Fees;

Route::get('/', function () {
    return view('100052.welcome');
});
Route::get('/student','StudentController@index');
Route::post('/student','StudentController@createStudent');


Route::get('/fees','FeesController@index');
Route::post('/fees','FeesController@pay');

Route::get('/search','SearchController@index');
Route::post('/search',function(){

	//search
		$studentID =Input::get('studentID');
		$student = Fees::where('id','LIKE','%'.$studentID.'%')->get();
		$query = DB::table('fees')->where('id',$studentID)->SUM('amount');

		if(count($student)>0){
			return view('100052.search')->withDetails($student)->withQuery($studentID)->withMessage($query);
		}
		else return view('100052.search')->withMessage('No details found.Type Student ID again');
});

