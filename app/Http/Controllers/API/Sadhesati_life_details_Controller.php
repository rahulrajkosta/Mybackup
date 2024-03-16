<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sadhesati_life_details_Model;
use Validator;
use App\Http\Resources\Sadhesati_life_details_Resource;
   
class Sadhesati_life_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sadhesati_life_details_Model=new Sadhesati_life_details_Model();
        
        $Sadhesati_life_detailss = $Sadhesati_life_details_Model->index();
    
        return $this->sendResponse(Sadhesati_life_details_Resource::collection($Sadhesati_life_detailss), 'Sadhesati_life_detailss retrieved successfully.');
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
			'what_is_sadhesati' => 'required', 
			 'report' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Sadhesati_life_details_Model=new Sadhesati_life_details_Model();
        $rid = $Sadhesati_life_details_Model->store($input);
        $Sadhesati_life_details = Sadhesati_life_details_Model::find($rid);
        return $this->sendResponse(new Sadhesati_life_details_Resource($Sadhesati_life_details), 'Sadhesati_life_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sadhesati_life_details_Model=new Sadhesati_life_details_Model();
        
        $Sadhesati_life_details = $Sadhesati_life_details_Model->show($id);
  
        if (is_null($Sadhesati_life_details)) {
            return $this->sendError('Sadhesati_life_details not found.');
        }
   
        return $this->sendResponse(new Sadhesati_life_details_Resource($Sadhesati_life_details), 'Sadhesati_life_details retrieved successfully.');
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
        $Sadhesati_life_details = Sadhesati_life_details_Model::where("status","!=","D")->find($id);
		if($Sadhesati_life_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('what_is_sadhesati',$input))
			{
				$validate['what_is_sadhesati']= "required";
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
			$Sadhesati_life_details_Model=new Sadhesati_life_details_Model();
			$Sadhesati_life_detailss = $Sadhesati_life_details_Model->edit($Sadhesati_life_details,$input);
			
            $Sadhesati_life_details = Sadhesati_life_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sadhesati_life_details_Resource($Sadhesati_life_details), 'Sadhesati_life_details updated successfully.');
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
        
        $Sadhesati_life_details = Sadhesati_life_details_Model::find($id);
  
        if (is_null($Sadhesati_life_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Sadhesati_life_details_Model=new Sadhesati_life_details_Model();
           $Sadhesati_life_details_Model->remove($Sadhesati_life_details);
            return $this->sendResponse([], 'Sadhesati_life_details deleted successfully.');
        }
       
    }
}