<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Planet_nature_Model;
use Validator;
use App\Http\Resources\Planet_nature_Resource;
   
class Planet_nature_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Planet_nature_Model=new Planet_nature_Model();
        
        $Planet_natures = $Planet_nature_Model->index();
    
        return $this->sendResponse(Planet_nature_Resource::collection($Planet_natures), 'Planet_natures retrieved successfully.');
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
			'GOOD' => 'required', 
			 'BAD' => 'required', 
			 'KILLER' => 'required', 
			 'YOGAKARAKA' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Planet_nature_Model=new Planet_nature_Model();
        $rid = $Planet_nature_Model->store($input);
        $Planet_nature = Planet_nature_Model::find($rid);
        return $this->sendResponse(new Planet_nature_Resource($Planet_nature), 'Planet_nature created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Planet_nature_Model=new Planet_nature_Model();
        
        $Planet_nature = $Planet_nature_Model->show($id);
  
        if (is_null($Planet_nature)) {
            return $this->sendError('Planet_nature not found.');
        }
   
        return $this->sendResponse(new Planet_nature_Resource($Planet_nature), 'Planet_nature retrieved successfully.');
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
        $Planet_nature = Planet_nature_Model::where("status","!=","D")->find($id);
		if($Planet_nature){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('GOOD',$input))
			{
				$validate['GOOD']= "required";
			} 
		 if (array_key_exists('BAD',$input))
			{
				$validate['BAD']= "required";
			} 
		 if (array_key_exists('KILLER',$input))
			{
				$validate['KILLER']= "required";
			} 
		 if (array_key_exists('YOGAKARAKA',$input))
			{
				$validate['YOGAKARAKA']= "required";
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
			$Planet_nature_Model=new Planet_nature_Model();
			$Planet_natures = $Planet_nature_Model->edit($Planet_nature,$input);
			
            $Planet_nature = Planet_nature_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Planet_nature_Resource($Planet_nature), 'Planet_nature updated successfully.');
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
        
        $Planet_nature = Planet_nature_Model::find($id);
  
        if (is_null($Planet_nature)) {
            return $this->sendError('Value not found.');
        }else{
            $Planet_nature_Model=new Planet_nature_Model();
           $Planet_nature_Model->remove($Planet_nature);
            return $this->sendResponse([], 'Planet_nature deleted successfully.');
        }
       
    }
}