<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Numero_fav_mantra_Model;
use Validator;
use App\Http\Resources\Numero_fav_mantra_Resource;
   
class Numero_fav_mantra_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Numero_fav_mantra_Model=new Numero_fav_mantra_Model();
        
        $Numero_fav_mantras = $Numero_fav_mantra_Model->index();
    
        return $this->sendResponse(Numero_fav_mantra_Resource::collection($Numero_fav_mantras), 'Numero_fav_mantras retrieved successfully.');
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
			'title' => 'required', 
			 'description' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Numero_fav_mantra_Model=new Numero_fav_mantra_Model();
        $rid = $Numero_fav_mantra_Model->store($input);
        $Numero_fav_mantra = Numero_fav_mantra_Model::find($rid);
        return $this->sendResponse(new Numero_fav_mantra_Resource($Numero_fav_mantra), 'Numero_fav_mantra created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Numero_fav_mantra_Model=new Numero_fav_mantra_Model();
        
        $Numero_fav_mantra = $Numero_fav_mantra_Model->show($id);
  
        if (is_null($Numero_fav_mantra)) {
            return $this->sendError('Numero_fav_mantra not found.');
        }
   
        return $this->sendResponse(new Numero_fav_mantra_Resource($Numero_fav_mantra), 'Numero_fav_mantra retrieved successfully.');
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
        $Numero_fav_mantra = Numero_fav_mantra_Model::where("status","!=","D")->find($id);
		if($Numero_fav_mantra){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('title',$input))
			{
				$validate['title']= "required";
			} 
		 if (array_key_exists('description',$input))
			{
				$validate['description']= "required";
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
			$Numero_fav_mantra_Model=new Numero_fav_mantra_Model();
			$Numero_fav_mantras = $Numero_fav_mantra_Model->edit($Numero_fav_mantra,$input);
			
            $Numero_fav_mantra = Numero_fav_mantra_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Numero_fav_mantra_Resource($Numero_fav_mantra), 'Numero_fav_mantra updated successfully.');
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
        
        $Numero_fav_mantra = Numero_fav_mantra_Model::find($id);
  
        if (is_null($Numero_fav_mantra)) {
            return $this->sendError('Value not found.');
        }else{
            $Numero_fav_mantra_Model=new Numero_fav_mantra_Model();
           $Numero_fav_mantra_Model->remove($Numero_fav_mantra);
            return $this->sendResponse([], 'Numero_fav_mantra deleted successfully.');
        }
       
    }
}