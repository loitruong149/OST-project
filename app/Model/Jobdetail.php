<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobdetail extends Model
{
 


    protected $fillable = [

        'jobtype_id',
        'photo_id',
        'name',
        'content'



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


public function photo(){

    return $this->belongsTo('App\Photo'); // this posts has one photo
}






    

}
