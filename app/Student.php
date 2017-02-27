<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= "students";

    protected $fillable = [ 'fname', 'lname', 'email', 'phonenumber', 'facebookuser', 'facebooklink', 'group_id', 'image_id' ];

    public function group(){
      return $this->belongsTo('App\Group');
    }
}
