<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = "schools";

    protected $fillable = ['name', 'image_id'];

    public function generations()
    {
        return $this->hasMany('App\Generation');
    }

    public function image()
    {
      return $this->hasOne('App\Image');
    }

}
