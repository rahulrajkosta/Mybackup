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
        Schema::connection('mysql_second')->create('birth_details', function($table)
        {
            $table->increments('id');
            $table->string('year');
            $table->string('month');
            $table->string('day');
            $table->string('hour');
            $table->string('minute');
            $table->string('sunset');
            $table->string('sunrise');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('ayanamsha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('birth_details');
    }
};
