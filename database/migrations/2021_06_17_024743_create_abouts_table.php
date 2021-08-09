<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->longText('main');
            $table->longText('mision');
            $table->longText('goal');
            $table->longText('local');
            $table->longText('exterior');
            $table->longText('difusion');
           /*  $table->unsignedBigInteger('director');
            $table->longText('body_dir');
            $table->unsignedBigInteger('coor_gral'); 
            $table->longText('body_coor_gral');
            $table->unsignedBigInteger('coor_prod');
            $table->longText('body_coor_prod');
            $table->unsignedBigInteger('coor_inv');
            $table->longText('body_coor_inv');
            $table->unsignedBigInteger('coor_enla');
            $table->longText('body_coor_enla'); 
            $table->unsignedBigInteger('juridico'); 
            $table->longText('body_juridico');*/
            $table->timestamps(); 
          /*   $table->foreign('director')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coor_gral')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coor_prod')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coor_inv')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('coor_enla')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('juridico')->references('id')->on('users')->onDelete('cascade');  */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
