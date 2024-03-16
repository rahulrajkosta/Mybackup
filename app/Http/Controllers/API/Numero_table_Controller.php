<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Numero_table_Model;
use Validator;
use App\Http\Resources\Numero_table_Resource;
   
class Numero_table_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Numero_table_Model=new Numero_table_Model();
        
        $Numero_tables = $Numero_table_Model->index();
    
        return $this->sendResponse(Numero_table_Resource::collection($Numero_tables), 'Numero_tables retrieved successfully.');
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
			'name' => 'required', 
			 'date' => 'required', 
			 'destiny_number' => 'required', 
			 'radical_number' => 'required', 
			 'name_number' => 'required', 
			 'evil_num' => 'required', 
			 'fav_color' => 'required', 
			 'fav_day' => 'required', 
			 'fav_god' => 'required', 
			 'fav_mantra' => 'required', 
			 'fav_metal' => 'required', 
			 'fav_stone' => 'required', 
			 'fav_substone' => 'required', 
			 'friendly_num' => 'required', 
			 'neutral_num' => 'required', 
			 'radical_num' => 'required', 
			 'radical_ruler' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Numero_table_Model=new Numero_table_Model();
        $rid = $Numero_table_Model->store($input);
        $Numero_table = Numero_table_Model::find($rid);
        return $this->sendResponse(new Numero_table_Resource($Numero_table), 'Numero_table created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Numero_table_Model=new Numero_table_Model();
        
        $Numero_table = $Numero_table_Model->show($id);
  
        if (is_null($Numero_table)) {
            return $this->sendError('Numero_table not found.');
        }
   
        return $this->sendResponse(new Numero_table_Resource($Numero_table), 'Numero_table retrieved successfully.');
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
        $Numero_table = Numero_table_Model::where("status","!=","D")->find($id);
		if($Numero_table){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('name',$input))
			{
				$validate['name']= "required";
			} 
		 if (array_key_exists('date',$input))
			{
				$validate['date']= "required";
			} 
		 if (array_key_exists('destiny_number',$input))
			{
				$validate['destiny_number']= "required";
			} 
		 if (array_key_exists('radical_number',$input))
			{
				$validate['radical_number']= "required";
			} 
		 if (array_key_exists('name_number',$input))
			{
				$validate['name_number']= "required";
			} 
		 if (array_key_exists('evil_num',$input))
			{
				$validate['evil_num']= "required";
			} 
		 if (array_key_exists('fav_color',$input))
			{
				$validate['fav_color']= "required";
			} 
		 if (array_key_exists('fav_day',$input))
			{
				$validate['fav_day']= "required";
			} 
		 if (array_key_exists('fav_god',$input))
			{
				$validate['fav_god']= "required";
			} 
		 if (array_key_exists('fav_mantra',$input))
			{
				$validate['fav_mantra']= "required";
			} 
		 if (array_key_exists('fav_metal',$input))
			{
				$validate['fav_metal']= "required";
			} 
		 if (array_key_exists('fav_stone',$input))
			{
				$validate['fav_stone']= "required";
			} 
		 if (array_key_exists('fav_substone',$input))
			{
				$validate['fav_substone']= "required";
			} 
		 if (array_key_exists('friendly_num',$input))
			{
				$validate['friendly_num']= "required";
			} 
		 if (array_key_exists('neutral_num',$input))
			{
				$validate['neutral_num']= "required";
			} 
		 if (array_key_exists('radical_num',$input))
			{
				$validate['radical_num']= "required";
			} 
		 if (array_key_exists('radical_ruler',$input))
			{
				$validate['radical_ruler']= "required";
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
			$Numero_table_Model=new Numero_table_Model();
			$Numero_tables = $Numero_table_Model->edit($Numero_table,$input);
			
            $Numero_table = Numero_table_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Numero_table_Resource($Numero_table), 'Numero_table updated successfully.');
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
        
        $Numero_table = Numero_table_Model::find($id);
  
        if (is_null($Numero_table)) {
            return $this->sendError('Value not found.');
        }else{
            $Numero_table_Model=new Numero_table_Model();
           $Numero_table_Model->remove($Numero_table);
            return $this->sendResponse([], 'Numero_table deleted successfully.');
        }
       
    }
}