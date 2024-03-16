<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Varshaphal_month_chart_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Varshaphal_month_chart_Resource;
   
class Varshaphal_month_chart_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($vyear)
    {
      $Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
		$token= request()->bearerToken();
		$User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
		$where=array('year'=>$vyear,'user_id'=>$data['user_id']);
		$already=$Varshaphal_month_chart_Model->already($where);
       if(empty($already)){
       //require_once 'Astro.php';
       $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
       $resourceName = "varshaphal_month_chart";
       $vedicRishi = new Astro($userId, $CURLKey);
       $responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name'],$vyear);
       $arr=json_decode($responseData,true);
      if(isset($arr['status'])|| isset($arr['error'])){
          return response(['error' => true,'message'=>$arr], 401);
      }
      foreach($arr as $key=>$val){
          if(gettype($val)=="array"){
              $arr[$key]=json_encode($val);
          }
      }      
      $dd=array('Data'=>$responseData,'user_id'=>$data['user_id'],'year'=>$vyear);   
          $store=$Varshaphal_month_chart_Model->store($dd);
          if($store){
              return $Varshaphal_month_chart_Model->show($store);;
          }else{
              return false;
          }
	   }else{
		   return $already;
	   }
    }
}