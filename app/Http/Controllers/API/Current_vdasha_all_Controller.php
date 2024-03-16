<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Current_vdasha_all_Model;
use Validator;
use App\Http\Resources\Current_vdasha_all_Resource;
   
class Current_vdasha_all_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Current_vdasha_all_Model=new Current_vdasha_all_Model();
        
        $Current_vdasha_alls = $Current_vdasha_all_Model->index();
    
        return $this->sendResponse(Current_vdasha_all_Resource::collection($Current_vdasha_alls), 'Current_vdasha_alls retrieved successfully.');
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
			'major' => 'required', 
			 'minor' => 'required', 
			 'sub_minor' => 'required', 
			 'sub_sub_minor' => 'required', 
			 'sub_sub_sub_minor' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Current_vdasha_all_Model=new Current_vdasha_all_Model();
        $rid = $Current_vdasha_all_Model->store($input);
        $Current_vdasha_all = Current_vdasha_all_Model::find($rid);
        return $this->sendResponse(new Current_vdasha_all_Resource($Current_vdasha_all), 'Current_vdasha_all created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Current_vdasha_all_Model=new Current_vdasha_all_Model();
        
        $Current_vdasha_all = $Current_vdasha_all_Model->show($id);
  
        if (is_null($Current_vdasha_all)) {
            return $this->sendError('Current_vdasha_all not found.');
        }
   
        return $this->sendResponse(new Current_vdasha_all_Resource($Current_vdasha_all), 'Current_vdasha_all retrieved successfully.');
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
        $Current_vdasha_all = Current_vdasha_all_Model::where("status","!=","D")->find($id);
		if($Current_vdasha_all){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('major',$input))
			{
				$validate['major']= "required";
			} 
		 if (array_key_exists('minor',$input))
			{
				$validate['minor']= "required";
			} 
		 if (array_key_exists('sub_minor',$input))
			{
				$validate['sub_minor']= "required";
			} 
		 if (array_key_exists('sub_sub_minor',$input))
			{
				$validate['sub_sub_minor']= "required";
			} 
		 if (array_key_exists('sub_sub_sub_minor',$input))
			{
				$validate['sub_sub_sub_minor']= "required";
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
			$Current_vdasha_all_Model=new Current_vdasha_all_Model();
			$Current_vdasha_alls = $Current_vdasha_all_Model->edit($Current_vdasha_all,$input);
			
            $Current_vdasha_all = Current_vdasha_all_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Current_vdasha_all_Resource($Current_vdasha_all), 'Current_vdasha_all updated successfully.');
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
        
        $Current_vdasha_all = Current_vdasha_all_Model::find($id);
  
        if (is_null($Current_vdasha_all)) {
            return $this->sendError('Value not found.');
        }else{
            $Current_vdasha_all_Model=new Current_vdasha_all_Model();
           $Current_vdasha_all_Model->remove($Current_vdasha_all);
            return $this->sendResponse([], 'Current_vdasha_all deleted successfully.');
        }
       
    }
}