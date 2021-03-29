<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['lname', 'fname', 'job', 'insurance_id'];

    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }

    public function children(){
        return $this->hasMany('App\Children');
    }
}
