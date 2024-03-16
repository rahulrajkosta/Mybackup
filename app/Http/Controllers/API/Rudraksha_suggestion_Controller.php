<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Rudraksha_suggestion_Model;
use Validator;
use App\Http\Resources\Rudraksha_suggestion_Resource;
   
class Rudraksha_suggestion_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rudraksha_suggestion_Model=new Rudraksha_suggestion_Model();
        
        $Rudraksha_suggestions = $Rudraksha_suggestion_Model->index();
    
        return $this->sendResponse(Rudraksha_suggestion_Resource::collection($Rudraksha_suggestions), 'Rudraksha_suggestions retrieved successfully.');
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
			'img_url' => 'required', 
			 'rudraksha_key' => 'required', 
			 'name' => 'required', 
			 'recommend' => 'required', 
			 'detail' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Rudraksha_suggestion_Model=new Rudraksha_suggestion_Model();
        $rid = $Rudraksha_suggestion_Model->store($input);
        $Rudraksha_suggestion = Rudraksha_suggestion_Model::find($rid);
        return $this->sendResponse(new Rudraksha_suggestion_Resource($Rudraksha_suggestion), 'Rudraksha_suggestion created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Rudraksha_suggestion_Model=new Rudraksha_suggestion_Model();
        
        $Rudraksha_suggestion = $Rudraksha_suggestion_Model->show($id);
  
        if (is_null($Rudraksha_suggestion)) {
            return $this->sendError('Rudraksha_suggestion not found.');
        }
   
        return $this->sendResponse(new Rudraksha_suggestion_Resource($Rudraksha_suggestion), 'Rudraksha_suggestion retrieved successfully.');
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
        $Rudraksha_suggestion = Rudraksha_suggestion_Model::where("status","!=","D")->find($id);
		if($Rudraksha_suggestion){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('img_url',$input))
			{
				$validate['img_url']= "required";
			} 
		 if (array_key_exists('rudraksha_key',$input))
			{
				$validate['rudraksha_key']= "required";
			} 
		 if (array_key_exists('name',$input))
			{
				$validate['name']= "required";
			} 
		 if (array_key_exists('recommend',$input))
			{
				$validate['recommend']= "required";
			} 
		 if (array_key_exists('detail',$input))
			{
				$validate['detail']= "required";
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
			$Rudraksha_suggestion_Model=new Rudraksha_suggestion_Model();
			$Rudraksha_suggestions = $Rudraksha_suggestion_Model->edit($Rudraksha_suggestion,$input);
			
            $Rudraksha_suggestion = Rudraksha_suggestion_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Rudraksha_suggestion_Resource($Rudraksha_suggestion), 'Rudraksha_suggestion updated successfully.');
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
        
        $Rudraksha_suggestion = Rudraksha_suggestion_Model::find($id);
  
        if (is_null($Rudraksha_suggestion)) {
            return $this->sendError('Value not found.');
        }else{
            $Rudraksha_suggestion_Model=new Rudraksha_suggestion_Model();
           $Rudraksha_suggestion_Model->remove($Rudraksha_suggestion);
            return $this->sendResponse([], 'Rudraksha_suggestion deleted successfully.');
        }
       
    }
}