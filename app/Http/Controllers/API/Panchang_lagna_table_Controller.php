<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Panchang_lagna_table_Model;
use Validator;
use App\Http\Resources\Panchang_lagna_table_Resource;
   
class Panchang_lagna_table_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Panchang_lagna_table_Model=new Panchang_lagna_table_Model();
        
        $Panchang_lagna_tables = $Panchang_lagna_table_Model->index();
    
        return $this->sendResponse(Panchang_lagna_table_Resource::collection($Panchang_lagna_tables), 'Panchang_lagna_tables retrieved successfully.');
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
			'lagna' => 'required', 
			 'start_time' => 'required', 
			 'end_time' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Panchang_lagna_table_Model=new Panchang_lagna_table_Model();
        $rid = $Panchang_lagna_table_Model->store($input);
        $Panchang_lagna_table = Panchang_lagna_table_Model::find($rid);
        return $this->sendResponse(new Panchang_lagna_table_Resource($Panchang_lagna_table), 'Panchang_lagna_table created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Panchang_lagna_table_Model=new Panchang_lagna_table_Model();
        
        $Panchang_lagna_table = $Panchang_lagna_table_Model->show($id);
  
        if (is_null($Panchang_lagna_table)) {
            return $this->sendError('Panchang_lagna_table not found.');
        }
   
        return $this->sendResponse(new Panchang_lagna_table_Resource($Panchang_lagna_table), 'Panchang_lagna_table retrieved successfully.');
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
        $Panchang_lagna_table = Panchang_lagna_table_Model::where("status","!=","D")->find($id);
		if($Panchang_lagna_table){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('lagna',$input))
			{
				$validate['lagna']= "required";
			} 
		 if (array_key_exists('start_time',$input))
			{
				$validate['start_time']= "required";
			} 
		 if (array_key_exists('end_time',$input))
			{
				$validate['end_time']= "required";
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
			$Panchang_lagna_table_Model=new Panchang_lagna_table_Model();
			$Panchang_lagna_tables = $Panchang_lagna_table_Model->edit($Panchang_lagna_table,$input);
			
            $Panchang_lagna_table = Panchang_lagna_table_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Panchang_lagna_table_Resource($Panchang_lagna_table), 'Panchang_lagna_table updated successfully.');
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
        
        $Panchang_lagna_table = Panchang_lagna_table_Model::find($id);
  
        if (is_null($Panchang_lagna_table)) {
            return $this->sendError('Value not found.');
        }else{
            $Panchang_lagna_table_Model=new Panchang_lagna_table_Model();
           $Panchang_lagna_table_Model->remove($Panchang_lagna_table);
            return $this->sendResponse([], 'Panchang_lagna_table deleted successfully.');
        }
       
    }
}