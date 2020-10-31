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

public function user(){

    return $this->belongsTo('App\User'); // ng dung thuoc posts
}

public function Jobtype(){

    return $this->belongsTo('App\Model\Jobtype'); // lay ten nganh nghe
}







    

}
