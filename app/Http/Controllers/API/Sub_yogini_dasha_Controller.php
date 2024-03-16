<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sub_yogini_dasha_Model;
use Validator;
use App\Http\Resources\Sub_yogini_dasha_Resource;
   
class Sub_yogini_dasha_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sub_yogini_dasha_Model=new Sub_yogini_dasha_Model();
        
        $Sub_yogini_dashas = $Sub_yogini_dasha_Model->index();
    
        return $this->sendResponse(Sub_yogini_dasha_Resource::collection($Sub_yogini_dashas), 'Sub_yogini_dashas retrieved successfully.');
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
			'major_dasha' => 'required', 
			 'sub_dasha' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Sub_yogini_dasha_Model=new Sub_yogini_dasha_Model();
        $rid = $Sub_yogini_dasha_Model->store($input);
        $Sub_yogini_dasha = Sub_yogini_dasha_Model::find($rid);
        return $this->sendResponse(new Sub_yogini_dasha_Resource($Sub_yogini_dasha), 'Sub_yogini_dasha created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sub_yogini_dasha_Model=new Sub_yogini_dasha_Model();
        
        $Sub_yogini_dasha = $Sub_yogini_dasha_Model->show($id);
  
        if (is_null($Sub_yogini_dasha)) {
            return $this->sendError('Sub_yogini_dasha not found.');
        }
   
        return $this->sendResponse(new Sub_yogini_dasha_Resource($Sub_yogini_dasha), 'Sub_yogini_dasha retrieved successfully.');
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
        $Sub_yogini_dasha = Sub_yogini_dasha_Model::where("status","!=","D")->find($id);
		if($Sub_yogini_dasha){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('major_dasha',$input))
			{
				$validate['major_dasha']= "required";
			} 
		 if (array_key_exists('sub_dasha',$input))
			{
				$validate['sub_dasha']= "required";
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
			$Sub_yogini_dasha_Model=new Sub_yogini_dasha_Model();
			$Sub_yogini_dashas = $Sub_yogini_dasha_Model->edit($Sub_yogini_dasha,$input);
			
            $Sub_yogini_dasha = Sub_yogini_dasha_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sub_yogini_dasha_Resource($Sub_yogini_dasha), 'Sub_yogini_dasha updated successfully.');
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
        
        $Sub_yogini_dasha = Sub_yogini_dasha_Model::find($id);
  
        if (is_null($Sub_yogini_dasha)) {
            return $this->sendError('Value not found.');
        }else{
            $Sub_yogini_dasha_Model=new Sub_yogini_dasha_Model();
           $Sub_yogini_dasha_Model->remove($Sub_yogini_dasha);
            return $this->sendResponse([], 'Sub_yogini_dasha deleted successfully.');
        }
       
    }
}