<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devise extends Model
{
  public function vehicles(){
    return $this->hasMany(Vehicle::class);
  }
  public $fillable = ['libelle','price'];
}
