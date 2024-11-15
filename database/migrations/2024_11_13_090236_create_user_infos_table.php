<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('job');
            $table->string('institution')->nullable();
            $table->string('city')->nullable();
            $table->string('status');
            $table->string('education');
            $table->string('emergency_contact')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Asumsi Anda menggunakan tabel users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
