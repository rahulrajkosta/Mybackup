<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Bhav_madhya_Model;
use Validator;
use App\Http\Resources\Bhav_madhya_Resource;
   
class Bhav_madhya_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bhav_madhya_Model=new Bhav_madhya_Model();
        
        $Bhav_madhyas = $Bhav_madhya_Model->index();
    
        return $this->sendResponse(Bhav_madhya_Resource::collection($Bhav_madhyas), 'Bhav_madhyas retrieved successfully.');
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
        
        $Bhav_madhya_Model=new Bhav_madhya_Model();
        $rid = $Bhav_madhya_Model->store($input);
        $Bhav_madhya = Bhav_madhya_Model::find($rid);
        return $this->sendResponse(new Bhav_madhya_Resource($Bhav_madhya), 'Bhav_madhya created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Bhav_madhya_Model=new Bhav_madhya_Model();
        
        $Bhav_madhya = $Bhav_madhya_Model->show($id);
  
        if (is_null($Bhav_madhya)) {
            return $this->sendError('Bhav_madhya not found.');
        }
   
        return $this->sendResponse(new Bhav_madhya_Resource($Bhav_madhya), 'Bhav_madhya retrieved successfully.');
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
        $Bhav_madhya = Bhav_madhya_Model::where("status","!=","D")->find($id);
		if($Bhav_madhya){
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
			$Bhav_madhya_Model=new Bhav_madhya_Model();
			$Bhav_madhyas = $Bhav_madhya_Model->edit($Bhav_madhya,$input);
			
            $Bhav_madhya = Bhav_madhya_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Bhav_madhya_Resource($Bhav_madhya), 'Bhav_madhya updated successfully.');
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
        
        $Bhav_madhya = Bhav_madhya_Model::find($id);
  
        if (is_null($Bhav_madhya)) {
            return $this->sendError('Value not found.');
        }else{
            $Bhav_madhya_Model=new Bhav_madhya_Model();
           $Bhav_madhya_Model->remove($Bhav_madhya);
            return $this->sendResponse([], 'Bhav_madhya deleted successfully.');
        }
       
    }
}