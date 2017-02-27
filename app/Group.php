<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    protected $fillable = ['name', 'image_id'];

    public function generation(){
      return $this->belongsTo('App\Generation');
    }

    public function students(){
      return $this-hasMany('App\Student');
}
