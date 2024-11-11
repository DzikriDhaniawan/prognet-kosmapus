<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->enum('job', ['student', 'worker']);
            $table->string('institution')->nullable();
            $table->string('city')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->enum('education', ['sma', 's1']);
            $table->string('emergency_contact')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}