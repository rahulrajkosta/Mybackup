<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Astro_details_Model;
use Validator;
use App\Http\Resources\Astro_details_Resource;
   
class Astro_details_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Astro_details_Model=new Astro_details_Model();
        
        $Astro_detailss = $Astro_details_Model->index();
    
        return $this->sendResponse(Astro_details_Resource::collection($Astro_detailss), 'Astro_detailss retrieved successfully.');
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
			'ascendant' => 'required', 
			 'Varna' => 'required', 
			 'Vashya' => 'required', 
			 'Yoni' => 'required', 
			 'Gan' => 'required', 
			 'Nadi' => 'required', 
			 'sign' => 'required', 
			 'NaksahtraLord' => 'required', 
			 'Charan' => 'required', 
			 'Yog' => 'required', 
			 'Karan' => 'required', 
			 'Tithi' => 'required', 
			 'yunja' => 'required', 
			 'tatva' => 'required', 
			 'name_alphabet' => 'required', 
			 'paya' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Astro_details_Model=new Astro_details_Model();
        $rid = $Astro_details_Model->store($input);
        $Astro_details = Astro_details_Model::find($rid);
        return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Astro_details_Model=new Astro_details_Model();
        
        $Astro_details = $Astro_details_Model->show($id);
  
        if (is_null($Astro_details)) {
            return $this->sendError('Astro_details not found.');
        }
   
        return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details retrieved successfully.');
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
        $Astro_details = Astro_details_Model::where("status","!=","D")->find($id);
		if($Astro_details){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('ascendant',$input))
			{
				$validate['ascendant']= "required";
			} 
		 if (array_key_exists('Varna',$input))
			{
				$validate['Varna']= "required";
			} 
		 if (array_key_exists('Vashya',$input))
			{
				$validate['Vashya']= "required";
			} 
		 if (array_key_exists('Yoni',$input))
			{
				$validate['Yoni']= "required";
			} 
		 if (array_key_exists('Gan',$input))
			{
				$validate['Gan']= "required";
			} 
		 if (array_key_exists('Nadi',$input))
			{
				$validate['Nadi']= "required";
			} 
		 if (array_key_exists('sign',$input))
			{
				$validate['sign']= "required";
			} 
		 if (array_key_exists('NaksahtraLord',$input))
			{
				$validate['NaksahtraLord']= "required";
			} 
		 if (array_key_exists('Charan',$input))
			{
				$validate['Charan']= "required";
			} 
		 if (array_key_exists('Yog',$input))
			{
				$validate['Yog']= "required";
			} 
		 if (array_key_exists('Karan',$input))
			{
				$validate['Karan']= "required";
			} 
		 if (array_key_exists('Tithi',$input))
			{
				$validate['Tithi']= "required";
			} 
		 if (array_key_exists('yunja',$input))
			{
				$validate['yunja']= "required";
			} 
		 if (array_key_exists('tatva',$input))
			{
				$validate['tatva']= "required";
			} 
		 if (array_key_exists('name_alphabet',$input))
			{
				$validate['name_alphabet']= "required";
			} 
		 if (array_key_exists('paya',$input))
			{
				$validate['paya']= "required";
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
			$Astro_details_Model=new Astro_details_Model();
			$Astro_detailss = $Astro_details_Model->edit($Astro_details,$input);
			
            $Astro_details = Astro_details_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Astro_details_Resource($Astro_details), 'Astro_details updated successfully.');
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
        
        $Astro_details = Astro_details_Model::find($id);
  
        if (is_null($Astro_details)) {
            return $this->sendError('Value not found.');
        }else{
            $Astro_details_Model=new Astro_details_Model();
           $Astro_details_Model->remove($Astro_details);
            return $this->sendResponse([], 'Astro_details deleted successfully.');
        }
       
    }
}