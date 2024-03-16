<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\personal_access_tokens_Model;
use App\Models\Users_Model;
use Validator;
use App\Http\Resources\Users_Resource;
use App\Models\Wallet_Model;
use App\Models\Wallet_Winning_Model;
use App\Models\Game_rooms_Model;
class Users_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				
        $Users_Model=new Users_Model();
        
        $Userss = $Users_Model->index();
    
        return $this->sendResponse(Users_Resource::collection($Userss), 'Userss retrieved successfully.');
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
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Users_Model=new Users_Model();
        $rid = $Users_Model->store($input);
        $Users = Users_Model::find($rid);
        return $this->sendResponse(new Users_Resource($Users), 'Users created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Users_Model=new Users_Model();
        
        $Users = $Users_Model->show($id);
  
        if (is_null($Users)) {
            return $this->sendError('Users not found.');
        }
   
        return $this->sendResponse(new Users_Resource($Users), 'Users retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id="")
    {
		if($id==""){
			$token=request()->bearerToken();
			$personal_access_tokens_Model=new personal_access_tokens_Model();
			$id=$personal_access_tokens_Model->get_id($token);	
		}
        $Users = Users_Model::where("status","!=","D")->find($id['tokenable_id']);
		if($Users){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    
						
                       
		 
                          
                      $validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Users_Model=new Users_Model();
			$Userss = $Users_Model->edit($Users,$input);
			
            $Users = Users_Model::where("status","!=","D")->find($id)->first();
			return $this->sendResponse(new Users_Resource($Users), 'Users updated successfully.');
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
        
        $Users = Users_Model::find($id);
  
        if (is_null($Users)) {
            return $this->sendError('Value not found.');
        }else{
            $Users_Model=new Users_Model();
           $Users_Model->remove($Users);
            return $this->sendResponse([], 'Users deleted successfully.');
        }
       
    }
	public function totalRefered()
    {
		$token=request()->bearerToken();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
		$user_istId=$personal_access_tokens_Model->get_id($token);
        $Users_Model=new Users_Model();
        
        $data['totalRefered'] = $Users_Model->totalRefered($user_istId['tokenable_id']);      
        return $this->sendResponse($data, 'Wallet retrieved successfully.');
    }
	public function userSetting(){
		$token=request()->bearerToken();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
		$user_istId=$personal_access_tokens_Model->get_id($token);
        $Users_Model=new Users_Model();
		$Wallet_Model=new Wallet_Model();
		$Wallet_Winning_Model=new Wallet_Winning_Model();
		$Game_rooms_Model=new Game_rooms_Model();
		
        $data['referalEarnings'] = $Wallet_Winning_Model->referalEarnings($user_istId['tokenable_id']);      
        $data['total_game'] = $Game_rooms_Model->total_game($user_istId['tokenable_id']);      
        $data['wallet_winning'] = $Wallet_Winning_Model->net_winnigs($user_istId['tokenable_id']);      
        $data['total_penalty'] = $Wallet_Model->total_penalty($user_istId['tokenable_id']);     
        return $this->sendResponse($data, 'User wallet details retrieved successfully');
	}
	
}