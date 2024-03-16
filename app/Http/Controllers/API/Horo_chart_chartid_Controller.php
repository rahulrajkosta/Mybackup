<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Horo_chart_chartid_Model;
use App\Models\User_info_Model;
use Validator; use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\Horo_chart_chartid_Resource;
   
class Horo_chart_chartid_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Horo_chart_chartid_Model=new Horo_chart_chartid_Model();
        
        $Horo_chart_chartids = $Horo_chart_chartid_Model->index();
    
        return $this->sendResponse(Horo_chart_chartid_Resource::collection($Horo_chart_chartids), 'Horo_chart_chartids retrieved successfully.');
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
        
        $Horo_chart_chartid_Model=new Horo_chart_chartid_Model();
        $rid = $Horo_chart_chartid_Model->store($input);
        $Horo_chart_chartid = Horo_chart_chartid_Model::find($rid);
        return $this->sendResponse(new Horo_chart_chartid_Resource($Horo_chart_chartid), 'Horo_chart_chartid created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Horo_chart_chartid_Model=new Horo_chart_chartid_Model();
        
        $Horo_chart_chartid = $Horo_chart_chartid_Model->show($id);
  
        if (is_null($Horo_chart_chartid)) {
            return $this->sendError('Horo_chart_chartid not found.');
        }
   
        return $this->sendResponse(new Horo_chart_chartid_Resource($Horo_chart_chartid), 'Horo_chart_chartid retrieved successfully.');
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
        $Horo_chart_chartid = Horo_chart_chartid_Model::where("status","!=","D")->find($id);
		if($Horo_chart_chartid){
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
			$Horo_chart_chartid_Model=new Horo_chart_chartid_Model();
			$Horo_chart_chartids = $Horo_chart_chartid_Model->edit($Horo_chart_chartid,$input);
			
            $Horo_chart_chartid = Horo_chart_chartid_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Horo_chart_chartid_Resource($Horo_chart_chartid), 'Horo_chart_chartid updated successfully.');
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
        
        $Horo_chart_chartid = Horo_chart_chartid_Model::find($id);
  
        if (is_null($Horo_chart_chartid)) {
            return $this->sendError('Value not found.');
        }else{
            $Horo_chart_chartid_Model=new Horo_chart_chartid_Model();
           $Horo_chart_chartid_Model->remove($Horo_chart_chartid);
            return $this->sendResponse([], 'Horo_chart_chartid deleted successfully.');
        }
       
    }
}