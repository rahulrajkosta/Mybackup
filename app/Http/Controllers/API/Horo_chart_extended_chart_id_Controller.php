<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Horo_chart_extended_chart_id_Model;
use Validator;
use App\Http\Resources\Horo_chart_extended_chart_id_Resource;
   
class Horo_chart_extended_chart_id_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Horo_chart_extended_chart_id_Model=new Horo_chart_extended_chart_id_Model();
        
        $Horo_chart_extended_chart_ids = $Horo_chart_extended_chart_id_Model->index();
    
        return $this->sendResponse(Horo_chart_extended_chart_id_Resource::collection($Horo_chart_extended_chart_ids), 'Horo_chart_extended_chart_ids retrieved successfully.');
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
			'sign' => 'required', 
			 'sign_name' => 'required', 
			 'planet' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Horo_chart_extended_chart_id_Model=new Horo_chart_extended_chart_id_Model();
        $rid = $Horo_chart_extended_chart_id_Model->store($input);
        $Horo_chart_extended_chart_id = Horo_chart_extended_chart_id_Model::find($rid);
        return $this->sendResponse(new Horo_chart_extended_chart_id_Resource($Horo_chart_extended_chart_id), 'Horo_chart_extended_chart_id created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Horo_chart_extended_chart_id_Model=new Horo_chart_extended_chart_id_Model();
        
        $Horo_chart_extended_chart_id = $Horo_chart_extended_chart_id_Model->show($id);
  
        if (is_null($Horo_chart_extended_chart_id)) {
            return $this->sendError('Horo_chart_extended_chart_id not found.');
        }
   
        return $this->sendResponse(new Horo_chart_extended_chart_id_Resource($Horo_chart_extended_chart_id), 'Horo_chart_extended_chart_id retrieved successfully.');
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
        $Horo_chart_extended_chart_id = Horo_chart_extended_chart_id_Model::where("status","!=","D")->find($id);
		if($Horo_chart_extended_chart_id){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('sign',$input))
			{
				$validate['sign']= "required";
			} 
		 if (array_key_exists('sign_name',$input))
			{
				$validate['sign_name']= "required";
			} 
		 if (array_key_exists('planet',$input))
			{
				$validate['planet']= "required";
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
			$Horo_chart_extended_chart_id_Model=new Horo_chart_extended_chart_id_Model();
			$Horo_chart_extended_chart_ids = $Horo_chart_extended_chart_id_Model->edit($Horo_chart_extended_chart_id,$input);
			
            $Horo_chart_extended_chart_id = Horo_chart_extended_chart_id_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Horo_chart_extended_chart_id_Resource($Horo_chart_extended_chart_id), 'Horo_chart_extended_chart_id updated successfully.');
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
        
        $Horo_chart_extended_chart_id = Horo_chart_extended_chart_id_Model::find($id);
  
        if (is_null($Horo_chart_extended_chart_id)) {
            return $this->sendError('Value not found.');
        }else{
            $Horo_chart_extended_chart_id_Model=new Horo_chart_extended_chart_id_Model();
           $Horo_chart_extended_chart_id_Model->remove($Horo_chart_extended_chart_id);
            return $this->sendResponse([], 'Horo_chart_extended_chart_id deleted successfully.');
        }
       
    }
}