<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Current_chardasha_Model;
use Validator;
use App\Http\Resources\Current_chardasha_Resource;
   
class Current_chardasha_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Current_chardasha_Model=new Current_chardasha_Model();
        
        $Current_chardashas = $Current_chardasha_Model->index();
    
        return $this->sendResponse(Current_chardasha_Resource::collection($Current_chardashas), 'Current_chardashas retrieved successfully.');
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
			//'created_at' => 'required', 
			 //'updated_at' => 'required', 
			 'day' => 'required', 
			 'month' => 'required', 
			 'year' => 'required', 
			 'hour' => 'required', 
			 'min' => 'required', 
			 'lat' => 'required', 
			 'lon' => 'required', 
			 'tzone' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Current_chardasha_Model=new Current_chardasha_Model();
        $rid = $Current_chardasha_Model->store($input);
        $Current_chardasha = Current_chardasha_Model::find($rid);
        return $this->sendResponse(new Current_chardasha_Resource($Current_chardasha), 'Current_chardasha created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Current_chardasha_Model=new Current_chardasha_Model();
        
        $Current_chardasha = $Current_chardasha_Model->show($id);
  
        if (is_null($Current_chardasha)) {
            return $this->sendError('Current_chardasha not found.');
        }
   
        return $this->sendResponse(new Current_chardasha_Resource($Current_chardasha), 'Current_chardasha retrieved successfully.');
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
        $Current_chardasha = Current_chardasha_Model::where("status","!=","D")->find($id);
		if($Current_chardasha){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
			} 
		 if (array_key_exists('day',$input))
			{
				$validate['day']= "required";
			} 
		 if (array_key_exists('month',$input))
			{
				$validate['month']= "required";
			} 
		 if (array_key_exists('year',$input))
			{
				$validate['year']= "required";
			} 
		 if (array_key_exists('hour',$input))
			{
				$validate['hour']= "required";
			} 
		 if (array_key_exists('min',$input))
			{
				$validate['min']= "required";
			} 
		 if (array_key_exists('lat',$input))
			{
				$validate['lat']= "required";
			} 
		 if (array_key_exists('lon',$input))
			{
				$validate['lon']= "required";
			} 
		 if (array_key_exists('tzone',$input))
			{
				$validate['tzone']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Current_chardasha_Model=new Current_chardasha_Model();
			$Current_chardashas = $Current_chardasha_Model->edit($Current_chardasha,$input);
			
            $Current_chardasha = Current_chardasha_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Current_chardasha_Resource($Current_chardasha), 'Current_chardasha updated successfully.');
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
        
        $Current_chardasha = Current_chardasha_Model::find($id);
  
        if (is_null($Current_chardasha)) {
            return $this->sendError('Value not found.');
        }else{
            $Current_chardasha_Model=new Current_chardasha_Model();
           $Current_chardasha_Model->remove($Current_chardasha);
            return $this->sendResponse([], 'Current_chardasha deleted successfully.');
        }
       
    }
}