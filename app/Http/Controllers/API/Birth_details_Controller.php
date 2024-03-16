<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Birth_details_Model;
use Validator;
use App\Http\Resources\Birth_details_Resource;
   
class Birth_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Birth_details_Model=new Birth_details_Model();
        
        $Birth_detailss = $Birth_details_Model->index();
    
        return $this->sendResponse(Birth_details_Resource::collection($Birth_detailss), 'Birth_detailss retrieved successfully.');
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
			'year' => 'required', 
			 'month' => 'required', 
			 'day' => 'required', 
			 'hour' => 'required', 
			 'minute' => 'required', 
			 'latitude' => 'required', 
			 'longitude' => 'required', 
			 'timezone' => 'required', 
			 'sunrise' => 'required', 
			 'sunset' => 'required', 
			 'ayanamsha' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Birth_details_Model=new Birth_details_Model();
        $rid = $Birth_details_Model->store($input);
        $Birth_details = Birth_details_Model::find($rid);
        return $this->sendResponse(new Birth_details_Resource($Birth_details), 'Birth_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Birth_details_Model=new Birth_details_Model();
        
        $Birth_details = $Birth_details_Model->show($id);
  
        if (is_null($Birth_details)) {
            return $this->sendError('Birth_details not found.');
        }
   
        return $this->sendResponse(new Birth_details_Resource($Birth_details), 'Birth_details retrieved successfully.');
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
        $Birth_details = Birth_details_Model::where("status","!=","D")->find($id);
		if($Birth_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('year',$input))
			{
				$validate['year']= "required";
			} 
		 if (array_key_exists('month',$input))
			{
				$validate['month']= "required";
			} 
		 if (array_key_exists('day',$input))
			{
				$validate['day']= "required";
			} 
		 if (array_key_exists('hour',$input))
			{
				$validate['hour']= "required";
			} 
		 if (array_key_exists('minute',$input))
			{
				$validate['minute']= "required";
			} 
		 if (array_key_exists('latitude',$input))
			{
				$validate['latitude']= "required";
			} 
		 if (array_key_exists('longitude',$input))
			{
				$validate['longitude']= "required";
			} 
		 if (array_key_exists('timezone',$input))
			{
				$validate['timezone']= "required";
			} 
		 if (array_key_exists('sunrise',$input))
			{
				$validate['sunrise']= "required";
			} 
		 if (array_key_exists('sunset',$input))
			{
				$validate['sunset']= "required";
			} 
		 if (array_key_exists('ayanamsha',$input))
			{
				$validate['ayanamsha']= "required";
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
			$Birth_details_Model=new Birth_details_Model();
			$Birth_detailss = $Birth_details_Model->edit($Birth_details,$input);
			
            $Birth_details = Birth_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Birth_details_Resource($Birth_details), 'Birth_details updated successfully.');
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
        
        $Birth_details = Birth_details_Model::find($id);
  
        if (is_null($Birth_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Birth_details_Model=new Birth_details_Model();
           $Birth_details_Model->remove($Birth_details);
            return $this->sendResponse([], 'Birth_details deleted successfully.');
        }
       
    }
}