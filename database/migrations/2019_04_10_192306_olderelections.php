<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Olderelections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
      Schema::create('Olderelections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('winnername');
            $table->integer('votes');    
            $table->string('bio');     
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
        Schema::drop('Olderelections');
    }
}
