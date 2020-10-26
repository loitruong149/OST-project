<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    //
    protected $fillable =[
        'name',
    ];
    public function jobdetail(){
        $this->hasOne('App\Model\Jobdetail');
    }
}
