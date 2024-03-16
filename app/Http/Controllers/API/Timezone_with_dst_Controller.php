<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Timezone_with_dst_Model;
use Validator;
use App\Http\Resources\Timezone_with_dst_Resource;
   
class Timezone_with_dst_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Timezone_with_dst_Model=new Timezone_with_dst_Model();
        
        $Timezone_with_dsts = $Timezone_with_dst_Model->index();
    
        return $this->sendResponse(Timezone_with_dst_Resource::collection($Timezone_with_dsts), 'Timezone_with_dsts retrieved successfully.');
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
			'timezone' => 'required', 
			 'timezone_in_ms' => 'required', 
			 'date' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Timezone_with_dst_Model=new Timezone_with_dst_Model();
        $rid = $Timezone_with_dst_Model->store($input);
        $Timezone_with_dst = Timezone_with_dst_Model::find($rid);
        return $this->sendResponse(new Timezone_with_dst_Resource($Timezone_with_dst), 'Timezone_with_dst created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Timezone_with_dst_Model=new Timezone_with_dst_Model();
        
        $Timezone_with_dst = $Timezone_with_dst_Model->show($id);
  
        if (is_null($Timezone_with_dst)) {
            return $this->sendError('Timezone_with_dst not found.');
        }
   
        return $this->sendResponse(new Timezone_with_dst_Resource($Timezone_with_dst), 'Timezone_with_dst retrieved successfully.');
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
        $Timezone_with_dst = Timezone_with_dst_Model::where("status","!=","D")->find($id);
		if($Timezone_with_dst){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('timezone',$input))
			{
				$validate['timezone']= "required";
			} 
		 if (array_key_exists('timezone_in_ms',$input))
			{
				$validate['timezone_in_ms']= "required";
			} 
		 if (array_key_exists('date',$input))
			{
				$validate['date']= "required";
			} 
		 if (array_key_exists('user_id',$input))
			{
				$validate['user_id']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Timezone_with_dst_Model=new Timezone_with_dst_Model();
			$Timezone_with_dsts = $Timezone_with_dst_Model->edit($Timezone_with_dst,$input);
			
            $Timezone_with_dst = Timezone_with_dst_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Timezone_with_dst_Resource($Timezone_with_dst), 'Timezone_with_dst updated successfully.');
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
        
        $Timezone_with_dst = Timezone_with_dst_Model::find($id);
  
        if (is_null($Timezone_with_dst)) {
            return $this->sendError('Value not found.');
        }else{
            $Timezone_with_dst_Model=new Timezone_with_dst_Model();
           $Timezone_with_dst_Model->remove($Timezone_with_dst);
            return $this->sendResponse([], 'Timezone_with_dst deleted successfully.');
        }
       
    }
}