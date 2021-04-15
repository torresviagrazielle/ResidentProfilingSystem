<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('extname');
            $table->string('house_num');
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('sex');
            $table->date('birthdate');
            $table->string('birth_place');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('occupation');
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
        Schema::dropIfExists('residents');
    }
}
