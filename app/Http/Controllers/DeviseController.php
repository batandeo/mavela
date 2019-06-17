<?php

namespace App\Http\Controllers;

use App\Devise;
use Illuminate\Http\Request;

class DeviseController extends Controller
{
  public function index(){
    $dollars = Devise::all();
    return view('dollars.dollar', compact('dollars'));
  }

  public function edit($id){
    $dollar = Devise::findOrFail($id);
    return view('dollars.edit',compact('dollar'));
  }

  public function update(Request $request, $id)
  {

    $rules = [
      'libelle'=>'required',
      'price'=>'required|string',
    ];

    $customMessages = [
      'required' => 'This data should',
      'unique' => 'This data existe already',
      'integer' => 'Please type number',
    ];
    $this->validate($request, $rules, $customMessages);

    // create reservation
    $dollar = Devise::findOrFail($id);
    $dollar->libelle = $request->input('libelle');
    $dollar->price = $request->input('price');
    $dollar->save();

    Session()->flash('notif','Update succesful');
    return redirect('dollar');
  }

  public function destroy($id)
  {
    $dollar = Devise::findOrFail($id);
    $dollar->delete();
    Session()->flash('notif','Delete succesful');
    return redirect('dollar');
  }
}
