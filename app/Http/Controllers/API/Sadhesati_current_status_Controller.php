<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sadhesati_current_status_Model;
use Validator;
use App\Http\Resources\Sadhesati_current_status_Resource;
   
class Sadhesati_current_status_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sadhesati_current_status_Model=new Sadhesati_current_status_Model();
        
        $Sadhesati_current_statuss = $Sadhesati_current_status_Model->index();
    
        return $this->sendResponse(Sadhesati_current_status_Resource::collection($Sadhesati_current_statuss), 'Sadhesati_current_statuss retrieved successfully.');
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
			'consideration_date' => 'required', 
			 'is_saturn_retrograde' => 'required', 
			 'moon_sign' => 'required', 
			 'saturn_sign' => 'required', 
			 'is_undergoing_sadhesati' => 'required', 
			 'sadhesati_status' => 'required', 
			 'what_is_sadhesati' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Sadhesati_current_status_Model=new Sadhesati_current_status_Model();
        $rid = $Sadhesati_current_status_Model->store($input);
        $Sadhesati_current_status = Sadhesati_current_status_Model::find($rid);
        return $this->sendResponse(new Sadhesati_current_status_Resource($Sadhesati_current_status), 'Sadhesati_current_status created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sadhesati_current_status_Model=new Sadhesati_current_status_Model();
        
        $Sadhesati_current_status = $Sadhesati_current_status_Model->show($id);
  
        if (is_null($Sadhesati_current_status)) {
            return $this->sendError('Sadhesati_current_status not found.');
        }
   
        return $this->sendResponse(new Sadhesati_current_status_Resource($Sadhesati_current_status), 'Sadhesati_current_status retrieved successfully.');
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
        $Sadhesati_current_status = Sadhesati_current_status_Model::where("status","!=","D")->find($id);
		if($Sadhesati_current_status){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('consideration_date',$input))
			{
				$validate['consideration_date']= "required";
			} 
		 if (array_key_exists('is_saturn_retrograde',$input))
			{
				$validate['is_saturn_retrograde']= "required";
			} 
		 if (array_key_exists('moon_sign',$input))
			{
				$validate['moon_sign']= "required";
			} 
		 if (array_key_exists('saturn_sign',$input))
			{
				$validate['saturn_sign']= "required";
			} 
		 if (array_key_exists('is_undergoing_sadhesati',$input))
			{
				$validate['is_undergoing_sadhesati']= "required";
			} 
		 if (array_key_exists('sadhesati_status',$input))
			{
				$validate['sadhesati_status']= "required";
			} 
		 if (array_key_exists('what_is_sadhesati',$input))
			{
				$validate['what_is_sadhesati']= "required";
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
			$Sadhesati_current_status_Model=new Sadhesati_current_status_Model();
			$Sadhesati_current_statuss = $Sadhesati_current_status_Model->edit($Sadhesati_current_status,$input);
			
            $Sadhesati_current_status = Sadhesati_current_status_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sadhesati_current_status_Resource($Sadhesati_current_status), 'Sadhesati_current_status updated successfully.');
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
        
        $Sadhesati_current_status = Sadhesati_current_status_Model::find($id);
  
        if (is_null($Sadhesati_current_status)) {
            return $this->sendError('Value not found.');
        }else{
            $Sadhesati_current_status_Model=new Sadhesati_current_status_Model();
           $Sadhesati_current_status_Model->remove($Sadhesati_current_status);
            return $this->sendResponse([], 'Sadhesati_current_status deleted successfully.');
        }
       
    }
}