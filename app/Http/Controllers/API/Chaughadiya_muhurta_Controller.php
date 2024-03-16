<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Chaughadiya_muhurta_Model;
use Validator;
use App\Http\Resources\Chaughadiya_muhurta_Resource;
   
class Chaughadiya_muhurta_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Chaughadiya_muhurta_Model=new Chaughadiya_muhurta_Model();
        
        $Chaughadiya_muhurtas = $Chaughadiya_muhurta_Model->index();
    
        return $this->sendResponse(Chaughadiya_muhurta_Resource::collection($Chaughadiya_muhurtas), 'Chaughadiya_muhurtas retrieved successfully.');
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
			'chaughadiya' => 'required', 
			 'created_at' => 'required', 
			 'updated_at' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Chaughadiya_muhurta_Model=new Chaughadiya_muhurta_Model();
        $rid = $Chaughadiya_muhurta_Model->store($input);
        $Chaughadiya_muhurta = Chaughadiya_muhurta_Model::find($rid);
        return $this->sendResponse(new Chaughadiya_muhurta_Resource($Chaughadiya_muhurta), 'Chaughadiya_muhurta created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Chaughadiya_muhurta_Model=new Chaughadiya_muhurta_Model();
        
        $Chaughadiya_muhurta = $Chaughadiya_muhurta_Model->show($id);
  
        if (is_null($Chaughadiya_muhurta)) {
            return $this->sendError('Chaughadiya_muhurta not found.');
        }
   
        return $this->sendResponse(new Chaughadiya_muhurta_Resource($Chaughadiya_muhurta), 'Chaughadiya_muhurta retrieved successfully.');
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
        $Chaughadiya_muhurta = Chaughadiya_muhurta_Model::where("status","!=","D")->find($id);
		if($Chaughadiya_muhurta){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('chaughadiya',$input))
			{
				$validate['chaughadiya']= "required";
			} 
		 if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
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
			$Chaughadiya_muhurta_Model=new Chaughadiya_muhurta_Model();
			$Chaughadiya_muhurtas = $Chaughadiya_muhurta_Model->edit($Chaughadiya_muhurta,$input);
			
            $Chaughadiya_muhurta = Chaughadiya_muhurta_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Chaughadiya_muhurta_Resource($Chaughadiya_muhurta), 'Chaughadiya_muhurta updated successfully.');
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
        
        $Chaughadiya_muhurta = Chaughadiya_muhurta_Model::find($id);
  
        if (is_null($Chaughadiya_muhurta)) {
            return $this->sendError('Value not found.');
        }else{
            $Chaughadiya_muhurta_Model=new Chaughadiya_muhurta_Model();
           $Chaughadiya_muhurta_Model->remove($Chaughadiya_muhurta);
            return $this->sendResponse([], 'Chaughadiya_muhurta deleted successfully.');
        }
       
    }
}