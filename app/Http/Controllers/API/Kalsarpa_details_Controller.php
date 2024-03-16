<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Kalsarpa_details_Model;
use Validator;
use App\Http\Resources\Kalsarpa_details_Resource;
   
class Kalsarpa_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kalsarpa_details_Model=new Kalsarpa_details_Model();
        
        $Kalsarpa_detailss = $Kalsarpa_details_Model->index();
    
        return $this->sendResponse(Kalsarpa_details_Resource::collection($Kalsarpa_detailss), 'Kalsarpa_detailss retrieved successfully.');
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
			'present' => 'required', 
			 'type' => 'required', 
			 'one_line' => 'required', 
			 'report' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Kalsarpa_details_Model=new Kalsarpa_details_Model();
        $rid = $Kalsarpa_details_Model->store($input);
        $Kalsarpa_details = Kalsarpa_details_Model::find($rid);
        return $this->sendResponse(new Kalsarpa_details_Resource($Kalsarpa_details), 'Kalsarpa_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Kalsarpa_details_Model=new Kalsarpa_details_Model();
        
        $Kalsarpa_details = $Kalsarpa_details_Model->show($id);
  
        if (is_null($Kalsarpa_details)) {
            return $this->sendError('Kalsarpa_details not found.');
        }
   
        return $this->sendResponse(new Kalsarpa_details_Resource($Kalsarpa_details), 'Kalsarpa_details retrieved successfully.');
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
        $Kalsarpa_details = Kalsarpa_details_Model::where("status","!=","D")->find($id);
		if($Kalsarpa_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('present',$input))
			{
				$validate['present']= "required";
			} 
		 if (array_key_exists('type',$input))
			{
				$validate['type']= "required";
			} 
		 if (array_key_exists('one_line',$input))
			{
				$validate['one_line']= "required";
			} 
		 if (array_key_exists('report',$input))
			{
				$validate['report']= "required";
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
			$Kalsarpa_details_Model=new Kalsarpa_details_Model();
			$Kalsarpa_detailss = $Kalsarpa_details_Model->edit($Kalsarpa_details,$input);
			
            $Kalsarpa_details = Kalsarpa_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Kalsarpa_details_Resource($Kalsarpa_details), 'Kalsarpa_details updated successfully.');
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
        
        $Kalsarpa_details = Kalsarpa_details_Model::find($id);
  
        if (is_null($Kalsarpa_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Kalsarpa_details_Model=new Kalsarpa_details_Model();
           $Kalsarpa_details_Model->remove($Kalsarpa_details);
            return $this->sendResponse([], 'Kalsarpa_details deleted successfully.');
        }
       
    }
}