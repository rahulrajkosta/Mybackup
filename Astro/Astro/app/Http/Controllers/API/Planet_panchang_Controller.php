<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Planet_panchang_Model;
use Validator;
use App\Http\Resources\Planet_panchang_Resource;
   
class Planet_panchang_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Planet_panchang_Model=new Planet_panchang_Model();
        
        $Planet_panchangs = $Planet_panchang_Model->index();
    
        return $this->sendResponse(Planet_panchang_Resource::collection($Planet_panchangs), 'Planet_panchangs retrieved successfully.');
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
        
        $Planet_panchang_Model=new Planet_panchang_Model();
        $rid = $Planet_panchang_Model->store($input);
        $Planet_panchang = Planet_panchang_Model::find($rid);
        return $this->sendResponse(new Planet_panchang_Resource($Planet_panchang), 'Planet_panchang created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Planet_panchang_Model=new Planet_panchang_Model();
        
        $Planet_panchang = $Planet_panchang_Model->show($id);
  
        if (is_null($Planet_panchang)) {
            return $this->sendError('Planet_panchang not found.');
        }
   
        return $this->sendResponse(new Planet_panchang_Resource($Planet_panchang), 'Planet_panchang retrieved successfully.');
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
        $Planet_panchang = Planet_panchang_Model::where("status","!=","D")->find($id);
		if($Planet_panchang){
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
			$Planet_panchang_Model=new Planet_panchang_Model();
			$Planet_panchangs = $Planet_panchang_Model->edit($Planet_panchang,$input);
			
            $Planet_panchang = Planet_panchang_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Planet_panchang_Resource($Planet_panchang), 'Planet_panchang updated successfully.');
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
        
        $Planet_panchang = Planet_panchang_Model::find($id);
  
        if (is_null($Planet_panchang)) {
            return $this->sendError('Value not found.');
        }else{
            $Planet_panchang_Model=new Planet_panchang_Model();
           $Planet_panchang_Model->remove($Planet_panchang);
            return $this->sendResponse([], 'Planet_panchang deleted successfully.');
        }
       
    }
}