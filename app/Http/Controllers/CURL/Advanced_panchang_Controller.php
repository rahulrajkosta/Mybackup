<?php
   
namespace App\Http\Controllers\CURL;
   ;
use Illuminate\Http\Request;;
use App\Http\Controllers\CURL\BaseController as BaseController;;
use App\Models\Advanced_panchang_Model;;
use App\Models\User_info_Model;;
use Validator;;
use App\Http\Resources\Advanced_panchang_Resource;;
use App\Http\Controllers\CURL\Astro;
   
class Advanced_panchang_Controller extends BaseController
{
    
    public function index()
    {
        $Advanced_panchang_Model=new Advanced_panchang_Model();
        $token= request()->bearerToken();
        $User_info_Model=new User_info_Model();
        $data=$User_info_Model->curl_data($token);
        //require_once 'Astro.php';
        $userId =env("USER_ID");
        $CURLKey =env("CURL_KEY");
        $resourceName = "advanced_panchang";
        $input = json_decode($request->getContent(),true);
        $validator = Validator::make($input, [
            'date' => 'required', 
			 'month' => 'required', 
			 'year' => 'required', 
			 'hour' => 'required', 
             'minute' => 'required', 
             'latitude' => 'required', 
             'longitude' => 'required', 
             'timezone' => 'required', 
            ]);
    
            if($validator->fails()){
                return $this->sendError('Validation Error.', $validator->errors());       
            } 
        $where=array($input); 
        $already=$Advanced_panchang_Model->where($where);
        if(empty($already)){

            $vedicRishi = new Astro($userId, $CURLKey);
            $responseData = $vedicRishi->call($resourceName, $input['date'], $input['month'], $input['year'], $input['hour'], $input['minute'], $input['latitude'], $input['longitude'], $input['timezone'],isset($input['name']));
            
            $arr=json_decode($responseData,true);
            foreach($arr as $key=>$val){
                if(gettype($val)=="array"){
                    $arr[$key]=json_encode($val);
                }
            }
            $arr['user_id']=$data['user_id'];   
            $store=$Advanced_panchang_Model->store($arr);
            if($store){
                return $arr;
            }else{
                return false;
            }
        }else{
            return $this->sendResponse($already, 'Advanced_panchang Already Exist created successfully.');
        }
            
    }
}