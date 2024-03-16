<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Advanced_panchang_sunrise_Model;
use Validator;
use App\Http\Resources\Advanced_panchang_sunrise_Resource;
   
class Advanced_panchang_sunrise_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Advanced_panchang_sunrise_Model=new Advanced_panchang_sunrise_Model();
        
        $Advanced_panchang_sunrises = $Advanced_panchang_sunrise_Model->index();
    
        return $this->sendResponse(Advanced_panchang_sunrise_Resource::collection($Advanced_panchang_sunrises), 'Advanced_panchang_sunrises retrieved successfully.');
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
			 'day' => 'required', 
			 'sunset' => 'required', 
			 'user_id' => 'required', 
			 'sunrise' => 'required', 
			 'moonrise' => 'required', 
			 'moonset' => 'required', 
			 'tithi' => 'required', 
			 'nakshatra' => 'required', 
			 'yog' => 'required', 
			 'karan' => 'required', 
			 'hindu_maah' => 'required', 
			 'paksha' => 'required', 
			 'ritu' => 'required', 
			 'sun_sign' => 'required', 
			 'moon_sign' => 'required', 
			 'ayana' => 'required', 
			 'panchang_yog' => 'required', 
			 'vikram_samvat' => 'required', 
			 'shaka_samvat' => 'required', 
			 'shaka_samvat_name' => 'required', 
			 'vkram_samvat_name' => 'required', 
			 'disha_shool' => 'required', 
			 'disha_shool_remedies' => 'required', 
			 'nak_shool' => 'required', 
			 'moon_nivas' => 'required', 
			 'abhijit_muhurta' => 'required', 
			 'rahukaal' => 'required', 
			 'guliKaal' => 'required', 
			 'yamghant_kaal' => 'required', 
			 'created_at' => 'required', 
			 'updated_at' => 'required',	 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Advanced_panchang_sunrise_Model=new Advanced_panchang_sunrise_Model();
        $rid = $Advanced_panchang_sunrise_Model->store($input);
        $Advanced_panchang_sunrise = Advanced_panchang_sunrise_Model::find($rid);
        return $this->sendResponse(new Advanced_panchang_sunrise_Resource($Advanced_panchang_sunrise), 'Advanced_panchang_sunrise created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Advanced_panchang_sunrise_Model=new Advanced_panchang_sunrise_Model();
        
        $Advanced_panchang_sunrise = $Advanced_panchang_sunrise_Model->show($id);
  
        if (is_null($Advanced_panchang_sunrise)) {
            return $this->sendError('Advanced_panchang_sunrise not found.');
        }
   
        return $this->sendResponse(new Advanced_panchang_sunrise_Resource($Advanced_panchang_sunrise), 'Advanced_panchang_sunrise retrieved successfully.');
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
        $Advanced_panchang_sunrise = Advanced_panchang_sunrise_Model::where("status","!=","D")->find($id);
		if($Advanced_panchang_sunrise){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    foreach($input as $key => $value) {
                        //echo "$key: $key\n";
                        // if(array_key_exists("user_id",$input)){
                            // $validate['user_id']="required";
                        // }
						
                        if (array_key_exists('day',$input))
			{
				$validate['day']= "required";
			} 
		 if (array_key_exists('sunset',$input))
			{
				$validate['sunset']= "required";
			} 
		 if (array_key_exists('user_id',$input))
			{
				$validate['user_id']= "required";
			} 
		 if (array_key_exists('sunrise',$input))
			{
				$validate['sunrise']= "required";
			} 
		 if (array_key_exists('moonrise',$input))
			{
				$validate['moonrise']= "required";
			} 
		 if (array_key_exists('moonset',$input))
			{
				$validate['moonset']= "required";
			} 
		 if (array_key_exists('tithi',$input))
			{
				$validate['tithi']= "required";
			} 
		 if (array_key_exists('nakshatra',$input))
			{
				$validate['nakshatra']= "required";
			} 
		 if (array_key_exists('yog',$input))
			{
				$validate['yog']= "required";
			} 
		 if (array_key_exists('karan',$input))
			{
				$validate['karan']= "required";
			} 
		 if (array_key_exists('hindu_maah',$input))
			{
				$validate['hindu_maah']= "required";
			} 
		 if (array_key_exists('paksha',$input))
			{
				$validate['paksha']= "required";
			} 
		 if (array_key_exists('ritu',$input))
			{
				$validate['ritu']= "required";
			} 
		 if (array_key_exists('sun_sign',$input))
			{
				$validate['sun_sign']= "required";
			} 
		 if (array_key_exists('moon_sign',$input))
			{
				$validate['moon_sign']= "required";
			} 
		 if (array_key_exists('ayana',$input))
			{
				$validate['ayana']= "required";
			} 
		 if (array_key_exists('panchang_yog',$input))
			{
				$validate['panchang_yog']= "required";
			} 
		 if (array_key_exists('vikram_samvat',$input))
			{
				$validate['vikram_samvat']= "required";
			} 
		 if (array_key_exists('shaka_samvat',$input))
			{
				$validate['shaka_samvat']= "required";
			} 
		 if (array_key_exists('shaka_samvat_name',$input))
			{
				$validate['shaka_samvat_name']= "required";
			} 
		 if (array_key_exists('vkram_samvat_name',$input))
			{
				$validate['vkram_samvat_name']= "required";
			} 
		 if (array_key_exists('disha_shool',$input))
			{
				$validate['disha_shool']= "required";
			} 
		 if (array_key_exists('disha_shool_remedies',$input))
			{
				$validate['disha_shool_remedies']= "required";
			} 
		 if (array_key_exists('nak_shool',$input))
			{
				$validate['nak_shool']= "required";
			} 
		 if (array_key_exists('moon_nivas',$input))
			{
				$validate['moon_nivas']= "required";
			} 
		 if (array_key_exists('abhijit_muhurta',$input))
			{
				$validate['abhijit_muhurta']= "required";
			} 
		 if (array_key_exists('rahukaal',$input))
			{
				$validate['rahukaal']= "required";
			} 
		 if (array_key_exists('guliKaal',$input))
			{
				$validate['guliKaal']= "required";
			} 
		 if (array_key_exists('yamghant_kaal',$input))
			{
				$validate['yamghant_kaal']= "required";
			} 
		 if (array_key_exists('created_at',$input))
			{
				$validate['created_at']= "required";
			} 
		 if (array_key_exists('updated_at',$input))
			{
				$validate['updated_at']= "required";
			} 
		 
                          
                      } 
			$validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Advanced_panchang_sunrise_Model=new Advanced_panchang_sunrise_Model();
			$Advanced_panchang_sunrises = $Advanced_panchang_sunrise_Model->edit($Advanced_panchang_sunrise,$input);
			
            $Advanced_panchang_sunrise = Advanced_panchang_sunrise_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Advanced_panchang_sunrise_Resource($Advanced_panchang_sunrise), 'Advanced_panchang_sunrise updated successfully.');
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
        
        $Advanced_panchang_sunrise = Advanced_panchang_sunrise_Model::find($id);
  
        if (is_null($Advanced_panchang_sunrise)) {
            return $this->sendError('Value not found.');
        }else{
            $Advanced_panchang_sunrise_Model=new Advanced_panchang_sunrise_Model();
           $Advanced_panchang_sunrise_Model->remove($Advanced_panchang_sunrise);
            return $this->sendResponse([], 'Advanced_panchang_sunrise deleted successfully.');
        }
       
    }
}