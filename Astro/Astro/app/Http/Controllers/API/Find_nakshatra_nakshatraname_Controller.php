<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Find_nakshatra_nakshatraname_Model;
use Validator;
use App\Http\Resources\Find_nakshatra_nakshatraname_Resource;
   
class Find_nakshatra_nakshatraname_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Find_nakshatra_nakshatraname_Model=new Find_nakshatra_nakshatraname_Model();
        
        $Find_nakshatra_nakshatranames = $Find_nakshatra_nakshatraname_Model->index();
    
        return $this->sendResponse(Find_nakshatra_nakshatraname_Resource::collection($Find_nakshatra_nakshatranames), 'Find_nakshatra_nakshatranames retrieved successfully.');
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
			 'lat' => 'required', 
			 'lon' => 'required', 
			 'tzone' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Find_nakshatra_nakshatraname_Model=new Find_nakshatra_nakshatraname_Model();
        $rid = $Find_nakshatra_nakshatraname_Model->store($input);
        $Find_nakshatra_nakshatraname = Find_nakshatra_nakshatraname_Model::find($rid);
        return $this->sendResponse(new Find_nakshatra_nakshatraname_Resource($Find_nakshatra_nakshatraname), 'Find_nakshatra_nakshatraname created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Find_nakshatra_nakshatraname_Model=new Find_nakshatra_nakshatraname_Model();
        
        $Find_nakshatra_nakshatraname = $Find_nakshatra_nakshatraname_Model->show($id);
  
        if (is_null($Find_nakshatra_nakshatraname)) {
            return $this->sendError('Find_nakshatra_nakshatraname not found.');
        }
   
        return $this->sendResponse(new Find_nakshatra_nakshatraname_Resource($Find_nakshatra_nakshatraname), 'Find_nakshatra_nakshatraname retrieved successfully.');
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
        $Find_nakshatra_nakshatraname = Find_nakshatra_nakshatraname_Model::where("status","!=","D")->find($id);
		if($Find_nakshatra_nakshatraname){
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
			$Find_nakshatra_nakshatraname_Model=new Find_nakshatra_nakshatraname_Model();
			$Find_nakshatra_nakshatranames = $Find_nakshatra_nakshatraname_Model->edit($Find_nakshatra_nakshatraname,$input);
			
            $Find_nakshatra_nakshatraname = Find_nakshatra_nakshatraname_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Find_nakshatra_nakshatraname_Resource($Find_nakshatra_nakshatraname), 'Find_nakshatra_nakshatraname updated successfully.');
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
        
        $Find_nakshatra_nakshatraname = Find_nakshatra_nakshatraname_Model::find($id);
  
        if (is_null($Find_nakshatra_nakshatraname)) {
            return $this->sendError('Value not found.');
        }else{
            $Find_nakshatra_nakshatraname_Model=new Find_nakshatra_nakshatraname_Model();
           $Find_nakshatra_nakshatraname_Model->remove($Find_nakshatra_nakshatraname);
            return $this->sendResponse([], 'Find_nakshatra_nakshatraname deleted successfully.');
        }
       
    }
}