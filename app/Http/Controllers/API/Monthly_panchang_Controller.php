<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Monthly_panchang_Model;
use Validator;
use App\Http\Resources\Monthly_panchang_Resource;
   
class Monthly_panchang_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Monthly_panchang_Model=new Monthly_panchang_Model();
        
        $Monthly_panchangs = $Monthly_panchang_Model->index();
    
        return $this->sendResponse(Monthly_panchang_Resource::collection($Monthly_panchangs), 'Monthly_panchangs retrieved successfully.');
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
			'year' => 'required', 
			 'month' => 'required', 
			 'panchang' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Monthly_panchang_Model=new Monthly_panchang_Model();
        $rid = $Monthly_panchang_Model->store($input);
        $Monthly_panchang = Monthly_panchang_Model::find($rid);
        return $this->sendResponse(new Monthly_panchang_Resource($Monthly_panchang), 'Monthly_panchang created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Monthly_panchang_Model=new Monthly_panchang_Model();
        
        $Monthly_panchang = $Monthly_panchang_Model->show($id);
  
        if (is_null($Monthly_panchang)) {
            return $this->sendError('Monthly_panchang not found.');
        }
   
        return $this->sendResponse(new Monthly_panchang_Resource($Monthly_panchang), 'Monthly_panchang retrieved successfully.');
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
        $Monthly_panchang = Monthly_panchang_Model::where("status","!=","D")->find($id);
		if($Monthly_panchang){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('year',$input))
			{
				$validate['year']= "required";
			} 
		 if (array_key_exists('month',$input))
			{
				$validate['month']= "required";
			} 
		 if (array_key_exists('panchang',$input))
			{
				$validate['panchang']= "required";
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
			$Monthly_panchang_Model=new Monthly_panchang_Model();
			$Monthly_panchangs = $Monthly_panchang_Model->edit($Monthly_panchang,$input);
			
            $Monthly_panchang = Monthly_panchang_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Monthly_panchang_Resource($Monthly_panchang), 'Monthly_panchang updated successfully.');
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
        
        $Monthly_panchang = Monthly_panchang_Model::find($id);
  
        if (is_null($Monthly_panchang)) {
            return $this->sendError('Value not found.');
        }else{
            $Monthly_panchang_Model=new Monthly_panchang_Model();
           $Monthly_panchang_Model->remove($Monthly_panchang);
            return $this->sendResponse([], 'Monthly_panchang deleted successfully.');
        }
       
    }
}