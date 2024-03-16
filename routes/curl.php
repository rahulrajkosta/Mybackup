<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CURL\RegisterController;

// use App\Http\Controllers\CURL\%%tblname%%_Controller;

use App\Http\Controllers\CURL\Advanced_panchang_Controller;
use App\Http\Controllers\CURL\Advanced_panchang_sunrise_Controller;
use App\Http\Controllers\CURL\Astro_details_Controller;
use App\Http\Controllers\CURL\Ayanamsha_Controller;
use App\Http\Controllers\CURL\Basic_gem_suggestion_Controller;
use App\Http\Controllers\CURL\Basic_panchang_Controller;
use App\Http\Controllers\CURL\Basic_panchang_sunrise_Controller;
use App\Http\Controllers\CURL\Bhav_madhya_Controller;
use App\Http\Controllers\CURL\Biorhythm_Controller;
use App\Http\Controllers\CURL\Birth_details_Controller;
use App\Http\Controllers\CURL\Chaughadiya_muhurta_Controller;
use App\Http\Controllers\CURL\Current_chardasha_Controller;
use App\Http\Controllers\CURL\Current_vdasha_Controller;
use App\Http\Controllers\CURL\Current_vdasha_all_Controller;
use App\Http\Controllers\CURL\Current_vdasha_date_Controller;
use App\Http\Controllers\CURL\Current_yogini_dasha_Controller;
use App\Http\Controllers\CURL\Daily_nakshatra_consolidated_Controller;
use App\Http\Controllers\CURL\Daily_nakshatra_prediction_Controller;
use App\Http\Controllers\CURL\Daily_nakshatra_prediction_next_Controller;
use App\Http\Controllers\CURL\Daily_nakshatra_prediction_previous_Controller;
use App\Http\Controllers\CURL\Find_nakshatra_nakshatraname_Controller;
use App\Http\Controllers\CURL\General_ascendant_report_Controller;
use App\Http\Controllers\CURL\General_house_report_planet_name_Controller;
use App\Http\Controllers\CURL\General_nakshatra_report_Controller;
use App\Http\Controllers\CURL\General_rashi_report_planet_name_Controller;
use App\Http\Controllers\CURL\Geo_details_Controller;
use App\Http\Controllers\CURL\Ghat_chakra_Controller;
use App\Http\Controllers\CURL\Hora_muhurta_Controller;
use App\Http\Controllers\CURL\Hora_muhurta_dinman_Controller;
use App\Http\Controllers\CURL\Horo_chart_chartid_Controller;
use App\Http\Controllers\CURL\Horo_chart_extended_chartid_Controller;
use App\Http\Controllers\CURL\Horo_chart_image_chartid_Controller;
use App\Http\Controllers\CURL\Kalsarpa_details_Controller;
use App\Http\Controllers\CURL\Lalkitab_debts_Controller;
use App\Http\Controllers\CURL\Lalkitab_horoscope_Controller;
use App\Http\Controllers\CURL\Lalkitab_houses_Controller;
use App\Http\Controllers\CURL\Lalkitab_planets_Controller;
use App\Http\Controllers\CURL\Lalkitab_remedies_planet_name_Controller;
use App\Http\Controllers\CURL\Major_chardasha_Controller;
use App\Http\Controllers\CURL\Major_vdasha_Controller;
use App\Http\Controllers\CURL\Major_yogini_dasha_Controller;
use App\Http\Controllers\CURL\Manglik_Controller;
use App\Http\Controllers\CURL\Moon_biorhythm_Controller;
use App\Http\Controllers\CURL\Numero_fasts_report_Controller;
use App\Http\Controllers\CURL\Numero_fav_lord_Controller;
use App\Http\Controllers\CURL\Numero_fav_mantra_Controller;
use App\Http\Controllers\CURL\Numero_fav_time_Controller;
use App\Http\Controllers\CURL\Numero_place_vastu_Controller;
use App\Http\Controllers\CURL\Numero_prediction_daily_Controller;
use App\Http\Controllers\CURL\Numero_report_Controller;
use App\Http\Controllers\CURL\Numero_table_Controller;
use App\Http\Controllers\CURL\Panchang_chart_Controller;
use App\Http\Controllers\CURL\Panchang_chart_sunrise_Controller;
use App\Http\Controllers\CURL\Panchang_festival_Controller;
use App\Http\Controllers\CURL\Panchang_lagna_table_Controller;
use App\Http\Controllers\CURL\Planet_ashtak_planet_name_Controller;
use App\Http\Controllers\CURL\Planet_nature_Controller;
use App\Http\Controllers\CURL\Planet_panchang_Controller;
use App\Http\Controllers\CURL\Planet_panchang_sunris_Controller;
use App\Http\Controllers\CURL\Planets_Controller;
use App\Http\Controllers\CURL\Planets_extended_Controller;
use App\Http\Controllers\CURL\Puja_suggestion_Controller;
use App\Http\Controllers\CURL\Rudraksha_suggestion_Controller;
use App\Http\Controllers\CURL\Sadhesati_current_status_Controller;
use App\Http\Controllers\CURL\Sadhesati_life_details_Controller;
use App\Http\Controllers\CURL\Sarvashtak_Controller;
use App\Http\Controllers\CURL\Sub_chardasha_majorrashi_subrashi_Controller;
use App\Http\Controllers\CURL\Sub_chardasha_rashi_Controller;
use App\Http\Controllers\CURL\Sub_sub_sub_sub_vdasha_Controller;
use App\Http\Controllers\CURL\Sub_sub_sub_vdasha_Controller;
use App\Http\Controllers\CURL\Sub_sub_vdasha_Controller;
use App\Http\Controllers\CURL\Sub_vdasha_Controller;
use App\Http\Controllers\CURL\Sub_yogini_dasha_Controller;
use App\Http\Controllers\CURL\Sub_yogini_dasha_dashacycle_dashaname_Controller;
use App\Http\Controllers\CURL\Tamil_month_panchang_Controller;
use App\Http\Controllers\CURL\Tamil_panchang_Controller;
use App\Http\Controllers\CURL\Timezone_with_dst_Controller;
use App\Http\Controllers\CURL\Varshaphal_details_Controller;
use App\Http\Controllers\CURL\Varshaphal_harsha_bala_Controller;
use App\Http\Controllers\CURL\Varshaphal_month_chart_Controller;
use App\Http\Controllers\CURL\Varshaphal_mudda_dasha_Controller;
use App\Http\Controllers\CURL\Varshaphal_muntha_Controller;
use App\Http\Controllers\CURL\Varshaphal_panchavargeeya_bala_Controller;
use App\Http\Controllers\CURL\Varshaphal_planets_Controller;
use App\Http\Controllers\CURL\Monthly_panchang;
use App\Http\Controllers\CURL\sub_chardasha_Controller;
use App\Http\Controllers\CURL\Genrate_pdf;
use App\Http\Controllers\CURL\DaylyHoroscope_Controller;
/*
|--------------------------------------------------------------------------
| CURL Routes
|--------------------------------------------------------------------------
|
| Here is where you can register CURL routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "CURL" middleware group. Enjoy building your CURL!
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
						Route::get('general_house_report_planet_name/{planetName}', [general_house_report_planet_name_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('general_nakshatra_report', general_nakshatra_report_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('general_rashi_report_planet_name/{planetName}', [general_rashi_report_planet_name_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('geo_details/{maxrows}', [geo_details_Controller::class,'index']);});
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
						Route::get('lalkitab_remedies_planet_name/{planetName}', [lalkitab_remedies_planet_name_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_chardasha', major_chardasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_vdasha', major_vdasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('major_yogini_dasha', major_yogini_dasha_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
						Route::resource('manglik', manglik_Controller::class);});
Route::middleware('auth:sanctum')->group( function () {
							Route::resource('monthly_panchang', Monthly_panchang::class);});
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
							Route::resource('panchang_lagna_table', Panchang_lagna_table_Controller::class);});						
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
							Route::resource('sub_chardasha', Sub_chardasha_Controller::class);});
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
						Route::get('varshaphal_details/{year}', [varshaphal_details_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_harsha_bala/{year}', [varshaphal_harsha_bala_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_month_chart/{year}', [varshaphal_month_chart_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_mudda_dasha/{year}', [varshaphal_mudda_dasha_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_muntha/{year}', [varshaphal_muntha_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_panchavargeeya_bala/{year}', [varshaphal_panchavargeeya_bala_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('varshaphal_planets/{year}', [varshaphal_planets_Controller::class,'index']);});
Route::middleware('auth:sanctum')->group( function () {
						Route::get('basic_horoscope_pdf', [Genrate_pdf::class,'basic_horoscope_pdf']);
						Route::get('mini_horoscope_pdf', [Genrate_pdf::class,'mini_horoscope_pdf']);
						Route::get('pro_horoscope_pdf', [Genrate_pdf::class,'pro_horoscope_pdf']);
						Route::get('match_making_pdf', [Genrate_pdf::class,'match_making_pdf']);
						});
Route::middleware('auth:sanctum')->group( function () {
							Route::get('Sun_sign_prediction', [DaylyHoroscope_Controller::class,'Sun_sign_prediction']);
							Route::get('Sun_sign_prediction_next', [DaylyHoroscope_Controller::class,'Sun_sign_prediction_next']);
							
							});
