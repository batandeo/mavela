<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatVehicleTbl extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {

    Schema::create('devises', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('libelle');
      $table->string('price');
      $table->timestamps();
    });


    Schema::create('vehicles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('picture');
      $table->string('price');
      $table->string('fuel');
      $table->integer('seat');
      $table->integer('quantity');
      $table->string('code');
      $table->string('year');
      $table->unsignedInteger('devise_id');
      $table->foreign('devise_id')->references('id')->on('devises')
        ->onDelete('restrict')
        ->onUpdate('restrict');
      $table->timestamps();
    });

    Schema::create('reservations', function (Blueprint $table) {
      $table->increments('id');
      $table->date('date_rent');
      $table->date('date_return');
      $table->integer('countday');
      $table->string('mode_reception');
      $table->string('location_pick');
      $table->time('time_pick');
      $table->time('drop_off_location_time');
      $table->integer('number_pers');
      $table->string('travel_librairy');
      $table->string('description');
      $table->unsignedInteger('vehicle_id');
      $table->foreign('vehicle_id')->references('id')->on('vehicles')
        ->onDelete('restrict')
        ->onUpdate('restrict');
      $table->unsignedInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')
        ->onDelete('restrict')
        ->onUpdate('restrict');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    //
  }
}
