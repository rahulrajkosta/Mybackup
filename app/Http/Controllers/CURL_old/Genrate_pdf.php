<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\General_rashi_report_planet_name_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\General_rashi_report_planet_name_Resource;
   
class Genrate_pdf extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function basic_horoscope_pdf()
    {
      //require_once 'Astro.php';
     $token= request()->bearerToken();
    $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
      //require_once 'Astro.php';
      $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
    ////planet name are -moon, mars, mercury, jupiter, venus, saturn;
      $vedicRishi = new Astro($userId, $CURLKey);
      $endpoint="basic_horoscope_pdf";
      $responseData = $vedicRishi->generatePdf($endpoint,$data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
      if(gettype($responseData)=='array'){

          return response()->download($responseData['url']);
      }else{
        return $responseData;
      }
    
    }
    public function mini_horoscope_pdf()
    {
      //require_once 'Astro.php';
     $token= request()->bearerToken();
    $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
      //require_once 'Astro.php';
      $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
    ////planet name are -moon, mars, mercury, jupiter, venus, saturn;
      $vedicRishi = new Astro($userId, $CURLKey);
      $endpoint="mini_horoscope_pdf";
      $responseData = $vedicRishi->generatePdf($endpoint,$data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
      if(gettype($responseData)=='array'){

          return response()->download($responseData['url']);
      }else{
        return $responseData;
      }
    
    }
    public function pro_horoscope_pdf()
    {
      //require_once 'Astro.php';
     $token= request()->bearerToken();
    $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
      //require_once 'Astro.php';
      $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
    ////planet name are -moon, mars, mercury, jupiter, venus, saturn;
      $vedicRishi = new Astro($userId, $CURLKey);
      $endpoint="pro_horoscope_pdf";
      $responseData = $vedicRishi->generatePdf($endpoint,$data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
      if(gettype($responseData)=='array'){

          return response()->download($responseData['url']);
      }else{
        return $responseData;
      }
    
    }
    public function match_making_pdf()
    {
      //require_once 'Astro.php';
     $token= request()->bearerToken();
    $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
      //require_once 'Astro.php';
      $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
    ////planet name are -moon, mars, mercury, jupiter, venus, saturn;
      $vedicRishi = new Astro($userId, $CURLKey);
      $endpoint="match_making_pdf";
      $responseData = $vedicRishi->generatePdf($endpoint,$data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
      if(gettype($responseData)=='array'){

          return response()->download($responseData['url']);
      }else{
        return $responseData;
      }
    
    }
}