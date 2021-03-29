<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    protected $fillable = ['employee_id', 'lname', 'fname', 'insurance_id'];

    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }

    public function employee(){
        return $this->belongsTo('App\Employee');
    }
}
