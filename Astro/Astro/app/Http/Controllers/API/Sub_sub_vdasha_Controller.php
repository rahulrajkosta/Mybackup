<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Sub_sub_vdasha_Model;
use Validator;
use App\Http\Resources\Sub_sub_vdasha_Resource;
   
class Sub_sub_vdasha_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sub_sub_vdasha_Model=new Sub_sub_vdasha_Model();
        
        $Sub_sub_vdashas = $Sub_sub_vdasha_Model->index();
    
        return $this->sendResponse(Sub_sub_vdasha_Resource::collection($Sub_sub_vdashas), 'Sub_sub_vdashas retrieved successfully.');
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
			 'hour' => 'required', 
			 'min' => 'required', 
			 'lat' => 'required', 
			 'lon' => 'required', 
			 'tzone' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Sub_sub_vdasha_Model=new Sub_sub_vdasha_Model();
        $rid = $Sub_sub_vdasha_Model->store($input);
        $Sub_sub_vdasha = Sub_sub_vdasha_Model::find($rid);
        return $this->sendResponse(new Sub_sub_vdasha_Resource($Sub_sub_vdasha), 'Sub_sub_vdasha created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Sub_sub_vdasha_Model=new Sub_sub_vdasha_Model();
        
        $Sub_sub_vdasha = $Sub_sub_vdasha_Model->show($id);
  
        if (is_null($Sub_sub_vdasha)) {
            return $this->sendError('Sub_sub_vdasha not found.');
        }
   
        return $this->sendResponse(new Sub_sub_vdasha_Resource($Sub_sub_vdasha), 'Sub_sub_vdasha retrieved successfully.');
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
        $Sub_sub_vdasha = Sub_sub_vdasha_Model::where("status","!=","D")->find($id);
		if($Sub_sub_vdasha){
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
		 if (array_key_exists('hour',$input))
			{
				$validate['hour']= "required";
			} 
		 if (array_key_exists('min',$input))
			{
				$validate['min']= "required";
			} 
		 if (array_key_exists('lat',$input))
			{
				$validate['lat']= "required";
			} 
		 if (array_key_exists('lon',$input))
			{
				$validate['lon']= "required";
			} 
		 if (array_key_exists('tzone',$input))
			{
				$validate['tzone']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Sub_sub_vdasha_Model=new Sub_sub_vdasha_Model();
			$Sub_sub_vdashas = $Sub_sub_vdasha_Model->edit($Sub_sub_vdasha,$input);
			
            $Sub_sub_vdasha = Sub_sub_vdasha_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Sub_sub_vdasha_Resource($Sub_sub_vdasha), 'Sub_sub_vdasha updated successfully.');
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
        
        $Sub_sub_vdasha = Sub_sub_vdasha_Model::find($id);
  
        if (is_null($Sub_sub_vdasha)) {
            return $this->sendError('Value not found.');
        }else{
            $Sub_sub_vdasha_Model=new Sub_sub_vdasha_Model();
           $Sub_sub_vdasha_Model->remove($Sub_sub_vdasha);
            return $this->sendResponse([], 'Sub_sub_vdasha deleted successfully.');
        }
       
    }
}