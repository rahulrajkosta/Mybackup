<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Varshaphal_month_chart_Model;
use Validator;
use App\Http\Resources\Varshaphal_month_chart_Resource;
   
class Varshaphal_month_chart_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
        
        $Varshaphal_month_charts = $Varshaphal_month_chart_Model->index();
    
        return $this->sendResponse(Varshaphal_month_chart_Resource::collection($Varshaphal_month_charts), 'Varshaphal_month_charts retrieved successfully.');
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
			'month_id' => 'required', 
			 'chart' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
        $rid = $Varshaphal_month_chart_Model->store($input);
        $Varshaphal_month_chart = Varshaphal_month_chart_Model::find($rid);
        return $this->sendResponse(new Varshaphal_month_chart_Resource($Varshaphal_month_chart), 'Varshaphal_month_chart created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
        
        $Varshaphal_month_chart = $Varshaphal_month_chart_Model->show($id);
  
        if (is_null($Varshaphal_month_chart)) {
            return $this->sendError('Varshaphal_month_chart not found.');
        }
   
        return $this->sendResponse(new Varshaphal_month_chart_Resource($Varshaphal_month_chart), 'Varshaphal_month_chart retrieved successfully.');
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
        $Varshaphal_month_chart = Varshaphal_month_chart_Model::where("status","!=","D")->find($id);
		if($Varshaphal_month_chart){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('month_id',$input))
			{
				$validate['month_id']= "required";
			} 
		 if (array_key_exists('chart',$input))
			{
				$validate['chart']= "required";
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
			$Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
			$Varshaphal_month_charts = $Varshaphal_month_chart_Model->edit($Varshaphal_month_chart,$input);
			
            $Varshaphal_month_chart = Varshaphal_month_chart_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Varshaphal_month_chart_Resource($Varshaphal_month_chart), 'Varshaphal_month_chart updated successfully.');
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
        
        $Varshaphal_month_chart = Varshaphal_month_chart_Model::find($id);
  
        if (is_null($Varshaphal_month_chart)) {
            return $this->sendError('Value not found.');
        }else{
            $Varshaphal_month_chart_Model=new Varshaphal_month_chart_Model();
           $Varshaphal_month_chart_Model->remove($Varshaphal_month_chart);
            return $this->sendResponse([], 'Varshaphal_month_chart deleted successfully.');
        }
       
    }
}