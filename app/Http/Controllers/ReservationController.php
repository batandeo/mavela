<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use App\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
  public function index(Request $request){

    $vehicle = Vehicle::findOrFail($request);
    $vehicle->price = $request->input('price');
    $price = $vehicle->price;
    Session()->flash('price',$price);
    //dd($vehicle->price );

    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->lastname= $request->input('lastname');
    $user->phone_number = $request->input('phone_number');
    $user->age = $request->input('age');
    $user->adress = $request->input('adress');
    $user->country = $request->input('country');
    $user->city = $request->input('city');
    $user->region = $request->input('region');

    $name = $user->name;
    $lastname = $user->lastname;
    Session()->flash('name',$name);
    Session()->flash('lastname',$lastname);


    $reservation = new Reservation();
    //dd($vehicle);
    $reservation->date_rent = $request->input('date_rent');
    $reservation->date_return = $request->input('date_return');
    $reservation->time_pick = $request->input('time_pick');
    $reservation->location_pick = $request->input('location_pick');
    $reservation->drop_off_location_time = $request->input('drop_off_location_time');
    $reservation->name = $request->input('name');
    //$reservation->email =


    $date_return = $reservation->date_return;
    $date_rent = $reservation->date_rent;
    $time_pick = $reservation->time_pick;
    $location_pick = $reservation->location_pick;
    $drop_off_location_time = $reservation->drop_off_location_time;


    //dd($date_return);
    $conver1 = Carbon::parse($date_rent);
    $conver2 = Carbon::parse($date_return);
    $diff = $conver1->diffInDays($conver2);
    $tot = $diff*$vehicle->price;
    Session()->flash('diff',$diff);
    Session()->flash('time_pick',$time_pick);
    Session()->flash('tot',$tot);

    return view('reservations.index');
    // dd($vehicles);
  }
}
