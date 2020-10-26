<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobdetail extends Model
{
    //
    protected $fillable =[
        'name', 'image', 'content', 'jobtype_id'
    ];
    public function jobtype(){
        $this->belongsTo('App\Model\Jobtype');
    }
}
