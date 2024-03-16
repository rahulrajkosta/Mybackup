<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Basic_gem_suggestion_Model;
use Validator;
use App\Http\Resources\Basic_gem_suggestion_Resource;
   
class Basic_gem_suggestion_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Basic_gem_suggestion_Model=new Basic_gem_suggestion_Model();
        
        $Basic_gem_suggestions = $Basic_gem_suggestion_Model->index();
    
        return $this->sendResponse(Basic_gem_suggestion_Resource::collection($Basic_gem_suggestions), 'Basic_gem_suggestions retrieved successfully.');
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
        
        $Basic_gem_suggestion_Model=new Basic_gem_suggestion_Model();
        $rid = $Basic_gem_suggestion_Model->store($input);
        $Basic_gem_suggestion = Basic_gem_suggestion_Model::find($rid);
        return $this->sendResponse(new Basic_gem_suggestion_Resource($Basic_gem_suggestion), 'Basic_gem_suggestion created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Basic_gem_suggestion_Model=new Basic_gem_suggestion_Model();
        
        $Basic_gem_suggestion = $Basic_gem_suggestion_Model->show($id);
  
        if (is_null($Basic_gem_suggestion)) {
            return $this->sendError('Basic_gem_suggestion not found.');
        }
   
        return $this->sendResponse(new Basic_gem_suggestion_Resource($Basic_gem_suggestion), 'Basic_gem_suggestion retrieved successfully.');
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
        $Basic_gem_suggestion = Basic_gem_suggestion_Model::where("status","!=","D")->find($id);
		if($Basic_gem_suggestion){
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
			$Basic_gem_suggestion_Model=new Basic_gem_suggestion_Model();
			$Basic_gem_suggestions = $Basic_gem_suggestion_Model->edit($Basic_gem_suggestion,$input);
			
            $Basic_gem_suggestion = Basic_gem_suggestion_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Basic_gem_suggestion_Resource($Basic_gem_suggestion), 'Basic_gem_suggestion updated successfully.');
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
        
        $Basic_gem_suggestion = Basic_gem_suggestion_Model::find($id);
  
        if (is_null($Basic_gem_suggestion)) {
            return $this->sendError('Value not found.');
        }else{
            $Basic_gem_suggestion_Model=new Basic_gem_suggestion_Model();
           $Basic_gem_suggestion_Model->remove($Basic_gem_suggestion);
            return $this->sendResponse([], 'Basic_gem_suggestion deleted successfully.');
        }
       
    }
}