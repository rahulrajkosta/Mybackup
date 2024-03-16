<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Daily_nakshatra_prediction_next_Model;
use Validator;
use App\Http\Resources\Daily_nakshatra_prediction_next_Resource;
   
class Daily_nakshatra_prediction_next_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Daily_nakshatra_prediction_next_Model=new Daily_nakshatra_prediction_next_Model();
        
        $Daily_nakshatra_prediction_nexts = $Daily_nakshatra_prediction_next_Model->index();
    
        return $this->sendResponse(Daily_nakshatra_prediction_next_Resource::collection($Daily_nakshatra_prediction_nexts), 'Daily_nakshatra_prediction_nexts retrieved successfully.');
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
			'birth_moon_sign' => 'required', 
			 'birth_moon_nakshatra' => 'required', 
			 'prediction' => 'required', 
			 'prediction_date' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Daily_nakshatra_prediction_next_Model=new Daily_nakshatra_prediction_next_Model();
        $rid = $Daily_nakshatra_prediction_next_Model->store($input);
        $Daily_nakshatra_prediction_next = Daily_nakshatra_prediction_next_Model::find($rid);
        return $this->sendResponse(new Daily_nakshatra_prediction_next_Resource($Daily_nakshatra_prediction_next), 'Daily_nakshatra_prediction_next created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Daily_nakshatra_prediction_next_Model=new Daily_nakshatra_prediction_next_Model();
        
        $Daily_nakshatra_prediction_next = $Daily_nakshatra_prediction_next_Model->show($id);
  
        if (is_null($Daily_nakshatra_prediction_next)) {
            return $this->sendError('Daily_nakshatra_prediction_next not found.');
        }
   
        return $this->sendResponse(new Daily_nakshatra_prediction_next_Resource($Daily_nakshatra_prediction_next), 'Daily_nakshatra_prediction_next retrieved successfully.');
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
        $Daily_nakshatra_prediction_next = Daily_nakshatra_prediction_next_Model::where("status","!=","D")->find($id);
		if($Daily_nakshatra_prediction_next){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('birth_moon_sign',$input))
			{
				$validate['birth_moon_sign']= "required";
			} 
		 if (array_key_exists('birth_moon_nakshatra',$input))
			{
				$validate['birth_moon_nakshatra']= "required";
			} 
		 if (array_key_exists('prediction',$input))
			{
				$validate['prediction']= "required";
			} 
		 if (array_key_exists('prediction_date',$input))
			{
				$validate['prediction_date']= "required";
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
			$Daily_nakshatra_prediction_next_Model=new Daily_nakshatra_prediction_next_Model();
			$Daily_nakshatra_prediction_nexts = $Daily_nakshatra_prediction_next_Model->edit($Daily_nakshatra_prediction_next,$input);
			
            $Daily_nakshatra_prediction_next = Daily_nakshatra_prediction_next_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Daily_nakshatra_prediction_next_Resource($Daily_nakshatra_prediction_next), 'Daily_nakshatra_prediction_next updated successfully.');
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
        
        $Daily_nakshatra_prediction_next = Daily_nakshatra_prediction_next_Model::find($id);
  
        if (is_null($Daily_nakshatra_prediction_next)) {
            return $this->sendError('Value not found.');
        }else{
            $Daily_nakshatra_prediction_next_Model=new Daily_nakshatra_prediction_next_Model();
           $Daily_nakshatra_prediction_next_Model->remove($Daily_nakshatra_prediction_next);
            return $this->sendResponse([], 'Daily_nakshatra_prediction_next deleted successfully.');
        }
       
    }
}