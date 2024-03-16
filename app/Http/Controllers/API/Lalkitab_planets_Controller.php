<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Lalkitab_planets_Model;
use Validator;
use App\Http\Resources\Lalkitab_planets_Resource;
   
class Lalkitab_planets_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lalkitab_planets_Model=new Lalkitab_planets_Model();
        
        $Lalkitab_planetss = $Lalkitab_planets_Model->index();
    
        return $this->sendResponse(Lalkitab_planets_Resource::collection($Lalkitab_planetss), 'Lalkitab_planetss retrieved successfully.');
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
			'planet' => 'required', 
			 'rashi' => 'required', 
			 'soya' => 'required', 
			 'position' => 'required', 
			 'nature' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Lalkitab_planets_Model=new Lalkitab_planets_Model();
        $rid = $Lalkitab_planets_Model->store($input);
        $Lalkitab_planets = Lalkitab_planets_Model::find($rid);
        return $this->sendResponse(new Lalkitab_planets_Resource($Lalkitab_planets), 'Lalkitab_planets created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Lalkitab_planets_Model=new Lalkitab_planets_Model();
        
        $Lalkitab_planets = $Lalkitab_planets_Model->show($id);
  
        if (is_null($Lalkitab_planets)) {
            return $this->sendError('Lalkitab_planets not found.');
        }
   
        return $this->sendResponse(new Lalkitab_planets_Resource($Lalkitab_planets), 'Lalkitab_planets retrieved successfully.');
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
        $Lalkitab_planets = Lalkitab_planets_Model::where("status","!=","D")->find($id);
		if($Lalkitab_planets){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('planet',$input))
			{
				$validate['planet']= "required";
			} 
		 if (array_key_exists('rashi',$input))
			{
				$validate['rashi']= "required";
			} 
		 if (array_key_exists('soya',$input))
			{
				$validate['soya']= "required";
			} 
		 if (array_key_exists('position',$input))
			{
				$validate['position']= "required";
			} 
		 if (array_key_exists('nature',$input))
			{
				$validate['nature']= "required";
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
			$Lalkitab_planets_Model=new Lalkitab_planets_Model();
			$Lalkitab_planetss = $Lalkitab_planets_Model->edit($Lalkitab_planets,$input);
			
            $Lalkitab_planets = Lalkitab_planets_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Lalkitab_planets_Resource($Lalkitab_planets), 'Lalkitab_planets updated successfully.');
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
        
        $Lalkitab_planets = Lalkitab_planets_Model::find($id);
  
        if (is_null($Lalkitab_planets)) {
            return $this->sendError('Value not found.');
        }else{
            $Lalkitab_planets_Model=new Lalkitab_planets_Model();
           $Lalkitab_planets_Model->remove($Lalkitab_planets);
            return $this->sendResponse([], 'Lalkitab_planets deleted successfully.');
        }
       
    }
}