<?php
   
namespace App\Http\Controllers\CURL;
   
use Illuminate\Http\Request;
use App\Http\Controllers\CURL\BaseController as BaseController;
use App\Models\AstroServices_Model;
use App\Models\User_info_Model;
use Validator;
use App\Http\Controllers\CURL\Astro;
use App\Http\Resources\AstroServices_Resource;
   
class AstroServices_Controller extends BaseController
{
	private $AstroServices_Model='';
	public function __construct(){
		$this->AstroServices_Model=new AstroServices_Model();
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
		$data=$this->AstroServices_Model->index();
		 return $this->sendResponse(AstroServices_Resource::collection($data), 'Astro Services retrieved successfully.');
		
    }
	public function store(Request $request){
		
        $input = json_decode($request->getContent(),true);
        $validator = Validator::make($input, [
            'services'=>'required',
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $rid = $this->AstroServices_Model->store($input);
        $AstroServices = $this->AstroServices_Model->show($rid);
        return $this->sendResponse(new AstroServices_Resource($AstroServices), 'Astro Service created successfully.');
	}
	public function show($id){
        $AstroServices = $this->AstroServices_Model->show($id);
  
        if (is_null($AstroServices)) {
            return $this->sendError('AstroServices not found.');
        }
   
        return $this->sendResponse(new AstroServices_Resource($AstroServices), 'AstroServices retrieved successfully.');
	}
	public function update(Request $request, $id){
		
		 $AstroServices = $this->AstroServices_Model->show($id);
		if($AstroServices){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('day',$input))
				{
					$validate['services']= "required";
				} 
			 } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			
			$AstroServices = $this->AstroServices_Model->edit($AstroServices,$input);
			
            $AstroServices = $this->AstroServices_Model->show($id);
			return $this->sendResponse(new AstroServices_Resource($AstroServices), 'AstroServices updated successfully.');
		}else{
			return $this->sendError('Value not found.');
		}
	}
	public function destroy($id){
		$data=$this->AstroServices_Model->destroy($id);
		 return $this->sendResponse([], 'Astro Services Destroyed successfully.');
	}
   
}