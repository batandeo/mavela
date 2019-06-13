<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

  public function index(){
    $types = Type::all();
    return view('types.store', compact('types'));
  }


  public function store(Request $request)
  {

    $rules = [
      'title'=>'required',
      'picture' => 'image|nullable|max:1999',
      'price'=>'required|integer',
      'description'=>'required'
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


    $type = new Type();
    $type->title = $request->title;
    $type->picture = $fileNameTostore;
    $type->price = $request->price;
    $type->description = $request->description;
    $type->save();
    Session()->flash('notif','Type has saved succesful');
    return redirect('type/store');
  }


  public function edit($id){
    $type = Type::findOrFail($id);
    return view('types.edit',compact('type'));
  }

  public function update(Request $request, $id)
  {

    $rules = [
      'title'=>'required|unique:type|max:255',
      'picture' => 'image|nullable|max:1999',
      'price'=>'required|integer',
      'description'=>'required'
    ];

    $customMessages = [
      'required' => 'This data should',
      'unique' => 'This data existe already',
      'integer' => 'Please type number',
    ];
    $this->validate($request, $rules, $customMessages);

    // create reservation
    $type = Type::findOrFail($id);
    $type->title = $request->input('title');
    $type->price = $request->input('price');
    $type->description = $request->input('description');
    $type->save();

    Session()->flash('notif','Update succesful');
    return redirect('vehicule/type');
  }

  public function destroy($id)
  {
    $type = Type::findOrFail($id);
    $type->delete();
    Session()->flash('notif','Delete succesful');
    return redirect('type/store');
  }
}
