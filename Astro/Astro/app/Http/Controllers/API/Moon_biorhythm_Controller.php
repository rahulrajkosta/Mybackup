<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Moon_biorhythm_Model;
use Validator;
use App\Http\Resources\Moon_biorhythm_Resource;
   
class Moon_biorhythm_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Moon_biorhythm_Model=new Moon_biorhythm_Model();
        
        $Moon_biorhythms = $Moon_biorhythm_Model->index();
    
        return $this->sendResponse(Moon_biorhythm_Resource::collection($Moon_biorhythms), 'Moon_biorhythms retrieved successfully.');
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
        
        $Moon_biorhythm_Model=new Moon_biorhythm_Model();
        $rid = $Moon_biorhythm_Model->store($input);
        $Moon_biorhythm = Moon_biorhythm_Model::find($rid);
        return $this->sendResponse(new Moon_biorhythm_Resource($Moon_biorhythm), 'Moon_biorhythm created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Moon_biorhythm_Model=new Moon_biorhythm_Model();
        
        $Moon_biorhythm = $Moon_biorhythm_Model->show($id);
  
        if (is_null($Moon_biorhythm)) {
            return $this->sendError('Moon_biorhythm not found.');
        }
   
        return $this->sendResponse(new Moon_biorhythm_Resource($Moon_biorhythm), 'Moon_biorhythm retrieved successfully.');
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
        $Moon_biorhythm = Moon_biorhythm_Model::where("status","!=","D")->find($id);
		if($Moon_biorhythm){
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
			$Moon_biorhythm_Model=new Moon_biorhythm_Model();
			$Moon_biorhythms = $Moon_biorhythm_Model->edit($Moon_biorhythm,$input);
			
            $Moon_biorhythm = Moon_biorhythm_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Moon_biorhythm_Resource($Moon_biorhythm), 'Moon_biorhythm updated successfully.');
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
        
        $Moon_biorhythm = Moon_biorhythm_Model::find($id);
  
        if (is_null($Moon_biorhythm)) {
            return $this->sendError('Value not found.');
        }else{
            $Moon_biorhythm_Model=new Moon_biorhythm_Model();
           $Moon_biorhythm_Model->remove($Moon_biorhythm);
            return $this->sendResponse([], 'Moon_biorhythm deleted successfully.');
        }
       
    }
}