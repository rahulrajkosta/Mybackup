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
        Schema::connection('mysql_second')->create('advanced_panchang', function($table)
        {
            $table->increments('id');
			$table->string('day');//
			$table->string('sunset');//
			$table->string('sunrise');//
			$table->string('moonrise');//
			$table->string('moonset');//
			$table->string('tithi');//
			$table->string('nakshatra');//
			$table->string('yog');//
			$table->string('karan');//
			$table->string('hindu_maah');//
			$table->string('paksha');//
			$table->string('ritu');//
			$table->string('sun_sign');//
			$table->string('moon_sign');//
			$table->string('ayana');//
			$table->string('panchang_yog');//
			$table->string('vikram_samvat');//
			$table->string('shaka_samvat');//
			$table->string('shaka_samvat_name');//
			$table->string('vkram_samvat_name');//
			$table->string('disha_shool');//
			$table->string('disha_shool_remedies');//
			$table->string('nak_shool');//
			$table->string('moon_nivas');//
			$table->string('abhijit_muhurta');//
			$table->string('rahukaal');//
			$table->string('guliKaal');//
			$table->string('yamghant_kaal');//
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('advanced_panchang');
    }
};
