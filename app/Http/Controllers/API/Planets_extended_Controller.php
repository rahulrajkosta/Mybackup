<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Planets_extended_Model;
use Validator;
use App\Http\Resources\Planets_extended_Resource;
   
class Planets_extended_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Planets_extended_Model=new Planets_extended_Model();
        
        $Planets_extendeds = $Planets_extended_Model->index();
    
        return $this->sendResponse(Planets_extended_Resource::collection($Planets_extendeds), 'Planets_extendeds retrieved successfully.');
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
			 'speed' => 'required', 
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
        
        $Planets_extended_Model=new Planets_extended_Model();
        $rid = $Planets_extended_Model->store($input);
        $Planets_extended = Planets_extended_Model::find($rid);
        return $this->sendResponse(new Planets_extended_Resource($Planets_extended), 'Planets_extended created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Planets_extended_Model=new Planets_extended_Model();
        
        $Planets_extended = $Planets_extended_Model->show($id);
  
        if (is_null($Planets_extended)) {
            return $this->sendError('Planets_extended not found.');
        }
   
        return $this->sendResponse(new Planets_extended_Resource($Planets_extended), 'Planets_extended retrieved successfully.');
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
        $Planets_extended = Planets_extended_Model::where("status","!=","D")->find($id);
		if($Planets_extended){
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
		 if (array_key_exists('speed',$input))
			{
				$validate['speed']= "required";
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
			$Planets_extended_Model=new Planets_extended_Model();
			$Planets_extendeds = $Planets_extended_Model->edit($Planets_extended,$input);
			
            $Planets_extended = Planets_extended_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Planets_extended_Resource($Planets_extended), 'Planets_extended updated successfully.');
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
        
        $Planets_extended = Planets_extended_Model::find($id);
  
        if (is_null($Planets_extended)) {
            return $this->sendError('Value not found.');
        }else{
            $Planets_extended_Model=new Planets_extended_Model();
           $Planets_extended_Model->remove($Planets_extended);
            return $this->sendResponse([], 'Planets_extended deleted successfully.');
        }
       
    }
}