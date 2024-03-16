<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_muntha_Model;
use Validator;
use App\Http\Resources\Varshaphal_muntha_Resource;
   
class Varshaphal_muntha_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_muntha_Model=new Varshaphal_muntha_Model();
        
        $Varshaphal_munthas = $Varshaphal_muntha_Model->index();
    
        return $this->sendResponse(Varshaphal_muntha_Resource::collection($Varshaphal_munthas), 'Varshaphal_munthas retrieved successfully.');
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
			'data' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_muntha_Model=new Varshaphal_muntha_Model();
        $rid = $Varshaphal_muntha_Model->store($input);
        $Varshaphal_muntha = Varshaphal_muntha_Model::find($rid);
        return $this->sendResponse(new Varshaphal_muntha_Resource($Varshaphal_muntha), 'Varshaphal_muntha created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_muntha_Model=new Varshaphal_muntha_Model();
        
        $Varshaphal_muntha = $Varshaphal_muntha_Model->show($id);
  
        if (is_null($Varshaphal_muntha)) {
            return $this->sendError('Varshaphal_muntha not found.');
        }
   
        return $this->sendResponse(new Varshaphal_muntha_Resource($Varshaphal_muntha), 'Varshaphal_muntha retrieved successfully.');
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
        $Varshaphal_muntha = Varshaphal_muntha_Model::where("status","!=","D")->find($id);
		if($Varshaphal_muntha){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('data',$input))
			{
				$validate['data']= "required";
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
			$Varshaphal_muntha_Model=new Varshaphal_muntha_Model();
			$Varshaphal_munthas = $Varshaphal_muntha_Model->edit($Varshaphal_muntha,$input);
			
            $Varshaphal_muntha = Varshaphal_muntha_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_muntha_Resource($Varshaphal_muntha), 'Varshaphal_muntha updated successfully.');
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
        
        $Varshaphal_muntha = Varshaphal_muntha_Model::find($id);
  
        if (is_null($Varshaphal_muntha)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_muntha_Model=new Varshaphal_muntha_Model();
           $Varshaphal_muntha_Model->remove($Varshaphal_muntha);
            return $this->sendResponse([], 'Varshaphal_muntha deleted successfully.');
        }
       
    }
}