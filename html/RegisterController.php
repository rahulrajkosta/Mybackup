<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\personal_access_tokens_Model;
use Illuminate\Support\Facades\Auth;
use Validator; 
use App\Http\Controllers\API\ThirdParty_Controller;
class RegisterController extends BaseController
{
    
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $input = json_decode($request->getContent(),true);
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone_no' => 'required',
            'adhar_no' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
       // $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token=$user->createToken('MyApp')->plainTextToken;
        $personal_access_tokens_Model=new personal_access_tokens_Model();
        $otp_array=array('otp'=>rand(1111,9999));
		$ThirdParty_Controller=new ThirdParty_Controller();
		$ThirdParty_Controller->otp($otp_array['otp'],$input['phone_no']);
        $personal_access_tokens_Model->set_opt($token,$otp_array);
        $success['token'] =  $token;
        $success['name'] =  $user->name;
        //$success['otp']=$otp_array['otp'];
   
        return $this->sendResponse($success, 'User register successfully.');
    }
    /**
     * OTP api
     * 
     */

    public function otp_validate(Request $request){
        $token=request()->bearerToken();
        $input = json_decode($request->getContent(),true);
        $validator = Validator::make($input, [
            'otp' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $personal_access_tokens_Model=new personal_access_tokens_Model();
        $otp_validate=$personal_access_tokens_Model->otp_validate($token,$input);
        if($otp_validate){
            return $this->sendResponse($input, 'OTP validated');
        }else{
            return $this->sendError('Unauthorised.', ['error'=>'Invalid OTP']);
        }
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    { 
        $User= new User();
       
        $input = json_decode($request->getContent(),true);
		$validator = Validator::make($input, [
            'phone_no' => 'required|min:10|max:10'
        ]);
        
        if($validator->fails()){
            return $this->sendError('Validation Error.',['Please check your phone no, its not in a valid format.']);     
        }
        
		try{
            $user= User::where('phone_no', $input['phone_no'])->first();
            if(Auth::loginUsingId($user->id)){ 
                $user = Auth::user();
                $token =  $user->createToken('MyApp')->plainTextToken;   
                $personal_access_tokens_Model=new personal_access_tokens_Model();
                $otp_array=array('otp'=>rand(1111,9999));
				$ThirdParty_Controller=new ThirdParty_Controller();
				$ThirdParty_Controller->otp($otp_array['otp'],$input['phone_no']);
                $personal_access_tokens_Model->set_opt($token,$otp_array); 
                $success['token']=$token;   
               // $success['otp']=$otp_array['otp'];      
                return $this->sendResponse($success, 'OTP Send successfully ');
                
            } 
		}
        catch (\Exception $exception) {			
				 return $this->sendError("Unauthorised",['This Mobile NO does not exist']);
		
        }
    }
}