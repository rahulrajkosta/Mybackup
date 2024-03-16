<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Hora_muhurta_dinman_Model;
use Validator;
use App\Http\Resources\Hora_muhurta_dinman_Resource;
   
class Hora_muhurta_dinman_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hora_muhurta_dinman_Model=new Hora_muhurta_dinman_Model();
        
        $Hora_muhurta_dinmans = $Hora_muhurta_dinman_Model->index();
    
        return $this->sendResponse(Hora_muhurta_dinman_Resource::collection($Hora_muhurta_dinmans), 'Hora_muhurta_dinmans retrieved successfully.');
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
			'hora' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Hora_muhurta_dinman_Model=new Hora_muhurta_dinman_Model();
        $rid = $Hora_muhurta_dinman_Model->store($input);
        $Hora_muhurta_dinman = Hora_muhurta_dinman_Model::find($rid);
        return $this->sendResponse(new Hora_muhurta_dinman_Resource($Hora_muhurta_dinman), 'Hora_muhurta_dinman created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Hora_muhurta_dinman_Model=new Hora_muhurta_dinman_Model();
        
        $Hora_muhurta_dinman = $Hora_muhurta_dinman_Model->show($id);
  
        if (is_null($Hora_muhurta_dinman)) {
            return $this->sendError('Hora_muhurta_dinman not found.');
        }
   
        return $this->sendResponse(new Hora_muhurta_dinman_Resource($Hora_muhurta_dinman), 'Hora_muhurta_dinman retrieved successfully.');
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
        $Hora_muhurta_dinman = Hora_muhurta_dinman_Model::where("status","!=","D")->find($id);
		if($Hora_muhurta_dinman){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('hora',$input))
			{
				$validate['hora']= "required";
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
			$Hora_muhurta_dinman_Model=new Hora_muhurta_dinman_Model();
			$Hora_muhurta_dinmans = $Hora_muhurta_dinman_Model->edit($Hora_muhurta_dinman,$input);
			
            $Hora_muhurta_dinman = Hora_muhurta_dinman_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Hora_muhurta_dinman_Resource($Hora_muhurta_dinman), 'Hora_muhurta_dinman updated successfully.');
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
        
        $Hora_muhurta_dinman = Hora_muhurta_dinman_Model::find($id);
  
        if (is_null($Hora_muhurta_dinman)) {
            return $this->sendError('Value not found.');
        }else{
            $Hora_muhurta_dinman_Model=new Hora_muhurta_dinman_Model();
           $Hora_muhurta_dinman_Model->remove($Hora_muhurta_dinman);
            return $this->sendResponse([], 'Hora_muhurta_dinman deleted successfully.');
        }
       
    }
}