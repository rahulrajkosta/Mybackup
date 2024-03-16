<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Ghat_chakra_Model;
use Validator;
use App\Http\Resources\Ghat_chakra_Resource;
   
class Ghat_chakra_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ghat_chakra_Model=new Ghat_chakra_Model();
        
        $Ghat_chakras = $Ghat_chakra_Model->index();
    
        return $this->sendResponse(Ghat_chakra_Resource::collection($Ghat_chakras), 'Ghat_chakras retrieved successfully.');
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
        
        $Ghat_chakra_Model=new Ghat_chakra_Model();
        $rid = $Ghat_chakra_Model->store($input);
        $Ghat_chakra = Ghat_chakra_Model::find($rid);
        return $this->sendResponse(new Ghat_chakra_Resource($Ghat_chakra), 'Ghat_chakra created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Ghat_chakra_Model=new Ghat_chakra_Model();
        
        $Ghat_chakra = $Ghat_chakra_Model->show($id);
  
        if (is_null($Ghat_chakra)) {
            return $this->sendError('Ghat_chakra not found.');
        }
   
        return $this->sendResponse(new Ghat_chakra_Resource($Ghat_chakra), 'Ghat_chakra retrieved successfully.');
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
        $Ghat_chakra = Ghat_chakra_Model::where("status","!=","D")->find($id);
		if($Ghat_chakra){
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
			$Ghat_chakra_Model=new Ghat_chakra_Model();
			$Ghat_chakras = $Ghat_chakra_Model->edit($Ghat_chakra,$input);
			
            $Ghat_chakra = Ghat_chakra_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Ghat_chakra_Resource($Ghat_chakra), 'Ghat_chakra updated successfully.');
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
        
        $Ghat_chakra = Ghat_chakra_Model::find($id);
  
        if (is_null($Ghat_chakra)) {
            return $this->sendError('Value not found.');
        }else{
            $Ghat_chakra_Model=new Ghat_chakra_Model();
           $Ghat_chakra_Model->remove($Ghat_chakra);
            return $this->sendResponse([], 'Ghat_chakra deleted successfully.');
        }
       
    }
}