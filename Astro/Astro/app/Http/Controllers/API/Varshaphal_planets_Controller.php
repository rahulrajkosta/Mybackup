<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_planets_Model;
use Validator;
use App\Http\Resources\Varshaphal_planets_Resource;
   
class Varshaphal_planets_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        
        $Varshaphal_planetss = $Varshaphal_planets_Model->index();
    
        return $this->sendResponse(Varshaphal_planets_Resource::collection($Varshaphal_planetss), 'Varshaphal_planetss retrieved successfully.');
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
			 'varshaphal_year' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        $rid = $Varshaphal_planets_Model->store($input);
        $Varshaphal_planets = Varshaphal_planets_Model::find($rid);
        return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_planets_Model=new Varshaphal_planets_Model();
        
        $Varshaphal_planets = $Varshaphal_planets_Model->show($id);
  
        if (is_null($Varshaphal_planets)) {
            return $this->sendError('Varshaphal_planets not found.');
        }
   
        return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets retrieved successfully.');
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
        $Varshaphal_planets = Varshaphal_planets_Model::where("status","!=","D")->find($id);
		if($Varshaphal_planets){
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
		 if (array_key_exists('varshaphal_year',$input))
			{
				$validate['varshaphal_year']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Varshaphal_planets_Model=new Varshaphal_planets_Model();
			$Varshaphal_planetss = $Varshaphal_planets_Model->edit($Varshaphal_planets,$input);
			
            $Varshaphal_planets = Varshaphal_planets_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_planets_Resource($Varshaphal_planets), 'Varshaphal_planets updated successfully.');
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
        
        $Varshaphal_planets = Varshaphal_planets_Model::find($id);
  
        if (is_null($Varshaphal_planets)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_planets_Model=new Varshaphal_planets_Model();
           $Varshaphal_planets_Model->remove($Varshaphal_planets);
            return $this->sendResponse([], 'Varshaphal_planets deleted successfully.');
        }
       
    }
}