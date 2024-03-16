<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_harsha_bala_Model;
use Validator;
use App\Http\Resources\Varshaphal_harsha_bala_Resource;
   
class Varshaphal_harsha_bala_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_harsha_bala_Model=new Varshaphal_harsha_bala_Model();
        
        $Varshaphal_harsha_balas = $Varshaphal_harsha_bala_Model->index();
    
        return $this->sendResponse(Varshaphal_harsha_bala_Resource::collection($Varshaphal_harsha_balas), 'Varshaphal_harsha_balas retrieved successfully.');
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
			'stana_bala' => 'required', 
			 'ucchaswachetri_bala' => 'required', 
			 'gender_bala' => 'required', 
			 'dinratri_bala' => 'required', 
			 'total_bala' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_harsha_bala_Model=new Varshaphal_harsha_bala_Model();
        $rid = $Varshaphal_harsha_bala_Model->store($input);
        $Varshaphal_harsha_bala = Varshaphal_harsha_bala_Model::find($rid);
        return $this->sendResponse(new Varshaphal_harsha_bala_Resource($Varshaphal_harsha_bala), 'Varshaphal_harsha_bala created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_harsha_bala_Model=new Varshaphal_harsha_bala_Model();
        
        $Varshaphal_harsha_bala = $Varshaphal_harsha_bala_Model->show($id);
  
        if (is_null($Varshaphal_harsha_bala)) {
            return $this->sendError('Varshaphal_harsha_bala not found.');
        }
   
        return $this->sendResponse(new Varshaphal_harsha_bala_Resource($Varshaphal_harsha_bala), 'Varshaphal_harsha_bala retrieved successfully.');
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
        $Varshaphal_harsha_bala = Varshaphal_harsha_bala_Model::where("status","!=","D")->find($id);
		if($Varshaphal_harsha_bala){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('stana_bala',$input))
			{
				$validate['stana_bala']= "required";
			} 
		 if (array_key_exists('ucchaswachetri_bala',$input))
			{
				$validate['ucchaswachetri_bala']= "required";
			} 
		 if (array_key_exists('gender_bala',$input))
			{
				$validate['gender_bala']= "required";
			} 
		 if (array_key_exists('dinratri_bala',$input))
			{
				$validate['dinratri_bala']= "required";
			} 
		 if (array_key_exists('total_bala',$input))
			{
				$validate['total_bala']= "required";
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
			$Varshaphal_harsha_bala_Model=new Varshaphal_harsha_bala_Model();
			$Varshaphal_harsha_balas = $Varshaphal_harsha_bala_Model->edit($Varshaphal_harsha_bala,$input);
			
            $Varshaphal_harsha_bala = Varshaphal_harsha_bala_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_harsha_bala_Resource($Varshaphal_harsha_bala), 'Varshaphal_harsha_bala updated successfully.');
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
        
        $Varshaphal_harsha_bala = Varshaphal_harsha_bala_Model::find($id);
  
        if (is_null($Varshaphal_harsha_bala)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_harsha_bala_Model=new Varshaphal_harsha_bala_Model();
           $Varshaphal_harsha_bala_Model->remove($Varshaphal_harsha_bala);
            return $this->sendResponse([], 'Varshaphal_harsha_bala deleted successfully.');
        }
       
    }
}