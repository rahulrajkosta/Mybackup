<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sub_yogini_dasha_dashacycle_dashaname_Model;
use Validator;
use App\Http\Resources\Sub_yogini_dasha_dashacycle_dashaname_Resource;
   
class Sub_yogini_dasha_dashacycle_dashaname_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sub_yogini_dasha_dashacycle_dashaname_Model=new Sub_yogini_dasha_dashacycle_dashaname_Model();
        
        $Sub_yogini_dasha_dashacycle_dashanames = $Sub_yogini_dasha_dashacycle_dashaname_Model->index();
    
        return $this->sendResponse(Sub_yogini_dasha_dashacycle_dashaname_Resource::collection($Sub_yogini_dasha_dashacycle_dashanames), 'Sub_yogini_dasha_dashacycle_dashanames retrieved successfully.');
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
        
        $Sub_yogini_dasha_dashacycle_dashaname_Model=new Sub_yogini_dasha_dashacycle_dashaname_Model();
        $rid = $Sub_yogini_dasha_dashacycle_dashaname_Model->store($input);
        $Sub_yogini_dasha_dashacycle_dashaname = Sub_yogini_dasha_dashacycle_dashaname_Model::find($rid);
        return $this->sendResponse(new Sub_yogini_dasha_dashacycle_dashaname_Resource($Sub_yogini_dasha_dashacycle_dashaname), 'Sub_yogini_dasha_dashacycle_dashaname created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sub_yogini_dasha_dashacycle_dashaname_Model=new Sub_yogini_dasha_dashacycle_dashaname_Model();
        
        $Sub_yogini_dasha_dashacycle_dashaname = $Sub_yogini_dasha_dashacycle_dashaname_Model->show($id);
  
        if (is_null($Sub_yogini_dasha_dashacycle_dashaname)) {
            return $this->sendError('Sub_yogini_dasha_dashacycle_dashaname not found.');
        }
   
        return $this->sendResponse(new Sub_yogini_dasha_dashacycle_dashaname_Resource($Sub_yogini_dasha_dashacycle_dashaname), 'Sub_yogini_dasha_dashacycle_dashaname retrieved successfully.');
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
        $Sub_yogini_dasha_dashacycle_dashaname = Sub_yogini_dasha_dashacycle_dashaname_Model::where("status","!=","D")->find($id);
		if($Sub_yogini_dasha_dashacycle_dashaname){
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
			$Sub_yogini_dasha_dashacycle_dashaname_Model=new Sub_yogini_dasha_dashacycle_dashaname_Model();
			$Sub_yogini_dasha_dashacycle_dashanames = $Sub_yogini_dasha_dashacycle_dashaname_Model->edit($Sub_yogini_dasha_dashacycle_dashaname,$input);
			
            $Sub_yogini_dasha_dashacycle_dashaname = Sub_yogini_dasha_dashacycle_dashaname_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sub_yogini_dasha_dashacycle_dashaname_Resource($Sub_yogini_dasha_dashacycle_dashaname), 'Sub_yogini_dasha_dashacycle_dashaname updated successfully.');
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
        
        $Sub_yogini_dasha_dashacycle_dashaname = Sub_yogini_dasha_dashacycle_dashaname_Model::find($id);
  
        if (is_null($Sub_yogini_dasha_dashacycle_dashaname)) {
            return $this->sendError('Value not found.');
        }else{
            $Sub_yogini_dasha_dashacycle_dashaname_Model=new Sub_yogini_dasha_dashacycle_dashaname_Model();
           $Sub_yogini_dasha_dashacycle_dashaname_Model->remove($Sub_yogini_dasha_dashacycle_dashaname);
            return $this->sendResponse([], 'Sub_yogini_dasha_dashacycle_dashaname deleted successfully.');
        }
       
    }
}