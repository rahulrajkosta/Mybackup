<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Planet_panchang_sunrise_Model;
use Validator;
use App\Http\Resources\Planet_panchang_sunrise_Resource;
   
class Planet_panchang_sunrise_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Planet_panchang_sunrise_Model=new Planet_panchang_sunrise_Model();
        
        $Planet_panchang_sunrises = $Planet_panchang_sunrise_Model->index();
    
        return $this->sendResponse(Planet_panchang_sunrise_Resource::collection($Planet_panchang_sunrises), 'Planet_panchang_sunrises retrieved successfully.');
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
			'planet_id' => 'required', 
			 'planet_name' => 'required', 
			 'fullDegree' => 'required', 
			 'normDegree' => 'required', 
			 'isRetro' => 'required', 
			 'sign' => 'required', 
			 'signLord' => 'required', 
			 'nakshatra' => 'required', 
			 'nakshatraLord' => 'required', 
			 'house' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Planet_panchang_sunrise_Model=new Planet_panchang_sunrise_Model();
        $rid = $Planet_panchang_sunrise_Model->store($input);
        $Planet_panchang_sunrise = Planet_panchang_sunrise_Model::find($rid);
        return $this->sendResponse(new Planet_panchang_sunrise_Resource($Planet_panchang_sunrise), 'Planet_panchang_sunrise created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Planet_panchang_sunrise_Model=new Planet_panchang_sunrise_Model();
        
        $Planet_panchang_sunrise = $Planet_panchang_sunrise_Model->show($id);
  
        if (is_null($Planet_panchang_sunrise)) {
            return $this->sendError('Planet_panchang_sunrise not found.');
        }
   
        return $this->sendResponse(new Planet_panchang_sunrise_Resource($Planet_panchang_sunrise), 'Planet_panchang_sunrise retrieved successfully.');
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
        $Planet_panchang_sunrise = Planet_panchang_sunrise_Model::where("status","!=","D")->find($id);
		if($Planet_panchang_sunrise){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('planet_id',$input))
			{
				$validate['planet_id']= "required";
			} 
		 if (array_key_exists('planet_name',$input))
			{
				$validate['planet_name']= "required";
			} 
		 if (array_key_exists('fullDegree',$input))
			{
				$validate['fullDegree']= "required";
			} 
		 if (array_key_exists('normDegree',$input))
			{
				$validate['normDegree']= "required";
			} 
		 if (array_key_exists('isRetro',$input))
			{
				$validate['isRetro']= "required";
			} 
		 if (array_key_exists('sign',$input))
			{
				$validate['sign']= "required";
			} 
		 if (array_key_exists('signLord',$input))
			{
				$validate['signLord']= "required";
			} 
		 if (array_key_exists('nakshatra',$input))
			{
				$validate['nakshatra']= "required";
			} 
		 if (array_key_exists('nakshatraLord',$input))
			{
				$validate['nakshatraLord']= "required";
			} 
		 if (array_key_exists('house',$input))
			{
				$validate['house']= "required";
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
			$Planet_panchang_sunrise_Model=new Planet_panchang_sunrise_Model();
			$Planet_panchang_sunrises = $Planet_panchang_sunrise_Model->edit($Planet_panchang_sunrise,$input);
			
            $Planet_panchang_sunrise = Planet_panchang_sunrise_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Planet_panchang_sunrise_Resource($Planet_panchang_sunrise), 'Planet_panchang_sunrise updated successfully.');
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
        
        $Planet_panchang_sunrise = Planet_panchang_sunrise_Model::find($id);
  
        if (is_null($Planet_panchang_sunrise)) {
            return $this->sendError('Value not found.');
        }else{
            $Planet_panchang_sunrise_Model=new Planet_panchang_sunrise_Model();
           $Planet_panchang_sunrise_Model->remove($Planet_panchang_sunrise);
            return $this->sendResponse([], 'Planet_panchang_sunrise deleted successfully.');
        }
       
    }
}