<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\Astro_details_Model;
use App\Models\User_info_Model;
use Validator;
use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Astro_details_Resource;
   
class Astro_details_Controller extends BaseController
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
        $resourceName = "astro_details";
        $vedicRishi = new Astro($userId, $CURLKey);
        $responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone'],$data['name']);
        $arr=json_decode($responseData,true);
        foreach($arr as $key=>$val){
            if(gettype($val)=="array"){
                $arr[$key]=json_encode($val);
            }
        }      
            $arr['user_id']=$data['user_id'];   
            $Astro_details_Model=new Astro_details_Model();
            $store=$Astro_details_Model->store($arr);
            if($store){
                return $arr;
            }else{
                return false;
            }
    }
}