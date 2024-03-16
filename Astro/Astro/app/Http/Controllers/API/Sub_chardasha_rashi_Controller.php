<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sub_chardasha_rashi_Model;
use Validator;
use App\Http\Resources\Sub_chardasha_rashi_Resource;
   
class Sub_chardasha_rashi_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sub_chardasha_rashi_Model=new Sub_chardasha_rashi_Model();
        
        $Sub_chardasha_rashis = $Sub_chardasha_rashi_Model->index();
    
        return $this->sendResponse(Sub_chardasha_rashi_Resource::collection($Sub_chardasha_rashis), 'Sub_chardasha_rashis retrieved successfully.');
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
        
        $Sub_chardasha_rashi_Model=new Sub_chardasha_rashi_Model();
        $rid = $Sub_chardasha_rashi_Model->store($input);
        $Sub_chardasha_rashi = Sub_chardasha_rashi_Model::find($rid);
        return $this->sendResponse(new Sub_chardasha_rashi_Resource($Sub_chardasha_rashi), 'Sub_chardasha_rashi created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sub_chardasha_rashi_Model=new Sub_chardasha_rashi_Model();
        
        $Sub_chardasha_rashi = $Sub_chardasha_rashi_Model->show($id);
  
        if (is_null($Sub_chardasha_rashi)) {
            return $this->sendError('Sub_chardasha_rashi not found.');
        }
   
        return $this->sendResponse(new Sub_chardasha_rashi_Resource($Sub_chardasha_rashi), 'Sub_chardasha_rashi retrieved successfully.');
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
        $Sub_chardasha_rashi = Sub_chardasha_rashi_Model::where("status","!=","D")->find($id);
		if($Sub_chardasha_rashi){
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
			$Sub_chardasha_rashi_Model=new Sub_chardasha_rashi_Model();
			$Sub_chardasha_rashis = $Sub_chardasha_rashi_Model->edit($Sub_chardasha_rashi,$input);
			
            $Sub_chardasha_rashi = Sub_chardasha_rashi_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sub_chardasha_rashi_Resource($Sub_chardasha_rashi), 'Sub_chardasha_rashi updated successfully.');
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
        
        $Sub_chardasha_rashi = Sub_chardasha_rashi_Model::find($id);
  
        if (is_null($Sub_chardasha_rashi)) {
            return $this->sendError('Value not found.');
        }else{
            $Sub_chardasha_rashi_Model=new Sub_chardasha_rashi_Model();
           $Sub_chardasha_rashi_Model->remove($Sub_chardasha_rashi);
            return $this->sendResponse([], 'Sub_chardasha_rashi deleted successfully.');
        }
       
    }
}