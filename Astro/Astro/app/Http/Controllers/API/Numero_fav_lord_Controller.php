<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Numero_fav_lord_Model;
use Validator;
use App\Http\Resources\Numero_fav_lord_Resource;
   
class Numero_fav_lord_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Numero_fav_lord_Model=new Numero_fav_lord_Model();
        
        $Numero_fav_lords = $Numero_fav_lord_Model->index();
    
        return $this->sendResponse(Numero_fav_lord_Resource::collection($Numero_fav_lords), 'Numero_fav_lords retrieved successfully.');
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
			//'created_at' => 'required', 
			 //'updated_at' => 'required', 
			 'day' => 'required', 
			 'month' => 'required', 
			 'year' => 'required', 
			 'name' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Numero_fav_lord_Model=new Numero_fav_lord_Model();
        $rid = $Numero_fav_lord_Model->store($input);
        $Numero_fav_lord = Numero_fav_lord_Model::find($rid);
        return $this->sendResponse(new Numero_fav_lord_Resource($Numero_fav_lord), 'Numero_fav_lord created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Numero_fav_lord_Model=new Numero_fav_lord_Model();
        
        $Numero_fav_lord = $Numero_fav_lord_Model->show($id);
  
        if (is_null($Numero_fav_lord)) {
            return $this->sendError('Numero_fav_lord not found.');
        }
   
        return $this->sendResponse(new Numero_fav_lord_Resource($Numero_fav_lord), 'Numero_fav_lord retrieved successfully.');
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
        $Numero_fav_lord = Numero_fav_lord_Model::where("status","!=","D")->find($id);
		if($Numero_fav_lord){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
			} 
		 if (array_key_exists('day',$input))
			{
				$validate['day']= "required";
			} 
		 if (array_key_exists('month',$input))
			{
				$validate['month']= "required";
			} 
		 if (array_key_exists('year',$input))
			{
				$validate['year']= "required";
			} 
		 if (array_key_exists('name',$input))
			{
				$validate['name']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Numero_fav_lord_Model=new Numero_fav_lord_Model();
			$Numero_fav_lords = $Numero_fav_lord_Model->edit($Numero_fav_lord,$input);
			
            $Numero_fav_lord = Numero_fav_lord_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Numero_fav_lord_Resource($Numero_fav_lord), 'Numero_fav_lord updated successfully.');
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
        
        $Numero_fav_lord = Numero_fav_lord_Model::find($id);
  
        if (is_null($Numero_fav_lord)) {
            return $this->sendError('Value not found.');
        }else{
            $Numero_fav_lord_Model=new Numero_fav_lord_Model();
           $Numero_fav_lord_Model->remove($Numero_fav_lord);
            return $this->sendResponse([], 'Numero_fav_lord deleted successfully.');
        }
       
    }
}