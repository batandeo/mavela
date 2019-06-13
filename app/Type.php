<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function vehicles(){
      return $this->hasMany(Vehicle::class);
    }
    public $fillable = ['title','picture','price','description'];
}
