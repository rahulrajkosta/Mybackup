<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\General_ascendant_report_Model;
use Validator;
use App\Http\Resources\General_ascendant_report_Resource;
   
class General_ascendant_report_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $General_ascendant_report_Model=new General_ascendant_report_Model();
        
        $General_ascendant_reports = $General_ascendant_report_Model->index();
    
        return $this->sendResponse(General_ascendant_report_Resource::collection($General_ascendant_reports), 'General_ascendant_reports retrieved successfully.');
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
			'asc_report' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $General_ascendant_report_Model=new General_ascendant_report_Model();
        $rid = $General_ascendant_report_Model->store($input);
        $General_ascendant_report = General_ascendant_report_Model::find($rid);
        return $this->sendResponse(new General_ascendant_report_Resource($General_ascendant_report), 'General_ascendant_report created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $General_ascendant_report_Model=new General_ascendant_report_Model();
        
        $General_ascendant_report = $General_ascendant_report_Model->show($id);
  
        if (is_null($General_ascendant_report)) {
            return $this->sendError('General_ascendant_report not found.');
        }
   
        return $this->sendResponse(new General_ascendant_report_Resource($General_ascendant_report), 'General_ascendant_report retrieved successfully.');
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
        $General_ascendant_report = General_ascendant_report_Model::where("status","!=","D")->find($id);
		if($General_ascendant_report){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('asc_report',$input))
			{
				$validate['asc_report']= "required";
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
			$General_ascendant_report_Model=new General_ascendant_report_Model();
			$General_ascendant_reports = $General_ascendant_report_Model->edit($General_ascendant_report,$input);
			
            $General_ascendant_report = General_ascendant_report_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new General_ascendant_report_Resource($General_ascendant_report), 'General_ascendant_report updated successfully.');
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
        
        $General_ascendant_report = General_ascendant_report_Model::find($id);
  
        if (is_null($General_ascendant_report)) {
            return $this->sendError('Value not found.');
        }else{
            $General_ascendant_report_Model=new General_ascendant_report_Model();
           $General_ascendant_report_Model->remove($General_ascendant_report);
            return $this->sendResponse([], 'General_ascendant_report deleted successfully.');
        }
       
    }
}