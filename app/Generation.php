<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $table = "generations";

    protected $fillable = [ 'name', 'school_id', 'image_id' ];

    public function school(){
      return $this->belongsTo('App\School');
    }

    public function groups(){
      return $this->hasMany('App\Group');
    }

    public function image(){
      return $this->hasOne('App\Image');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }
}
