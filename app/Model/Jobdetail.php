<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobdetail extends Model
{
    //
    protected $fillable =[
        'name', 'image', 'content', 'jobtype_id'
    ];
    public function jobtypes(){
        return $this->belongsTo(Jobtype::class,'id','jobtype_id');
    }
}
