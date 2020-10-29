<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    //
    protected $table = 'manages';

    public function jobdetail(){
        $this->belongsTo('App\Model\Jobdetail');
    }

    public function user(){
        $this->belongsTo('App\User');
    }
}
