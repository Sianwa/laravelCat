<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
     protected $table='fees';
     protected $fillable =['id','amount','date_of_payment'];

     //Definig the one to many relationship

    public function student(){
    	return $this->belongsTo('App\Student');
    }
}
