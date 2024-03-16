<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Planet_panchang_sunris_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Planet_panchang_sunris_Resource;
   
class Planet_panchang_sunris_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //require_once 'Astro.php';
          $token= request()->bearerToken();
          $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          //require_once 'Astro.php';
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
          $resourceName = "planet_panchang/sunrise";
          $vedicRishi = new Astro($userId, $CURLKey);
          $responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
          $arr=json_decode($responseData,true);
          if(isset($arr['status'])|| isset($arr['error'])){
              return response(['error' => true,'message'=>$arr], 401);
          }
          foreach($arr as $key=>$val){
              if(gettype($val)=="array"){
                  $arr[$key]=json_encode($val);
              }
          }      
              $arr['user_id']=$data['user_id'];   
              $Planet_panchang_sunris_Model=new Planet_panchang_sunris_Model();
              $store=$Planet_panchang_sunris_Model->store($arr);
              if($store){
                  return $arr;
              }else{
                  return false;
              }
    }
}