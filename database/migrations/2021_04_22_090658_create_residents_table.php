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
            $table->string('middlename')->nullable();
            $table->string('extname')->nullable();
            $table->string('house_num')->nullable();
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('sex');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('occupation')->nullable();
            $table->integer('tin_num')->nullable();
            $table->string('residence_period');
            $table->bigInteger('contact_num');
            $table->string('voters_id')->nullable();
            $table->string('precint_num')->nullable();
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
