<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Countings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Countings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('election_name');
            $table->string('can1');
            $table->string('vote1');
            $table->string('email1');
            $table->string('bio1');
            $table->string('pic1');
           
            $table->string('can2');
            $table->string('vote2');
            $table->string('email2');
            $table->string('bio2');
            $table->string('pic2');

            $table->string('can3');
            $table->string('vote3');
            $table->string('email3');
            $table->string('bio3');
            $table->string('pic3');
                        
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
        Schema::drop('Countings');
    }
}
