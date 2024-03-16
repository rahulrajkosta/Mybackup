<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Horoscope_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
// use App\Http\Resources\Sun_sign_prediction_Resource;
   
class DaylyHoroscope_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sun_sign_prediction()
    {
         $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $signArray = ['aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces'];
         $astrologyApi = new Astro($userId, $CURLKey);
         
         // call prediction method of the AstrologyApiClient call .. provides JSON response
         
         $todaysPrediction = $astrologyApi->getTodaysPrediction($signArray[5], $data['timezone']);
         $arr=json_decode($todaysPrediction,true);
      if(isset($arr['status'])|| isset($arr['error'])){
          return response(['error' => true,'message'=>$arr], 401);
      }
      foreach($arr as $key=>$val){
          if(gettype($val)=="array"){
              $arr[$key]=json_encode($val);
          }
      }      
          $arr['user_id']=$data['user_id'];   
          $Horoscope_Model=new Horoscope_Model();
          $store=$Horoscope_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
    public function Sun_sign_prediction_next()
    {
         $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $signArray = ['aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces'];
         $astrologyApi = new Astro($userId, $CURLKey);
         
         // call prediction method of the AstrologyApiClient call .. provides JSON response
         
         $todaysPrediction = $astrologyApi->getTomorrowsPrediction($signArray[5], $data['timezone']);
         $arr=json_decode($todaysPrediction,true);
      if(isset($arr['status'])|| isset($arr['error'])){
          return response(['error' => true,'message'=>$arr], 401);
      }
      foreach($arr as $key=>$val){
          if(gettype($val)=="array"){
              $arr[$key]=json_encode($val);
          }
      }      
          $arr['user_id']=$data['user_id'];   
          $Horoscope_Model=new Horoscope_Model();
          $store=$Horoscope_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
    public function Sun_sign_prediction_pre()
    {
         $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $signArray = ['aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces'];
         $astrologyApi = new Astro($userId, $CURLKey);
         
         // call prediction method of the AstrologyApiClient call .. provides JSON response
         
         $todaysPrediction = $astrologyApi->getYesterdaysPrediction($signArray[5], $data['timezone']);
         $arr=json_decode($todaysPrediction,true);
		  if(isset($arr['status'])|| isset($arr['error'])){
			  return response(['error' => true,'message'=>$arr], 401);
		  }
		  foreach($arr as $key=>$val){
			  if(gettype($val)=="array"){
				  $arr[$key]=json_encode($val);
			  }
		  }      
          $arr['user_id']=$data['user_id'];   
          $Horoscope_Model=new Horoscope_Model();
          $store=$Horoscope_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
	public function sun_sign_consolidated($zodiacName)
    {
         $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $astrologyApi = new Astro($userId, $CURLKey);
         
         // call prediction method of the AstrologyApiClient call .. provides JSON response
         $resourceName = "sun_sign_consolidated/daily/".$zodiacName;
         $todaysPrediction = $astrologyApi->callApi($resourceName, $data['timezone']);
         $arr=json_decode($todaysPrediction,true);
		  if(isset($arr['status'])|| isset($arr['error'])){
			  return response(['error' => true,'message'=>$arr], 401);
		  }
		  foreach($arr as $key=>$val){
			  if(gettype($val)=="array"){
				  $arr[$key]=json_encode($val);
			  }
		  }      
          $arr['user_id']=$data['user_id'];   
          $Horoscope_Model=new Horoscope_Model();
          $store=$Horoscope_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
	
	public function sun_sign_consolidated($zodiacName)
    {
         $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
          $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
         $astrologyApi = new Astro($userId, $CURLKey);
         
         // call prediction method of the AstrologyApiClient call .. provides JSON response
         $resourceName = "horoscope_prediction/monthly/".$zodiacName;
         $todaysPrediction = $astrologyApi->callApi($resourceName, $data['timezone']);
         $arr=json_decode($todaysPrediction,true);
		  if(isset($arr['status'])|| isset($arr['error'])){
			  return response(['error' => true,'message'=>$arr], 401);
		  }
		  foreach($arr as $key=>$val){
			  if(gettype($val)=="array"){
				  $arr[$key]=json_encode($val);
			  }
		  }      
          $arr['user_id']=$data['user_id'];   
          $Horoscope_Model=new Horoscope_Model();
          $store=$Horoscope_Model->store($arr);
          if($store){
              return $arr;
          }else{
              return false;
          }
    }
	
	
	
}