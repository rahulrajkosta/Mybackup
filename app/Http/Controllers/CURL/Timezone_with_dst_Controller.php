<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Timezone_with_dst_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Timezone_with_dst_Resource;
   
class Timezone_with_dst_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token= request()->bearerToken();
		$User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
         //require_once 'Astro.php';
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $resourceName = "timezone_with_dst";
         $vedicRishi = new Astro($userId, $CURLKey);
         $responseData = $vedicRishi->callApi($resourceName, $data);
         $arr=json_decode($responseData,true);
      foreach($arr as $key=>$val){
          if(gettype($val)=="array"){
              $arr[$key]=json_encode($val);
          }
      }      
          $arr['user_id']=$data['user_id'];   
          $Timezone_with_dst_Model=new Timezone_with_dst_Model();
          $store=$Timezone_with_dst_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
}