<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_details_Model;
use Validator;
use App\Http\Resources\Varshaphal_details_Resource;
   
class Varshaphal_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_details_Model=new Varshaphal_details_Model();
        
        $Varshaphal_detailss = $Varshaphal_details_Model->index();
    
        return $this->sendResponse(Varshaphal_details_Resource::collection($Varshaphal_detailss), 'Varshaphal_detailss retrieved successfully.');
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
			'varshaphala_year' => 'required', 
			 'age_of_native' => 'required', 
			 'ayanamsha_name' => 'required', 
			 'ayanamsha_degree' => 'required', 
			 'varshaphala_timestamp' => 'required', 
			 'native_birth_date' => 'required', 
			 'varshaphala_date' => 'required', 
			 'panchadhikari' => 'required', 
			 'varshaphala_year_lord' => 'required', 
			 'varshaphala_muntha' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_details_Model=new Varshaphal_details_Model();
        $rid = $Varshaphal_details_Model->store($input);
        $Varshaphal_details = Varshaphal_details_Model::find($rid);
        return $this->sendResponse(new Varshaphal_details_Resource($Varshaphal_details), 'Varshaphal_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_details_Model=new Varshaphal_details_Model();
        
        $Varshaphal_details = $Varshaphal_details_Model->show($id);
  
        if (is_null($Varshaphal_details)) {
            return $this->sendError('Varshaphal_details not found.');
        }
   
        return $this->sendResponse(new Varshaphal_details_Resource($Varshaphal_details), 'Varshaphal_details retrieved successfully.');
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
        $Varshaphal_details = Varshaphal_details_Model::where("status","!=","D")->find($id);
		if($Varshaphal_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('varshaphala_year',$input))
			{
				$validate['varshaphala_year']= "required";
			} 
		 if (array_key_exists('age_of_native',$input))
			{
				$validate['age_of_native']= "required";
			} 
		 if (array_key_exists('ayanamsha_name',$input))
			{
				$validate['ayanamsha_name']= "required";
			} 
		 if (array_key_exists('ayanamsha_degree',$input))
			{
				$validate['ayanamsha_degree']= "required";
			} 
		 if (array_key_exists('varshaphala_timestamp',$input))
			{
				$validate['varshaphala_timestamp']= "required";
			} 
		 if (array_key_exists('native_birth_date',$input))
			{
				$validate['native_birth_date']= "required";
			} 
		 if (array_key_exists('varshaphala_date',$input))
			{
				$validate['varshaphala_date']= "required";
			} 
		 if (array_key_exists('panchadhikari',$input))
			{
				$validate['panchadhikari']= "required";
			} 
		 if (array_key_exists('varshaphala_year_lord',$input))
			{
				$validate['varshaphala_year_lord']= "required";
			} 
		 if (array_key_exists('varshaphala_muntha',$input))
			{
				$validate['varshaphala_muntha']= "required";
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
			$Varshaphal_details_Model=new Varshaphal_details_Model();
			$Varshaphal_detailss = $Varshaphal_details_Model->edit($Varshaphal_details,$input);
			
            $Varshaphal_details = Varshaphal_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_details_Resource($Varshaphal_details), 'Varshaphal_details updated successfully.');
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
        
        $Varshaphal_details = Varshaphal_details_Model::find($id);
  
        if (is_null($Varshaphal_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_details_Model=new Varshaphal_details_Model();
           $Varshaphal_details_Model->remove($Varshaphal_details);
            return $this->sendResponse([], 'Varshaphal_details deleted successfully.');
        }
       
    }
}