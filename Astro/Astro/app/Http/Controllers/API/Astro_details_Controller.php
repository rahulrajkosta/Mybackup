<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Astro_details_Model;
use Validator;
use App\Http\Resources\Astro_details_Resource;
   
class Astro_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Astro_details_Model=new Astro_details_Model();
        
        $Astro_detailss = $Astro_details_Model->index();
    
        return $this->sendResponse(Astro_details_Resource::collection($Astro_detailss), 'Astro_detailss retrieved successfully.');
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
        
        $Astro_details_Model=new Astro_details_Model();
        $rid = $Astro_details_Model->store($input);
        $Astro_details = Astro_details_Model::find($rid);
        return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Astro_details_Model=new Astro_details_Model();
        
        $Astro_details = $Astro_details_Model->show($id);
  
        if (is_null($Astro_details)) {
            return $this->sendError('Astro_details not found.');
        }
   
        return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details retrieved successfully.');
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
        $Astro_details = Astro_details_Model::where("status","!=","D")->find($id);
		if($Astro_details){
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
			$Astro_details_Model=new Astro_details_Model();
			$Astro_detailss = $Astro_details_Model->edit($Astro_details,$input);
			
            $Astro_details = Astro_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details updated successfully.');
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
        
        $Astro_details = Astro_details_Model::find($id);
  
        if (is_null($Astro_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Astro_details_Model=new Astro_details_Model();
           $Astro_details_Model->remove($Astro_details);
            return $this->sendResponse([], 'Astro_details deleted successfully.');
        }
       
    }
}