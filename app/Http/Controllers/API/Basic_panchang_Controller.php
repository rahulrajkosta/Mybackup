<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Basic_panchang_Model;
use Validator;
use App\Http\Resources\Basic_panchang_Resource;
   
class Basic_panchang_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Basic_panchang_Model=new Basic_panchang_Model();
        
        $Basic_panchangs = $Basic_panchang_Model->index();
    
        return $this->sendResponse(Basic_panchang_Resource::collection($Basic_panchangs), 'Basic_panchangs retrieved successfully.');
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
			 'nakshatra' => 'required', 
			 'yog' => 'required', 
			 'karan' => 'required', 
			 'sunrise' => 'required', 
			 'sunset' => 'required', 
			 'vedic_sunrise' => 'required', 
			 'vedic_sunset' => 'required', 
			 'created_at' => 'required', 
			 'updated_at' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Basic_panchang_Model=new Basic_panchang_Model();
        $rid = $Basic_panchang_Model->store($input);
        $Basic_panchang = Basic_panchang_Model::find($rid);
        return $this->sendResponse(new Basic_panchang_Resource($Basic_panchang), 'Basic_panchang created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Basic_panchang_Model=new Basic_panchang_Model();
        
        $Basic_panchang = $Basic_panchang_Model->show($id);
  
        if (is_null($Basic_panchang)) {
            return $this->sendError('Basic_panchang not found.');
        }
   
        return $this->sendResponse(new Basic_panchang_Resource($Basic_panchang), 'Basic_panchang retrieved successfully.');
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
        $Basic_panchang = Basic_panchang_Model::where("status","!=","D")->find($id);
		if($Basic_panchang){
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
		 if (array_key_exists('nakshatra',$input))
			{
				$validate['nakshatra']= "required";
			} 
		 if (array_key_exists('yog',$input))
			{
				$validate['yog']= "required";
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
		 if (array_key_exists('vedic_sunrise',$input))
			{
				$validate['vedic_sunrise']= "required";
			} 
		 if (array_key_exists('vedic_sunset',$input))
			{
				$validate['vedic_sunset']= "required";
			} 
		 if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
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
			$Basic_panchang_Model=new Basic_panchang_Model();
			$Basic_panchangs = $Basic_panchang_Model->edit($Basic_panchang,$input);
			
            $Basic_panchang = Basic_panchang_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Basic_panchang_Resource($Basic_panchang), 'Basic_panchang updated successfully.');
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
        
        $Basic_panchang = Basic_panchang_Model::find($id);
  
        if (is_null($Basic_panchang)) {
            return $this->sendError('Value not found.');
        }else{
            $Basic_panchang_Model=new Basic_panchang_Model();
           $Basic_panchang_Model->remove($Basic_panchang);
            return $this->sendResponse([], 'Basic_panchang deleted successfully.');
        }
       
    }
}