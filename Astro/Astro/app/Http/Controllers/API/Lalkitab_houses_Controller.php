<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Lalkitab_houses_Model;
use Validator;
use App\Http\Resources\Lalkitab_houses_Resource;
   
class Lalkitab_houses_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Lalkitab_houses_Model=new Lalkitab_houses_Model();
        
        $Lalkitab_housess = $Lalkitab_houses_Model->index();
    
        return $this->sendResponse(Lalkitab_houses_Resource::collection($Lalkitab_housess), 'Lalkitab_housess retrieved successfully.');
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
        
        $Lalkitab_houses_Model=new Lalkitab_houses_Model();
        $rid = $Lalkitab_houses_Model->store($input);
        $Lalkitab_houses = Lalkitab_houses_Model::find($rid);
        return $this->sendResponse(new Lalkitab_houses_Resource($Lalkitab_houses), 'Lalkitab_houses created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Lalkitab_houses_Model=new Lalkitab_houses_Model();
        
        $Lalkitab_houses = $Lalkitab_houses_Model->show($id);
  
        if (is_null($Lalkitab_houses)) {
            return $this->sendError('Lalkitab_houses not found.');
        }
   
        return $this->sendResponse(new Lalkitab_houses_Resource($Lalkitab_houses), 'Lalkitab_houses retrieved successfully.');
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
        $Lalkitab_houses = Lalkitab_houses_Model::where("status","!=","D")->find($id);
		if($Lalkitab_houses){
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
			$Lalkitab_houses_Model=new Lalkitab_houses_Model();
			$Lalkitab_housess = $Lalkitab_houses_Model->edit($Lalkitab_houses,$input);
			
            $Lalkitab_houses = Lalkitab_houses_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Lalkitab_houses_Resource($Lalkitab_houses), 'Lalkitab_houses updated successfully.');
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
        
        $Lalkitab_houses = Lalkitab_houses_Model::find($id);
  
        if (is_null($Lalkitab_houses)) {
            return $this->sendError('Value not found.');
        }else{
            $Lalkitab_houses_Model=new Lalkitab_houses_Model();
           $Lalkitab_houses_Model->remove($Lalkitab_houses);
            return $this->sendResponse([], 'Lalkitab_houses deleted successfully.');
        }
       
    }
}