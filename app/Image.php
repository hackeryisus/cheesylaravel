<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = [ 'url' ];

    public function school(){
      return $this->belongsTo('App\School');
    }

    public function generation(){
      return $this->belongsTo('App\Generation');
    }

    public function group(){
      return $this->belongsTo('App\Group');
    }

    public function student(){
      return $this->belongsTo('App\Student');
    }
}
