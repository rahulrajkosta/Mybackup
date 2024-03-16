<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Panchang_chart_sunrise_Model;
use Validator;
use App\Http\Resources\Panchang_chart_sunrise_Resource;
   
class Panchang_chart_sunrise_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Panchang_chart_sunrise_Model=new Panchang_chart_sunrise_Model();
        
        $Panchang_chart_sunrises = $Panchang_chart_sunrise_Model->index();
    
        return $this->sendResponse(Panchang_chart_sunrise_Resource::collection($Panchang_chart_sunrises), 'Panchang_chart_sunrises retrieved successfully.');
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
			 'lat' => 'required', 
			 'lon' => 'required', 
			 'tzone' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Panchang_chart_sunrise_Model=new Panchang_chart_sunrise_Model();
        $rid = $Panchang_chart_sunrise_Model->store($input);
        $Panchang_chart_sunrise = Panchang_chart_sunrise_Model::find($rid);
        return $this->sendResponse(new Panchang_chart_sunrise_Resource($Panchang_chart_sunrise), 'Panchang_chart_sunrise created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Panchang_chart_sunrise_Model=new Panchang_chart_sunrise_Model();
        
        $Panchang_chart_sunrise = $Panchang_chart_sunrise_Model->show($id);
  
        if (is_null($Panchang_chart_sunrise)) {
            return $this->sendError('Panchang_chart_sunrise not found.');
        }
   
        return $this->sendResponse(new Panchang_chart_sunrise_Resource($Panchang_chart_sunrise), 'Panchang_chart_sunrise retrieved successfully.');
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
        $Panchang_chart_sunrise = Panchang_chart_sunrise_Model::where("status","!=","D")->find($id);
		if($Panchang_chart_sunrise){
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
			$Panchang_chart_sunrise_Model=new Panchang_chart_sunrise_Model();
			$Panchang_chart_sunrises = $Panchang_chart_sunrise_Model->edit($Panchang_chart_sunrise,$input);
			
            $Panchang_chart_sunrise = Panchang_chart_sunrise_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Panchang_chart_sunrise_Resource($Panchang_chart_sunrise), 'Panchang_chart_sunrise updated successfully.');
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
        
        $Panchang_chart_sunrise = Panchang_chart_sunrise_Model::find($id);
  
        if (is_null($Panchang_chart_sunrise)) {
            return $this->sendError('Value not found.');
        }else{
            $Panchang_chart_sunrise_Model=new Panchang_chart_sunrise_Model();
           $Panchang_chart_sunrise_Model->remove($Panchang_chart_sunrise);
            return $this->sendResponse([], 'Panchang_chart_sunrise deleted successfully.');
        }
       
    }
}