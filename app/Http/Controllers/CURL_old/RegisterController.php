<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
   
class RegisterController extends BaseController
{
    /**
     * Register CURL
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //require_once 'Astro.php';
         $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
        $data = array(
            'name'=>"Rahul",
            'date' => 11,
            'month' => 2,
            'year' => 2002,
            'hour' => 6,
            'minute' =>1,
            'latitude' => 25.12325,
            'longitude' => 79.8859,
            'timezone' => 5.5
        );
        $resourceName = "numero_table";
        $vedicRishi = new Astro($userId, $CURLKey);
        $responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
        return $responseData;
    }
}