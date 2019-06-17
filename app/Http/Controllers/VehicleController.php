<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Type;
use App\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VehicleController extends Controller
{

  public function index(){
    $vehicles = Vehicle::all();
    return view('vehicles.store', compact('vehicles'));
  }


  public function store(Request $request)
  {

    $rules = [
      'title'=>'required|unique:vehicles',
      'code'=>'required',
      'year'=>'required',
      'picture'=>'image|nullable|max:1999',
      'price'=>'required|integer',
      'fuel'=>'required',
      'seat' => 'required|integer',
      'quantity' => 'required|integer'
    ];

    $customMessages = [
      'required' => 'This data should',
      'unique' => 'This data existe already',
      'integer' => 'Please type number',
    ];

    $this->validate($request, $rules, $customMessages);

    if ($request->hasFile('picture')){

      //recuperer l'extension du fichier
      $filenameWithExt = $request->file('picture')->getClientOriginalName();

      //recupérer le fichier

      $fileName = pathinfo($filenameWithExt,PATHINFO_FILENAME);
      // recupérer l'extension
      $extension = $request->file('picture')->getClientOriginalExtension();

      $fileNameTostore = $fileName.'_'.time().'.'.$extension;

      //upload image
      $path = $request->file('picture')->storeAs('public/picture',$fileNameTostore);
    }
    else{
      $fileNameTostore = "noimage.jpg";
    }

    // create vehicle

    $vehicle = new Vehicle();
    $vehicle->title = $request->input('title');
    $vehicle->year = $request->input('year');
    $vehicle->fuel = $request->input('fuel');
    $vehicle->seat = $request->input('seat');
    $vehicle->quantity = $request->input('quantity');
    $vehicle->price = $request->input('price');
    $vehicle->picture = $fileNameTostore;
    $vehicle->code = $request->input('code');
    $vehicle->devise_id = 1;
    $vehicle->save();
    Session()->flash('notif','Vehicle has saved succesful');
    return redirect('vehicle/store');

  }

  public function edit($id){
    $vehicle = Vehicle::findOrFail($id);
    // dd($type);
    return view('vehicles.rent',compact('vehicle'));
  }

  public function liste($id){
    $vehicle = Vehicle::findOrFail($id);
    // dd($type);
    return view('welcome',compact('vehicle'));
  }

  public function update(Request $request, $id)
  {

    $rules = [
      'title'=>'required|unique:vehicles',
      'color'=>'required',
      'description'=>'required',
      'picture'=>'image|nullable|max:1999',
      'price'=>'required|integer',
      'fuel'=>'required',
      'type_id'=>'required',
      'seat' => 'required|integer',
      'quantity' => 'required|integer'
    ];

    $customMessages = [
      'required' => 'This data should',
      'unique' => 'This data existe already',
      'integer' => 'Please type number',
    ];

    $this->validate($request, $rules, $customMessages);


    $Vehicle = Vehicle::findOrFail($id);
    // dd($Vehicle);
    $Vehicle->title = $request->input('title');
    $Vehicle->description = $request->input('description');
    $Vehicle->fuel = $request->input('fuel');
    $Vehicle->seat = $request->input('seat');
    $Vehicle->quantity = $request->input('quantity');
    $Vehicle->type_id = $request->input('type_id');
    $Vehicle->price = $request->input('price');

    $Vehicle->save();

    Session()->flash('notif','Vehicle has update succesful');
    return redirect('vehicule/liste');
  }

  public function destroy($id)
  {
    $vehicle = Vehicle::findOrFail($id);
    $vehicle->delete();
    Session()->flash('notif','Véhicule has deleted succesful');
    return redirect('vehicle/store');
  }

      /*  -------------------site web-----------------------------------*/
     /* public function show(Request $request){
      $re=  $request->session()->put('title',$request->input('title'));
      dd($re);
        return view('vehicles.rent')->with('title',$request->session()->get('title'));
       // dd($vehicles);
      }*/
}
