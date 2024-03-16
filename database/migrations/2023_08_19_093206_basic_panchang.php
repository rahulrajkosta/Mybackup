<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mysql_second')->create('basic_panchang', function($table)
        {
            $table->increments('id');
            $table->string('day');
            $table->string('tithi');
            $table->string('nakshatra');
            $table->string('yog');
            $table->string('karan');
            $table->string('sunset');
            $table->string('vedic_sunrise');
            $table->string('vedic_sunset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('basic_panchang');
    }
};
