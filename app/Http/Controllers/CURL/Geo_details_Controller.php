<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Geo_details_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Geo_details_Resource;
   
class Geo_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($rows)
    {
        //require_once 'Astro.php';
     $token= request()->bearerToken();
$User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
        // var_dump($data);
        // die("===");
      //require_once 'Astro.php';
      $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
      $resourceName = "geo_details";
      $client = new Astro($userId, $CURLKey);
      $response =  $client->callApi("timezone_with_dst", array('place'=>$data['birth_place'],'maxRows'=>$rows));
      $arr=json_decode($response,true);
      if(isset($arr['status'])|| isset($arr['error'])){
          return response(['error' => true,'message'=>$arr], 401);
      }
      foreach($arr as $key=>$val){
          if(gettype($val)=="array"){
              $arr[$key]=json_encode($val);
          }
      }      
          $arr['user_id']=$data['user_id'];   
          $Geo_details_Model=new Geo_details_Model();
          $store=$Geo_details_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
}