<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Tamil_panchang_Model;
use Validator;
use App\Http\Resources\Tamil_panchang_Resource;
   
class Tamil_panchang_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tamil_panchang_Model=new Tamil_panchang_Model();
        
        $Tamil_panchangs = $Tamil_panchang_Model->index();
    
        return $this->sendResponse(Tamil_panchang_Resource::collection($Tamil_panchangs), 'Tamil_panchangs retrieved successfully.');
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
			'day' => 'required', 
			 'sunrise' => 'required', 
			 'sunset' => 'required', 
			 'moonrise' => 'required', 
			 'moonset' => 'required', 
			 'tithi' => 'required', 
			 'nakshatra' => 'required', 
			 'yog' => 'required', 
			 'karan' => 'required', 
			 'hindu_month' => 'required', 
			 'tamil_month' => 'required', 
			 'paksha' => 'required', 
			 'ritu' => 'required', 
			 'sun_sign' => 'required', 
			 'moon_sign' => 'required', 
			 'ayana' => 'required', 
			 'vikram_samvat' => 'required', 
			 'shaka_samvat' => 'required', 
			 'shaka_samvat_name' => 'required', 
			 'vkram_samvat_name' => 'required', 
			 'abhijit_muhurta' => 'required', 
			 'rahu_kaal' => 'required', 
			 'gulik_kaal' => 'required', 
			 'yamghant_kaal' => 'required', 
			 'dur_muhurtha' => 'required', 
			 'amrit_kaal' => 'required', 
			 'varjyam' => 'required', 
			 'anandadi_yog' => 'required', 
			 'user_id' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Tamil_panchang_Model=new Tamil_panchang_Model();
        $rid = $Tamil_panchang_Model->store($input);
        $Tamil_panchang = Tamil_panchang_Model::find($rid);
        return $this->sendResponse(new Tamil_panchang_Resource($Tamil_panchang), 'Tamil_panchang created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Tamil_panchang_Model=new Tamil_panchang_Model();
        
        $Tamil_panchang = $Tamil_panchang_Model->show($id);
  
        if (is_null($Tamil_panchang)) {
            return $this->sendError('Tamil_panchang not found.');
        }
   
        return $this->sendResponse(new Tamil_panchang_Resource($Tamil_panchang), 'Tamil_panchang retrieved successfully.');
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
        $Tamil_panchang = Tamil_panchang_Model::where("status","!=","D")->find($id);
		if($Tamil_panchang){
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
		 if (array_key_exists('sunrise',$input))
			{
				$validate['sunrise']= "required";
			} 
		 if (array_key_exists('sunset',$input))
			{
				$validate['sunset']= "required";
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
		 if (array_key_exists('hindu_month',$input))
			{
				$validate['hindu_month']= "required";
			} 
		 if (array_key_exists('tamil_month',$input))
			{
				$validate['tamil_month']= "required";
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
		 if (array_key_exists('abhijit_muhurta',$input))
			{
				$validate['abhijit_muhurta']= "required";
			} 
		 if (array_key_exists('rahu_kaal',$input))
			{
				$validate['rahu_kaal']= "required";
			} 
		 if (array_key_exists('gulik_kaal',$input))
			{
				$validate['gulik_kaal']= "required";
			} 
		 if (array_key_exists('yamghant_kaal',$input))
			{
				$validate['yamghant_kaal']= "required";
			} 
		 if (array_key_exists('dur_muhurtha',$input))
			{
				$validate['dur_muhurtha']= "required";
			} 
		 if (array_key_exists('amrit_kaal',$input))
			{
				$validate['amrit_kaal']= "required";
			} 
		 if (array_key_exists('varjyam',$input))
			{
				$validate['varjyam']= "required";
			} 
		 if (array_key_exists('anandadi_yog',$input))
			{
				$validate['anandadi_yog']= "required";
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
			$Tamil_panchang_Model=new Tamil_panchang_Model();
			$Tamil_panchangs = $Tamil_panchang_Model->edit($Tamil_panchang,$input);
			
            $Tamil_panchang = Tamil_panchang_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Tamil_panchang_Resource($Tamil_panchang), 'Tamil_panchang updated successfully.');
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
        
        $Tamil_panchang = Tamil_panchang_Model::find($id);
  
        if (is_null($Tamil_panchang)) {
            return $this->sendError('Value not found.');
        }else{
            $Tamil_panchang_Model=new Tamil_panchang_Model();
           $Tamil_panchang_Model->remove($Tamil_panchang);
            return $this->sendResponse([], 'Tamil_panchang deleted successfully.');
        }
       
    }
}