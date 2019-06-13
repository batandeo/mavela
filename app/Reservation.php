<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }
  public function vehicle(){
    return $this->belongsTo(Vehicle::class);
  }

  protected $fillable = ['vehicle_id','user_id','date_rent','date_return','countday','mode_reception','location_pick','time_pick','drop_off_location_time','number_pers','travel_librairy','description','drop-off-location'];
}
