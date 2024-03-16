<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Basic_panchang_sunrise_Model;
use Validator;
use App\Http\Resources\Basic_panchang_sunrise_Resource;
   
class Basic_panchang_sunrise_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Basic_panchang_sunrise_Model=new Basic_panchang_sunrise_Model();
        
        $Basic_panchang_sunrises = $Basic_panchang_sunrise_Model->index();
    
        return $this->sendResponse(Basic_panchang_sunrise_Resource::collection($Basic_panchang_sunrises), 'Basic_panchang_sunrises retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = json_decode($request->getContent(),true);
        $validator = Validator::make($input, [
            // 'name' => 'required',
			'day' => 'required', 
			 'tithi' => 'required', 
			 'yog' => 'required', 
			 'nakshatra' => 'required', 
			 'karan' => 'required', 
			 'sunrise' => 'required', 
			 'sunset' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Basic_panchang_sunrise_Model=new Basic_panchang_sunrise_Model();
        $rid = $Basic_panchang_sunrise_Model->store($input);
        $Basic_panchang_sunrise = Basic_panchang_sunrise_Model::find($rid);
        return $this->sendResponse(new Basic_panchang_sunrise_Resource($Basic_panchang_sunrise), 'Basic_panchang_sunrise created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Basic_panchang_sunrise_Model=new Basic_panchang_sunrise_Model();
        
        $Basic_panchang_sunrise = $Basic_panchang_sunrise_Model->show($id);
  
        if (is_null($Basic_panchang_sunrise)) {
            return $this->sendError('Basic_panchang_sunrise not found.');
        }
   
        return $this->sendResponse(new Basic_panchang_sunrise_Resource($Basic_panchang_sunrise), 'Basic_panchang_sunrise retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Basic_panchang_sunrise = Basic_panchang_sunrise_Model::where("status","!=","D")->find($id);
		if($Basic_panchang_sunrise){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('day',$input))
			{
				$validate['day']= "required";
			} 
		 if (array_key_exists('tithi',$input))
			{
				$validate['tithi']= "required";
			} 
		 if (array_key_exists('yog',$input))
			{
				$validate['yog']= "required";
			} 
		 if (array_key_exists('nakshatra',$input))
			{
				$validate['nakshatra']= "required";
			} 
		 if (array_key_exists('karan',$input))
			{
				$validate['karan']= "required";
			} 
		 if (array_key_exists('sunrise',$input))
			{
				$validate['sunrise']= "required";
			} 
		 if (array_key_exists('sunset',$input))
			{
				$validate['sunset']= "required";
			} 
		 if (array_key_exists('user_id',$input))
			{
				$validate['user_id']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Basic_panchang_sunrise_Model=new Basic_panchang_sunrise_Model();
			$Basic_panchang_sunrises = $Basic_panchang_sunrise_Model->edit($Basic_panchang_sunrise,$input);
			
            $Basic_panchang_sunrise = Basic_panchang_sunrise_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Basic_panchang_sunrise_Resource($Basic_panchang_sunrise), 'Basic_panchang_sunrise updated successfully.');
		}else{
			return $this->sendError('Value not found.');
		}
        
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Basic_panchang_sunrise = Basic_panchang_sunrise_Model::find($id);
  
        if (is_null($Basic_panchang_sunrise)) {
            return $this->sendError('Value not found.');
        }else{
            $Basic_panchang_sunrise_Model=new Basic_panchang_sunrise_Model();
           $Basic_panchang_sunrise_Model->remove($Basic_panchang_sunrise);
            return $this->sendResponse([], 'Basic_panchang_sunrise deleted successfully.');
        }
       
    }
}