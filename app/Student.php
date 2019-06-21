<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'id';
    protected $table='students';
    //specifies attributes to be posted in db
    protected $fillable =['FullName','Address','date_of_birth'];

    //Definig the one to many relationship

    public function feespay(){
    	return $this->hasMany('App\Fees');
    }
}
