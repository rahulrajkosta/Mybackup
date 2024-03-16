<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Test_Model;
use Validator;
use App\Http\Resources\Test_Resource;
   
class Test_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Test_Model=new Test_Model();
        
        $Tests = $Test_Model->index();
    
        return $this->sendResponse(Test_Resource::collection($Tests), 'Tests retrieved successfully.');
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
			'name' => 'required', 
			 'dob' => 'required', 
			 'created_at' => 'required', 
			 'updated_at' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Test_Model=new Test_Model();
        $rid = $Test_Model->store($input);
        $Test = Test_Model::find($rid);
        return $this->sendResponse(new Test_Resource($Test), 'Test created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Test_Model=new Test_Model();
        
        $Test = $Test_Model->show($id);
  
        if (is_null($Test)) {
            return $this->sendError('Test not found.');
        }
   
        return $this->sendResponse(new Test_Resource($Test), 'Test retrieved successfully.');
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
        $Test = Test_Model::where("status","!=","D")->find($id);
		if($Test){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('name',$input))
			{
				$validate['name']= "required";
			} 
		 if (array_key_exists('dob',$input))
			{
				$validate['dob']= "required";
			} 
		 if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Test_Model=new Test_Model();
			$Tests = $Test_Model->edit($Test,$input);
			
            $Test = Test_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Test_Resource($Test), 'Test updated successfully.');
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
        
        $Test = Test_Model::find($id);
  
        if (is_null($Test)) {
            return $this->sendError('Value not found.');
        }else{
            $Test_Model=new Test_Model();
           $Test_Model->remove($Test);
            return $this->sendResponse([], 'Test deleted successfully.');
        }
       
    }
}