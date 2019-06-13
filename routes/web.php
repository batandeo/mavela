<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// Laravel welcome route.
Route::get('/', function () {
  $vehicles = \App\Vehicle::all();
  return view('welcome', compact('vehicles'));

});

Route::get('contact', function () {
  //$vehicles = \App\Vehicle::all();
  return view('contact');

});
Route::post('/reservation', 'ReservationController@index');

Route::get('/login', function () {
  return view('login');
});

Route::get('/cars', function () {
  $vehicles = \App\Vehicle::all();
  return view('vehicles.cars',compact('vehicles'));
});

Route::get('about', function () {
  return view('about',compact('vehicles'));
});
/** Routes for the types */
/*Route::get('type/store',function (){
  return view('types.store');
});
Route::resource('types', 'TypeController');
Route::get('type/store', 'TypeController@index');
Route::post('type/store', 'TypeController@store');*/


/** Routes for the vehicles */
Route::get('vehicle/store',function (){
  return view('vehicles.store');
});
Route::resource('vehicles', 'VehicleController');
Route::get('vehicle/store', 'VehicleController@index');
Route::post('vehicle/store', 'VehicleController@store');
//Route::post('liste', 'ClientController@liste');
//Route::post('vehicle/{{$id}}', 'VehicleController@liste');
// Laravel auth route.
Auth::routes();

//Route::get('/', 'LoginController@index');
//Route::get('/', 'PostController@index')->name('home');
// Users resource route.
Route::resource('users', 'UserController');

// Roles resource route.
Route::resource('roles', 'RoleController');

// Permissions resource route.
Route::resource('permissions', 'PermissionController');

// Post resource route.
Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/create_role_permission', function(){
	$role = Role::create(['name' => 'Administer']);
	$permission = Permission::create(['name' => 'Administer roles & permissions']);
	auth()->user()->assignRole('Administer');
	auth()->user()->givePermissionTo('Administer roles & permissions');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
