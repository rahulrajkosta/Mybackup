<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Panchang_festival_Model;
use Validator;
use App\Http\Resources\Panchang_festival_Resource;
   
class Panchang_festival_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Panchang_festival_Model=new Panchang_festival_Model();
        
        $Panchang_festivals = $Panchang_festival_Model->index();
    
        return $this->sendResponse(Panchang_festival_Resource::collection($Panchang_festivals), 'Panchang_festivals retrieved successfully.');
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
			'festivals' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Panchang_festival_Model=new Panchang_festival_Model();
        $rid = $Panchang_festival_Model->store($input);
        $Panchang_festival = Panchang_festival_Model::find($rid);
        return $this->sendResponse(new Panchang_festival_Resource($Panchang_festival), 'Panchang_festival created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Panchang_festival_Model=new Panchang_festival_Model();
        
        $Panchang_festival = $Panchang_festival_Model->show($id);
  
        if (is_null($Panchang_festival)) {
            return $this->sendError('Panchang_festival not found.');
        }
   
        return $this->sendResponse(new Panchang_festival_Resource($Panchang_festival), 'Panchang_festival retrieved successfully.');
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
        $Panchang_festival = Panchang_festival_Model::where("status","!=","D")->find($id);
		if($Panchang_festival){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('festivals',$input))
			{
				$validate['festivals']= "required";
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
			$Panchang_festival_Model=new Panchang_festival_Model();
			$Panchang_festivals = $Panchang_festival_Model->edit($Panchang_festival,$input);
			
            $Panchang_festival = Panchang_festival_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Panchang_festival_Resource($Panchang_festival), 'Panchang_festival updated successfully.');
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
        
        $Panchang_festival = Panchang_festival_Model::find($id);
  
        if (is_null($Panchang_festival)) {
            return $this->sendError('Value not found.');
        }else{
            $Panchang_festival_Model=new Panchang_festival_Model();
           $Panchang_festival_Model->remove($Panchang_festival);
            return $this->sendResponse([], 'Panchang_festival deleted successfully.');
        }
       
    }
}