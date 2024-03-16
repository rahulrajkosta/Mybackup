<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_planets_Model;
use Validator;
use App\Http\Resources\Varshaphal_planets_Resource;
   
class Varshaphal_planets_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        
        $Varshaphal_planetss = $Varshaphal_planets_Model->index();
    
        return $this->sendResponse(Varshaphal_planets_Resource::collection($Varshaphal_planetss), 'Varshaphal_planetss retrieved successfully.');
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
			 'signLord' => 'required', 
			 'nakshatra' => 'required', 
			 'nakshatraLord' => 'required', 
			 'house' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        $rid = $Varshaphal_planets_Model->store($input);
        $Varshaphal_planets = Varshaphal_planets_Model::find($rid);
        return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        
        $Varshaphal_planets = $Varshaphal_planets_Model->show($id);
  
        if (is_null($Varshaphal_planets)) {
            return $this->sendError('Varshaphal_planets not found.');
        }
   
        return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets retrieved successfully.');
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
        $Varshaphal_planets = Varshaphal_planets_Model::where("status","!=","D")->find($id);
		if($Varshaphal_planets){
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
			$Varshaphal_planets_Model=new Varshaphal_planets_Model();
			$Varshaphal_planetss = $Varshaphal_planets_Model->edit($Varshaphal_planets,$input);
			
            $Varshaphal_planets = Varshaphal_planets_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets updated successfully.');
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
        
        $Varshaphal_planets = Varshaphal_planets_Model::find($id);
  
        if (is_null($Varshaphal_planets)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_planets_Model=new Varshaphal_planets_Model();
           $Varshaphal_planets_Model->remove($Varshaphal_planets);
            return $this->sendResponse([], 'Varshaphal_planets deleted successfully.');
        }
       
    }
}