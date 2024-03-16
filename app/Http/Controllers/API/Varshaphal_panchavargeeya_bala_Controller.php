<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_panchavargeeya_bala_Model;
use Validator;
use App\Http\Resources\Varshaphal_panchavargeeya_bala_Resource;
   
class Varshaphal_panchavargeeya_bala_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_panchavargeeya_bala_Model=new Varshaphal_panchavargeeya_bala_Model();
        
        $Varshaphal_panchavargeeya_balas = $Varshaphal_panchavargeeya_bala_Model->index();
    
        return $this->sendResponse(Varshaphal_panchavargeeya_bala_Resource::collection($Varshaphal_panchavargeeya_balas), 'Varshaphal_panchavargeeya_balas retrieved successfully.');
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
			'kshetra_bala' => 'required', 
			 'uccha_bala' => 'required', 
			 'hadda_bala' => 'required', 
			 'drekkana_bala' => 'required', 
			 'navmansha_bala' => 'required', 
			 'total_bala' => 'required', 
			 'final_bala' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_panchavargeeya_bala_Model=new Varshaphal_panchavargeeya_bala_Model();
        $rid = $Varshaphal_panchavargeeya_bala_Model->store($input);
        $Varshaphal_panchavargeeya_bala = Varshaphal_panchavargeeya_bala_Model::find($rid);
        return $this->sendResponse(new Varshaphal_panchavargeeya_bala_Resource($Varshaphal_panchavargeeya_bala), 'Varshaphal_panchavargeeya_bala created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_panchavargeeya_bala_Model=new Varshaphal_panchavargeeya_bala_Model();
        
        $Varshaphal_panchavargeeya_bala = $Varshaphal_panchavargeeya_bala_Model->show($id);
  
        if (is_null($Varshaphal_panchavargeeya_bala)) {
            return $this->sendError('Varshaphal_panchavargeeya_bala not found.');
        }
   
        return $this->sendResponse(new Varshaphal_panchavargeeya_bala_Resource($Varshaphal_panchavargeeya_bala), 'Varshaphal_panchavargeeya_bala retrieved successfully.');
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
        $Varshaphal_panchavargeeya_bala = Varshaphal_panchavargeeya_bala_Model::where("status","!=","D")->find($id);
		if($Varshaphal_panchavargeeya_bala){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('kshetra_bala',$input))
			{
				$validate['kshetra_bala']= "required";
			} 
		 if (array_key_exists('uccha_bala',$input))
			{
				$validate['uccha_bala']= "required";
			} 
		 if (array_key_exists('hadda_bala',$input))
			{
				$validate['hadda_bala']= "required";
			} 
		 if (array_key_exists('drekkana_bala',$input))
			{
				$validate['drekkana_bala']= "required";
			} 
		 if (array_key_exists('navmansha_bala',$input))
			{
				$validate['navmansha_bala']= "required";
			} 
		 if (array_key_exists('total_bala',$input))
			{
				$validate['total_bala']= "required";
			} 
		 if (array_key_exists('final_bala',$input))
			{
				$validate['final_bala']= "required";
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
			$Varshaphal_panchavargeeya_bala_Model=new Varshaphal_panchavargeeya_bala_Model();
			$Varshaphal_panchavargeeya_balas = $Varshaphal_panchavargeeya_bala_Model->edit($Varshaphal_panchavargeeya_bala,$input);
			
            $Varshaphal_panchavargeeya_bala = Varshaphal_panchavargeeya_bala_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_panchavargeeya_bala_Resource($Varshaphal_panchavargeeya_bala), 'Varshaphal_panchavargeeya_bala updated successfully.');
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
        
        $Varshaphal_panchavargeeya_bala = Varshaphal_panchavargeeya_bala_Model::find($id);
  
        if (is_null($Varshaphal_panchavargeeya_bala)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_panchavargeeya_bala_Model=new Varshaphal_panchavargeeya_bala_Model();
           $Varshaphal_panchavargeeya_bala_Model->remove($Varshaphal_panchavargeeya_bala);
            return $this->sendResponse([], 'Varshaphal_panchavargeeya_bala deleted successfully.');
        }
       
    }
}