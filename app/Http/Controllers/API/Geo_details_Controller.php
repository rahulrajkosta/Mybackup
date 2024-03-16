<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Geo_details_Model;
use Validator;
use App\Http\Resources\Geo_details_Resource;
   
class Geo_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Geo_details_Model=new Geo_details_Model();
        
        $Geo_detailss = $Geo_details_Model->index();
    
        return $this->sendResponse(Geo_details_Resource::collection($Geo_detailss), 'Geo_detailss retrieved successfully.');
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
			'geonames' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Geo_details_Model=new Geo_details_Model();
        $rid = $Geo_details_Model->store($input);
        $Geo_details = Geo_details_Model::find($rid);
        return $this->sendResponse(new Geo_details_Resource($Geo_details), 'Geo_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Geo_details_Model=new Geo_details_Model();
        
        $Geo_details = $Geo_details_Model->show($id);
  
        if (is_null($Geo_details)) {
            return $this->sendError('Geo_details not found.');
        }
   
        return $this->sendResponse(new Geo_details_Resource($Geo_details), 'Geo_details retrieved successfully.');
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
        $Geo_details = Geo_details_Model::where("status","!=","D")->find($id);
		if($Geo_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('geonames',$input))
			{
				$validate['geonames']= "required";
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
			$Geo_details_Model=new Geo_details_Model();
			$Geo_detailss = $Geo_details_Model->edit($Geo_details,$input);
			
            $Geo_details = Geo_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Geo_details_Resource($Geo_details), 'Geo_details updated successfully.');
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
        
        $Geo_details = Geo_details_Model::find($id);
  
        if (is_null($Geo_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Geo_details_Model=new Geo_details_Model();
           $Geo_details_Model->remove($Geo_details);
            return $this->sendResponse([], 'Geo_details deleted successfully.');
        }
       
    }
}