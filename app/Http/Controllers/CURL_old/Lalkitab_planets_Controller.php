<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Lalkitab_planets_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Lalkitab_planets_Resource;
   
class Lalkitab_planets_Controller extends BaseController
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
          $resourceName = "lalkitab_planets";
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
      $dd=array('Data'=>$responseData,'user_id'=>$data['user_id']);   
          $Lalkitab_planets_Model=new Lalkitab_planets_Model();
          $store=$Lalkitab_planets_Model->store($dd);
          if($store){
              return $dd;
          }else{
              return false;
          }
    }
}