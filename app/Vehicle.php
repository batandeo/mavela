<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
  /*public function type(){
    return $this->belongsTo(Type::class);
  }*/
  public function reservations() {
    return $this->hasMany(Reservation::class);
  }

 /* public function devises(){
    return $this->belongsTo(Devise::class);
  }*/
  protected $fillable = ['title','price','picture','fuel','seat','quantity','code','year'/*,'devise_id'*/];

}
