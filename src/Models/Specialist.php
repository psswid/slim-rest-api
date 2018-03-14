<?php

namespace FaultWall\Models;

use Illuminate\Database\Eloquent\Model;
use FaultWall\Models\Issue;

class Specialist extends Model{

  protected $fillable = [
    'email',
    'password',
    'first_name',
    'last_name',
    'street',
    'speciality',
    'city',
    'state',
    'zip',
    'phone'
  ];

  public function issues(){

  return $this->hasMany(Issue::class);
  }

}
