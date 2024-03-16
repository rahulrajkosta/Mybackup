<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Planets_Model;
use Validator;
use App\Http\Resources\Planets_Resource;
   
class Planets_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Planets_Model=new Planets_Model();
        
        $Planetss = $Planets_Model->index();
    
        return $this->sendResponse(Planets_Resource::collection($Planetss), 'Planetss retrieved successfully.');
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
        
        $Planets_Model=new Planets_Model();
        $rid = $Planets_Model->store($input);
        $Planets = Planets_Model::find($rid);
        return $this->sendResponse(new Planets_Resource($Planets), 'Planets created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Planets_Model=new Planets_Model();
        
        $Planets = $Planets_Model->show($id);
  
        if (is_null($Planets)) {
            return $this->sendError('Planets not found.');
        }
   
        return $this->sendResponse(new Planets_Resource($Planets), 'Planets retrieved successfully.');
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
        $Planets = Planets_Model::where("status","!=","D")->find($id);
		if($Planets){
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
			$Planets_Model=new Planets_Model();
			$Planetss = $Planets_Model->edit($Planets,$input);
			
            $Planets = Planets_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Planets_Resource($Planets), 'Planets updated successfully.');
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
        
        $Planets = Planets_Model::find($id);
  
        if (is_null($Planets)) {
            return $this->sendError('Value not found.');
        }else{
            $Planets_Model=new Planets_Model();
           $Planets_Model->remove($Planets);
            return $this->sendResponse([], 'Planets deleted successfully.');
        }
       
    }
}