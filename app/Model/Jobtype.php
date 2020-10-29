<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model
{
    //
    // protected $with = ['jobdetails'];

    protected $fillable =[
        'name',
    ];
    public function jobdetails(){
        return $this->hasMany(Jobdetail::class,'jobtype_id','id');
    }
}
