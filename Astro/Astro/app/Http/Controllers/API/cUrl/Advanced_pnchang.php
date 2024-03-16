<?php 
///
// Created by Rahul on 2021-06-02.
namespace App\Http\Controllers\curl;
   
use Illuminate\Http\Request;
use App\Http\Controllers\curl\BaseController as BaseController;
use App\Models\Advanced_panchang_Model;
use Validator;
use App\Http\Resources\Advanced_panchang_Resource;
   
class Advanced_panchang_Controller extends BaseController
{
public function index(){
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => '127.0.0.1:8000/api/advanced_panchang/1',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_POSTFIELDS =>'{
        "day":"1", 
        "month":"2", 
        "year":"2002", 
        "lat":"2154.1", 
        "lon":"1245.1", 
        "tzone":"5"
        }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer G3x91dOjReLnPNwD8WUKXFi1wmoB6IMoShpnPiOV'
      ),
    ));
    
    $response = curl_exec($curl);
}
}