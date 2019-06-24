<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function students()
    {
        return $this->belongsTo('App\Student');
    }
     protected $fillable = ['id', 'amount', 'date_of_payment'];
}
