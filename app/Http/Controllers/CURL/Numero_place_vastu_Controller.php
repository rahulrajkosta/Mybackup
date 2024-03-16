<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Numero_place_vastu_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Numero_place_vastu_Resource;
   
class Numero_place_vastu_Controller extends BaseController
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
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $resourceName = "numero_place_vastu";
         $vedicRishi = new  Astro($userId, $CURLKey);
         $rdata=array('name'=>$data['name'],'day'=>(int)$data['date'],'month'=>(int)$data['month'],'year'=>(int)$data['year']);
         $responseData = $vedicRishi->callApi($resourceName, $rdata);
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
          $Numero_place_vastu_Model=new Numero_place_vastu_Model();
          $store=$Numero_place_vastu_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
}