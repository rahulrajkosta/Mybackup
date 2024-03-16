<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Manglik_Model;
use Validator;
use App\Http\Resources\Manglik_Resource;
   
class Manglik_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Manglik_Model=new Manglik_Model();
        
        $Mangliks = $Manglik_Model->index();
    
        return $this->sendResponse(Manglik_Resource::collection($Mangliks), 'Mangliks retrieved successfully.');
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
			'manglik_present_rule' => 'required', 
			 'is_mars_manglik_cancelled' => 'required', 
			 'manglik_status' => 'required', 
			 'percentage_manglik_present' => 'required', 
			 'percentage_manglik_after_cancellation' => 'required', 
			 'manglik_report' => 'required', 
			 'is_present' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Manglik_Model=new Manglik_Model();
        $rid = $Manglik_Model->store($input);
        $Manglik = Manglik_Model::find($rid);
        return $this->sendResponse(new Manglik_Resource($Manglik), 'Manglik created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Manglik_Model=new Manglik_Model();
        
        $Manglik = $Manglik_Model->show($id);
  
        if (is_null($Manglik)) {
            return $this->sendError('Manglik not found.');
        }
   
        return $this->sendResponse(new Manglik_Resource($Manglik), 'Manglik retrieved successfully.');
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
        $Manglik = Manglik_Model::where("status","!=","D")->find($id);
		if($Manglik){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('manglik_present_rule',$input))
			{
				$validate['manglik_present_rule']= "required";
			} 
		 if (array_key_exists('is_mars_manglik_cancelled',$input))
			{
				$validate['is_mars_manglik_cancelled']= "required";
			} 
		 if (array_key_exists('manglik_status',$input))
			{
				$validate['manglik_status']= "required";
			} 
		 if (array_key_exists('percentage_manglik_present',$input))
			{
				$validate['percentage_manglik_present']= "required";
			} 
		 if (array_key_exists('percentage_manglik_after_cancellation',$input))
			{
				$validate['percentage_manglik_after_cancellation']= "required";
			} 
		 if (array_key_exists('manglik_report',$input))
			{
				$validate['manglik_report']= "required";
			} 
		 if (array_key_exists('is_present',$input))
			{
				$validate['is_present']= "required";
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
			$Manglik_Model=new Manglik_Model();
			$Mangliks = $Manglik_Model->edit($Manglik,$input);
			
            $Manglik = Manglik_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Manglik_Resource($Manglik), 'Manglik updated successfully.');
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
        
        $Manglik = Manglik_Model::find($id);
  
        if (is_null($Manglik)) {
            return $this->sendError('Value not found.');
        }else{
            $Manglik_Model=new Manglik_Model();
           $Manglik_Model->remove($Manglik);
            return $this->sendResponse([], 'Manglik deleted successfully.');
        }
       
    }
}