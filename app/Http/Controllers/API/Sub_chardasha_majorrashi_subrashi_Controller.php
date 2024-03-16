<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sub_chardasha_majorrashi_subrashi_Model;
use Validator;
use App\Http\Resources\Sub_chardasha_majorrashi_subrashi_Resource;
   
class Sub_chardasha_majorrashi_subrashi_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sub_chardasha_majorrashi_subrashi_Model=new Sub_chardasha_majorrashi_subrashi_Model();
        
        $Sub_chardasha_majorrashi_subrashis = $Sub_chardasha_majorrashi_subrashi_Model->index();
    
        return $this->sendResponse(Sub_chardasha_majorrashi_subrashi_Resource::collection($Sub_chardasha_majorrashi_subrashis), 'Sub_chardasha_majorrashi_subrashis retrieved successfully.');
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
			 'sub_sub_dasha' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Sub_chardasha_majorrashi_subrashi_Model=new Sub_chardasha_majorrashi_subrashi_Model();
        $rid = $Sub_chardasha_majorrashi_subrashi_Model->store($input);
        $Sub_chardasha_majorrashi_subrashi = Sub_chardasha_majorrashi_subrashi_Model::find($rid);
        return $this->sendResponse(new Sub_chardasha_majorrashi_subrashi_Resource($Sub_chardasha_majorrashi_subrashi), 'Sub_chardasha_majorrashi_subrashi created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sub_chardasha_majorrashi_subrashi_Model=new Sub_chardasha_majorrashi_subrashi_Model();
        
        $Sub_chardasha_majorrashi_subrashi = $Sub_chardasha_majorrashi_subrashi_Model->show($id);
  
        if (is_null($Sub_chardasha_majorrashi_subrashi)) {
            return $this->sendError('Sub_chardasha_majorrashi_subrashi not found.');
        }
   
        return $this->sendResponse(new Sub_chardasha_majorrashi_subrashi_Resource($Sub_chardasha_majorrashi_subrashi), 'Sub_chardasha_majorrashi_subrashi retrieved successfully.');
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
        $Sub_chardasha_majorrashi_subrashi = Sub_chardasha_majorrashi_subrashi_Model::where("status","!=","D")->find($id);
		if($Sub_chardasha_majorrashi_subrashi){
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
		 if (array_key_exists('sub_sub_dasha',$input))
			{
				$validate['sub_sub_dasha']= "required";
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
			$Sub_chardasha_majorrashi_subrashi_Model=new Sub_chardasha_majorrashi_subrashi_Model();
			$Sub_chardasha_majorrashi_subrashis = $Sub_chardasha_majorrashi_subrashi_Model->edit($Sub_chardasha_majorrashi_subrashi,$input);
			
            $Sub_chardasha_majorrashi_subrashi = Sub_chardasha_majorrashi_subrashi_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sub_chardasha_majorrashi_subrashi_Resource($Sub_chardasha_majorrashi_subrashi), 'Sub_chardasha_majorrashi_subrashi updated successfully.');
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
        
        $Sub_chardasha_majorrashi_subrashi = Sub_chardasha_majorrashi_subrashi_Model::find($id);
  
        if (is_null($Sub_chardasha_majorrashi_subrashi)) {
            return $this->sendError('Value not found.');
        }else{
            $Sub_chardasha_majorrashi_subrashi_Model=new Sub_chardasha_majorrashi_subrashi_Model();
           $Sub_chardasha_majorrashi_subrashi_Model->remove($Sub_chardasha_majorrashi_subrashi);
            return $this->sendResponse([], 'Sub_chardasha_majorrashi_subrashi deleted successfully.');
        }
       
    }
}