<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = ['name'];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function children(){
        return $this->hasMany('App\Children');
    }
}
