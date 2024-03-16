<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;

// use App\Http\Controllers\API\%%tblname%%_Controller;
use App\Http\Controllers\API\Advanced_panchang_Controller;
use App\Http\Controllers\API\Advanced_panchang_sunrise_Controller;
use App\Http\Controllers\API\Astro_details_Controller;
use App\Http\Controllers\API\Ayanamsha_Controller;
use App\Http\Controllers\API\Basic_gem_suggestion_Controller;
use App\Http\Controllers\API\Basic_panchang_Controller;
use App\Http\Controllers\API\Basic_panchang_sunrise_Controller;
use App\Http\Controllers\API\Bhav_madhya_Controller;
use App\Http\Controllers\API\Biorhythm_Controller;
use App\Http\Controllers\API\Birth_details_Controller;
use App\Http\Controllers\API\Chaughadiya_muhurta_Controller;
use App\Http\Controllers\API\Current_chardasha_Controller;
use App\Http\Controllers\API\Current_vdasha_Controller;
use App\Http\Controllers\API\Current_vdasha_all_Controller;
use App\Http\Controllers\API\Current_vdasha_date_Controller;
use App\Http\Controllers\API\Current_yogini_dasha_Controller;
use App\Http\Controllers\API\Daily_nakshatra_consolidated_Controller;
use App\Http\Controllers\API\Daily_nakshatra_prediction_Controller;
use App\Http\Controllers\API\Daily_nakshatra_prediction_next_Controller;
use App\Http\Controllers\API\Daily_nakshatra_prediction_previous_Controller;
use App\Http\Controllers\API\Find_nakshatra_nakshatraname_Controller;
use App\Http\Controllers\API\General_ascendant_report_Controller;
use App\Http\Controllers\API\General_house_report_planet_name_Controller;
use App\Http\Controllers\API\General_nakshatra_report_Controller;
use App\Http\Controllers\API\General_rashi_report_planet_name_Controller;
use App\Http\Controllers\API\Geo_details_Controller;
use App\Http\Controllers\API\Ghat_chakra_Controller;
use App\Http\Controllers\API\Hora_muhurta_Controller;
use App\Http\Controllers\API\Hora_muhurta_dinman_Controller;
use App\Http\Controllers\API\Horo_chart_chartid_Controller;
use App\Http\Controllers\API\Horo_chart_extended_chartid_Controller;
use App\Http\Controllers\API\Horo_chart_image_chartid_Controller;
use App\Http\Controllers\API\Kalsarpa_details_Controller;
use App\Http\Controllers\API\Lalkitab_debts_Controller;
use App\Http\Controllers\API\Lalkitab_horoscope_Controller;
use App\Http\Controllers\API\Lalkitab_houses_Controller;
use App\Http\Controllers\API\Lalkitab_planets_Controller;
use App\Http\Controllers\API\Lalkitab_remedies_planet_name_Controller;
use App\Http\Controllers\API\Major_chardasha_Controller;
use App\Http\Controllers\API\Major_vdasha_Controller;
use App\Http\Controllers\API\Major_yogini_dasha_Controller;
use App\Http\Controllers\API\Manglik_Controller;
use App\Http\Controllers\API\Moon_biorhythm_Controller;
use App\Http\Controllers\API\Numero_fasts_report_Controller;
use App\Http\Controllers\API\Numero_fav_lord_Controller;
use App\Http\Controllers\API\Numero_fav_mantra_Controller;
use App\Http\Controllers\API\Numero_fav_time_Controller;
use App\Http\Controllers\API\Numero_place_vastu_Controller;
use App\Http\Controllers\API\Numero_prediction_daily_Controller;
use App\Http\Controllers\API\Numero_report_Controller;
use App\Http\Controllers\API\Numero_table_Controller;
use App\Http\Controllers\API\Panchang_chart_Controller;
use App\Http\Controllers\API\Panchang_chart_sunrise_Controller;
use App\Http\Controllers\API\Panchang_festival_Controller;
use App\Http\Controllers\API\Planet_ashtak_planet_name_Controller;
use App\Http\Controllers\API\Planet_nature_Controller;
use App\Http\Controllers\API\Planet_panchang_Controller;
use App\Http\Controllers\API\Planet_panchang_sunris_Controller;
use App\Http\Controllers\API\Planets_Controller;
use App\Http\Controllers\API\Planets_extended_Controller;
use App\Http\Controllers\API\Puja_suggestion_Controller;
use App\Http\Controllers\API\Rudraksha_suggestion_Controller;
use App\Http\Controllers\API\Sadhesati_current_status_Controller;
use App\Http\Controllers\API\Sadhesati_life_details_Controller;
use App\Http\Controllers\API\Sarvashtak_Controller;
use App\Http\Controllers\API\Sub_chardasha_majorrashi_subrashi_Controller;
use App\Http\Controllers\API\Sub_chardasha_rashi_Controller;
use App\Http\Controllers\API\Sub_sub_sub_sub_vdasha_Controller;
use App\Http\Controllers\API\Sub_sub_sub_vdasha_Controller;
use App\Http\Controllers\API\Sub_sub_vdasha_Controller;
use App\Http\Controllers\API\Sub_vdasha_Controller;
use App\Http\Controllers\API\Sub_yogini_dasha_Controller;
use App\Http\Controllers\API\Sub_yogini_dasha_dashacycle_dashaname_Controller;
use App\Http\Controllers\API\Tamil_month_panchang_Controller;
use App\Http\Controllers\API\Tamil_panchang_Controller;
use App\Http\Controllers\API\Timezone_with_dst_Controller;
use App\Http\Controllers\API\Varshaphal_details_Controller;
use App\Http\Controllers\API\Varshaphal_harsha_bala_Controller;
use App\Http\Controllers\API\Varshaphal_month_chart_Controller;
use App\Http\Controllers\API\Varshaphal_mudda_dasha_Controller;
use App\Http\Controllers\API\Varshaphal_muntha_Controller;
use App\Http\Controllers\API\Varshaphal_panchavargeeya_bala_Controller;
use App\Http\Controllers\API\Varshaphal_planets_Controller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
     
// Route::middleware('auth:sanctum')->group( function () {
    // Route::resource('%%tblname%%s', %%tblname%%_Controller::class);
// });

Route::middleware('auth:sanctum')->group( function () {
						Route::resource('advanced_panchang', advanced_panchang_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('advanced_panchang_sunrise', advanced_panchang_sunrise_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('astro_details', astro_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('ayanamsha', ayanamsha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('basic_gem_suggestion', basic_gem_suggestion_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('basic_panchang', basic_panchang_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('basic_panchang_sunrise', basic_panchang_sunrise_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('bhav_madhya', bhav_madhya_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('biorhythm', biorhythm_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('birth_details', birth_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('chaughadiya_muhurta', chaughadiya_muhurta_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('current_chardasha', current_chardasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('current_vdasha', current_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('current_vdasha_all', current_vdasha_all_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('current_vdasha_date', current_vdasha_date_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('current_yogini_dasha', current_yogini_dasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('daily_nakshatra_consolidated', daily_nakshatra_consolidated_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('daily_nakshatra_prediction', daily_nakshatra_prediction_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('daily_nakshatra_prediction_next', daily_nakshatra_prediction_next_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('daily_NPP', daily_nakshatra_prediction_previous_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('find_nakshatra_nakshatraname', find_nakshatra_nakshatraname_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('general_ascendant_report', general_ascendant_report_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('general_house_report_planet_name', general_house_report_planet_name_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('general_nakshatra_report', general_nakshatra_report_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('general_rashi_report_planet_name', general_rashi_report_planet_name_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('geo_details', geo_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('ghat_chakra', ghat_chakra_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('hora_muhurta', hora_muhurta_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('hora_muhurta_dinman', hora_muhurta_dinman_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('horo_chart_chartid', horo_chart_chartid_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('horo_chart_extended_chartid', horo_chart_extended_chartid_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('horo_chart_image_chartid', horo_chart_image_chartid_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('kalsarpa_details', kalsarpa_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('lalkitab_debts', lalkitab_debts_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('lalkitab_horoscope', lalkitab_horoscope_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('lalkitab_houses', lalkitab_houses_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('lalkitab_planets', lalkitab_planets_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('lalkitab_remedies_planet_name', lalkitab_remedies_planet_name_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_chardasha', major_chardasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_vdasha', major_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_yogini_dasha', major_yogini_dasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('manglik', manglik_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('moon_biorhythm', moon_biorhythm_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_fasts_report', numero_fasts_report_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_fav_lord', numero_fav_lord_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_fav_mantra', numero_fav_mantra_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_fav_time', numero_fav_time_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_place_vastu', numero_place_vastu_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_prediction_daily', numero_prediction_daily_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_report', numero_report_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('numero_table', numero_table_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('panchang_chart', panchang_chart_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('panchang_chart_sunrise', panchang_chart_sunrise_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('panchang_festival', panchang_festival_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planet_ashtak_planet_name', planet_ashtak_planet_name_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planet_nature', planet_nature_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planet_panchang', planet_panchang_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planet_panchang_sunris', planet_panchang_sunris_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planets', planets_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('planets_extended', planets_extended_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('puja_suggestion', puja_suggestion_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('rudraksha_suggestion', rudraksha_suggestion_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sadhesati_current_status', sadhesati_current_status_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sadhesati_life_details', sadhesati_life_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sarvashtak', sarvashtak_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_chardasha_majorrashiS', sub_chardasha_majorrashi_subrashi_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_chardasha_rashi', sub_chardasha_rashi_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_sub_sub_sub_vdasha', sub_sub_sub_sub_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_sub_sub_vdasha', sub_sub_sub_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_sub_vdasha', sub_sub_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_vdasha', sub_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_yogini_dasha', sub_yogini_dasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('sub_yogini_dasha_dashacycleD', sub_yogini_dasha_dashacycle_dashaname_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('tamil_month_panchang', tamil_month_panchang_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('tamil_panchang', tamil_panchang_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('timezone_with_dst', timezone_with_dst_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_details', varshaphal_details_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_harsha_bala', varshaphal_harsha_bala_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_month_chart', varshaphal_month_chart_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_mudda_dasha', varshaphal_mudda_dasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_muntha', varshaphal_muntha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_panchavargeeya_bala', varshaphal_panchavargeeya_bala_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('varshaphal_planets', varshaphal_planets_Controller::class);});

