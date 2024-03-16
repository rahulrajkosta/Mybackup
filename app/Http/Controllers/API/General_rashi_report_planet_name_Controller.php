<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\General_rashi_report_planet_name_Model;
use Validator;
use App\Http\Resources\General_rashi_report_planet_name_Resource;
   
class General_rashi_report_planet_name_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $General_rashi_report_planet_name_Model=new General_rashi_report_planet_name_Model();
        
        $General_rashi_report_planet_names = $General_rashi_report_planet_name_Model->index();
    
        return $this->sendResponse(General_rashi_report_planet_name_Resource::collection($General_rashi_report_planet_names), 'General_rashi_report_planet_names retrieved successfully.');
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
			 'house_report' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $General_rashi_report_planet_name_Model=new General_rashi_report_planet_name_Model();
        $rid = $General_rashi_report_planet_name_Model->store($input);
        $General_rashi_report_planet_name = General_rashi_report_planet_name_Model::find($rid);
        return $this->sendResponse(new General_rashi_report_planet_name_Resource($General_rashi_report_planet_name), 'General_rashi_report_planet_name created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $General_rashi_report_planet_name_Model=new General_rashi_report_planet_name_Model();
        
        $General_rashi_report_planet_name = $General_rashi_report_planet_name_Model->show($id);
  
        if (is_null($General_rashi_report_planet_name)) {
            return $this->sendError('General_rashi_report_planet_name not found.');
        }
   
        return $this->sendResponse(new General_rashi_report_planet_name_Resource($General_rashi_report_planet_name), 'General_rashi_report_planet_name retrieved successfully.');
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
        $General_rashi_report_planet_name = General_rashi_report_planet_name_Model::where("status","!=","D")->find($id);
		if($General_rashi_report_planet_name){
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
		 if (array_key_exists('house_report',$input))
			{
				$validate['house_report']= "required";
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
			$General_rashi_report_planet_name_Model=new General_rashi_report_planet_name_Model();
			$General_rashi_report_planet_names = $General_rashi_report_planet_name_Model->edit($General_rashi_report_planet_name,$input);
			
            $General_rashi_report_planet_name = General_rashi_report_planet_name_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new General_rashi_report_planet_name_Resource($General_rashi_report_planet_name), 'General_rashi_report_planet_name updated successfully.');
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
        
        $General_rashi_report_planet_name = General_rashi_report_planet_name_Model::find($id);
  
        if (is_null($General_rashi_report_planet_name)) {
            return $this->sendError('Value not found.');
        }else{
            $General_rashi_report_planet_name_Model=new General_rashi_report_planet_name_Model();
           $General_rashi_report_planet_name_Model->remove($General_rashi_report_planet_name);
            return $this->sendResponse([], 'General_rashi_report_planet_name deleted successfully.');
        }
       
    }
}