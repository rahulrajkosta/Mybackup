<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Tamil_panchang_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Tamil_panchang_Resource;
   
class Tamil_panchang_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Tamil_panchang_Model=new Tamil_panchang_Model();
		$token= request()->bearerToken();
		$User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
		$where=array('user_id'=>$data['user_id']);
		$already=$Tamil_panchang_Model->already($where);
       if(empty($already)){
         //require_once 'Astro.php';
          $userId =env("USER_ID");
			$CURLKey =env("CURL_KEY");
			 $resourceName = "tamil_panchang";
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
			  $store=$Tamil_panchang_Model->store($arr);
			  if($store){
				  return $Tamil_panchang_Model->show($store);
			  }else{
				  return false;
			  }
	   }else{
		   return $already;
	   }
    }
}