<?php

namespace FaultWall\Models;

use Illuminate\Database\Eloquent\Model;
use FaultWall\Models\Customer;
use FaultWall\Models\Specialist;

class Issue extends Model{

  protected $fillable = [
    'title',
    'category',
    'description'
  ];


  public function customer_id(){

    return $this->hasOne(Customer::class);
  }

  public function specialist_id(){

    return $this->hasOne(Specialist::class);
  }

  public function picked(){
    //tutaj bedzie zmiana na is_picked kiedy specialist kliknie ze is picked
  }

  public function solved(){
    //tutaj bedzie zmiana na is_solved kiedy klient kliknie ze is solved
  }

}
