<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Daily_nakshatra_prediction_Model;
use Validator;
use App\Http\Resources\Daily_nakshatra_prediction_Resource;
   
class Daily_nakshatra_prediction_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Daily_nakshatra_prediction_Model=new Daily_nakshatra_prediction_Model();
        
        $Daily_nakshatra_predictions = $Daily_nakshatra_prediction_Model->index();
    
        return $this->sendResponse(Daily_nakshatra_prediction_Resource::collection($Daily_nakshatra_predictions), 'Daily_nakshatra_predictions retrieved successfully.');
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
        
        $Daily_nakshatra_prediction_Model=new Daily_nakshatra_prediction_Model();
        $rid = $Daily_nakshatra_prediction_Model->store($input);
        $Daily_nakshatra_prediction = Daily_nakshatra_prediction_Model::find($rid);
        return $this->sendResponse(new Daily_nakshatra_prediction_Resource($Daily_nakshatra_prediction), 'Daily_nakshatra_prediction created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Daily_nakshatra_prediction_Model=new Daily_nakshatra_prediction_Model();
        
        $Daily_nakshatra_prediction = $Daily_nakshatra_prediction_Model->show($id);
  
        if (is_null($Daily_nakshatra_prediction)) {
            return $this->sendError('Daily_nakshatra_prediction not found.');
        }
   
        return $this->sendResponse(new Daily_nakshatra_prediction_Resource($Daily_nakshatra_prediction), 'Daily_nakshatra_prediction retrieved successfully.');
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
        $Daily_nakshatra_prediction = Daily_nakshatra_prediction_Model::where("status","!=","D")->find($id);
		if($Daily_nakshatra_prediction){
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
			$Daily_nakshatra_prediction_Model=new Daily_nakshatra_prediction_Model();
			$Daily_nakshatra_predictions = $Daily_nakshatra_prediction_Model->edit($Daily_nakshatra_prediction,$input);
			
            $Daily_nakshatra_prediction = Daily_nakshatra_prediction_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Daily_nakshatra_prediction_Resource($Daily_nakshatra_prediction), 'Daily_nakshatra_prediction updated successfully.');
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
        
        $Daily_nakshatra_prediction = Daily_nakshatra_prediction_Model::find($id);
  
        if (is_null($Daily_nakshatra_prediction)) {
            return $this->sendError('Value not found.');
        }else{
            $Daily_nakshatra_prediction_Model=new Daily_nakshatra_prediction_Model();
           $Daily_nakshatra_prediction_Model->remove($Daily_nakshatra_prediction);
            return $this->sendResponse([], 'Daily_nakshatra_prediction deleted successfully.');
        }
       
    }
}