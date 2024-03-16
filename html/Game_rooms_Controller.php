<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Game_rooms_Model;
use App\Models\Users_Model;
use Validator;
use App\Http\Resources\Game_rooms_Resource;
use App\Http\Resources\Users_Resource;
use App\Http\Controllers\API\ThirdParty_Controller;
use App\Models\personal_access_tokens_Model;
use App\Models\Wallet_Winning_Model;
use App\Models\Wallet_Model;
use App\Models\Admin_Wallet_Model;
use File; 
use App\Http\Controllers\API\Wallet_Controller;
use App\Http\Controllers\API\Wallet_Winning_Controller;

class Game_rooms_Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Game_rooms_Model=new Game_rooms_Model();
        
        $Game_roomss = $Game_rooms_Model->index();
    
        return $this->sendResponse(Game_rooms_Resource::collection($Game_roomss), 'Game_roomss retrieved successfully.');
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
			 'server_result' => 'required', 
			 'user_i' => 'required', 
			 'user_2' => 'required', 
			 'u_1_result' => 'required', 
			 'u_2_result' => 'required', 
			 'u_1_screen' => 'required', 
			 'u_2_screen' => 'required', 
			 'dispute' => 'required', 
			 'admin_feedBack' => 'required', 
			  
			 
        ]);
    
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $Game_rooms_Model=new Game_rooms_Model();
        $rid = $Game_rooms_Model->store($input);
        $Game_rooms = Game_rooms_Model::find($rid);
        return $this->sendResponse(new Game_rooms_Resource($Game_rooms), 'Game_rooms created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Game_rooms_Model=new Game_rooms_Model();
        
        $Game_rooms = $Game_rooms_Model->show($id);
  
        if (is_null($Game_rooms)) {
            return $this->sendError('Game_rooms not found.');
        }
   
        return $this->sendResponse(new Game_rooms_Resource($Game_rooms), 'Game_rooms retrieved successfully.');
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
        $Game_rooms = Game_rooms_Model::where("status","!=","D")->find($id);
		if($Game_rooms){
			$input = json_decode($request->getContent(),true);
            $validate=array();
                    
						
                       
		 if (array_key_exists('server_result',$input))
			{
				$validate['server_result']= "required";
			} 
		 if (array_key_exists('user_i',$input))
			{
				$validate['user_i']= "required";
			} 
		 if (array_key_exists('user_2',$input))
			{
				$validate['user_2']= "required";
			} 
		 if (array_key_exists('u_1_result',$input))
			{
				$validate['u_1_result']= "required";
			} 
		 if (array_key_exists('u_2_result',$input))
			{
				$validate['u_2_result']= "required";
			} 
		 if (array_key_exists('u_1_screen',$input))
			{
				$validate['u_1_screen']= "required";
			} 
		 if (array_key_exists('u_2_screen',$input))
			{
				$validate['u_2_screen']= "required";
			} 
		 if (array_key_exists('dispute',$input))
			{
				$validate['dispute']= "required";
			} 
		 if (array_key_exists('admin_feedBack',$input))
			{
				$validate['admin_feedBack']= "required";
			} 
		 
                          
                      $validator = Validator::make($input,$validate); 
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
			$Game_rooms_Model=new Game_rooms_Model();
			$Game_roomss = $Game_rooms_Model->edit($Game_rooms,$input);
			
            $Game_rooms = Game_rooms_Model::where("status","!=","D")->find($id);
			return $this->sendResponse(new Game_rooms_Resource($Game_rooms), 'Game_rooms updated successfully.');
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
        
        $Game_rooms = Game_rooms_Model::find($id);
  
        if (is_null($Game_rooms)) {
            return $this->sendError('Value not found.');
        }else{
            $Game_rooms_Model=new Game_rooms_Model();
           $Game_rooms_Model->remove($Game_rooms);
            return $this->sendResponse([], 'Game_rooms deleted successfully.');
        }
       
    }
    public function get_room(Request $request){   
        $token=request()->bearerToken();
        $Game_rooms_Model=new Game_rooms_Model();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
		$user_second=$personal_access_tokens_Model->get_id($token);		
        $user=new Users_Model();
        $input = json_decode($request->getContent(),true);
		$findExitContest = $Game_rooms_Model->ifActiveRoom($input['contest_fee'],$user_second['tokenable_id']);
		if(!empty($findExitContest)){
				$success['room_code']=$findExitContest['room_code'];
				$user_ist=$user->show($findExitContest['user_i']);
				$user_second['tokenable_id']=$user->show($findExitContest['user_2']);
				if(!empty($user_ist)){
					$success['user_ist']=new Users_Resource($user_ist);
				}else{
					$success['user_ist']=null;
				}
				if(!empty($user_second['tokenable_id'])){
					$success['user_second']=new Users_Resource($user_second['tokenable_id']);
				}else{
					$success['user_second']=null;
				}
				
			return $this->sendError('Previous contest result is pending ',$success);
		}else{
			$rid = $Game_rooms_Model->get_room($input['contest_fee'],$user_second);
			$roomcode=array();
			$Wallet_Controller= new Wallet_Controller();
			$ttl=$Wallet_Controller->grantSum('game');
			if(($ttl['sumin']-$ttl['sumout'])<$input['contest_fee']){
				return $this->sendError('Insuficiant Funds');
				exit();
			}
			if(!empty($rid)){
				$user_ist=$user->show($rid['user_i']);
				$user_second=$user->show($user_second['tokenable_id']);
				$data=array('user_2'=>$user_second['id']);
				$set_room=$Game_rooms_Model->set_room($rid['room_code'],$data);
				$success['room_code']=$rid['room_code'];
				$success['user_ist']=new Users_Resource($user_ist);
				$success['user_second']=new Users_Resource($user_second);
			}else{
				$ThirdParty_Controller=new ThirdParty_Controller();
				$room_code=$ThirdParty_Controller->RoomCode();
				$roomcode=json_decode($room_code,true);
				$personal_access_tokens_Model=new personal_access_tokens_Model();
				$user_istId=$personal_access_tokens_Model->get_id($token);
				$Game_rooms_Model=new Game_rooms_Model();
				$Game_rooms['room_code']=$roomcode['roomcode'];
				$Game_rooms['user_i']=$user_istId['tokenable_id'];
				$Game_rooms['contest_fee']=$input['contest_fee'];
				$Game_rooms_Model->store($Game_rooms);
				$success['user_details']=new Users_Resource($user->show($user_istId['tokenable_id']));
				$Wallet_Winning_Controller=new Wallet_Winning_Controller();
				$winning_sum=$Wallet_Winning_Controller->sum('game');
				$winnings=$winning_sum['sumin']-$winning_sum['sumout'];
				if($winnings>=$input['contest_fee']){
					$Wallet_Winning_Model=new Wallet_Winning_Model();
					$dta=['user_id'=>$user_second['tokenable_id'],'pay_amnt'=>$input['contest_fee'],'in_out'=>'O','txn_id'=>'LG'.$roomcode['roomcode'],'payment_status'=>'success'];
					$transaction=$Wallet_Winning_Model->store($dta);
				}elseif($winnings<$input['contest_fee']){
					$amnWin=$input['contest_fee']-$winnings;
					if($winnings>0){
						$Wallet_Winning_Model=new Wallet_Winning_Model();
						$wwdata=['user_id'=>$user_second['tokenable_id'],'pay_amnt'=>$winnings,'in_out'=>'O','txn_id'=>'LG'.$roomcode['roomcode'],'payment_status'=>'success'];
						$transactionWW=$Wallet_Winning_Model->store($wwdata);
					}
					
					$Wallet_Model=new Wallet_Model();
					$wdata=['user_id'=>$user_second['tokenable_id'],'pay_amnt'=>$amnWin,'in_out'=>'O','txn_id'=>'LG'.$roomcode['roomcode'],'payment_status'=>'success'];
					$transactionW=$Wallet_Model->store($wdata);
				}
				
				$success['room_code']=$roomcode['roomcode'];
			}
			
			return $this->sendResponse($success, 'Game_rooms created successfully.');
		}
    }
	public function open_room(Request $request){
		$token=request()->bearerToken();
        $Game_rooms_Model=new Game_rooms_Model();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
		$user_second=$personal_access_tokens_Model->get_id($token);	
        $user=new Users_Model();
        $input = json_decode($request->getContent(),true);
		$findExitContest = $Game_rooms_Model->ifActiveRoom(null,$user_second['tokenable_id']);
		if(!empty($findExitContest)){
			return $this->sendResponse($findExitContest, 'Your Open Contest Fetched Successfully.');
		}else{
			return $this->sendResponse(["room closed"], '');
		}
	}
	public function update_result(Request $request){
		
		$token=request()->bearerToken();
		$Game_rooms_Model =new Game_rooms_Model();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
        $user_istId=$personal_access_tokens_Model->get_id($token);
		$fileName="";
		if(!empty($request->screenshot)){
			$fileName = $user_istId['tokenable_id'].'_'.time() . '.' . $request->screenshot->extension();
			$path = public_path('/uploads/'.$user_istId['tokenable_id']);
			File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
			$request->screenshot->move($path, $fileName);
		}
		
		$room_code=$request->room_code;
		$result=$request->result;
		$input=array();
		$input['room_code']=$room_code;
		$input['result']=$result;
		
		$validator = Validator::make($input,[
            'result' => 'required', 
            'room_code' => 'required', 
	        ]);
	   
			if($validator->fails()){
				return $this->sendError('Validation Error.', $validator->errors());       
			}
		$istuser = $Game_rooms_Model->find_user1($user_istId['tokenable_id'],$room_code);
		$second = $Game_rooms_Model->find_user2($user_istId['tokenable_id'],$room_code);
		
		if($istuser){
			$upd=array('u_1_result'=>$result,'u_1_screen'=>$fileName);
			$data= $Game_rooms_Model->update_result($room_code,$upd);
			if($data){
				$this->payment($user_istId['tokenable_id'],$room_code);
				return $this->sendResponse($data, 'Game_rooms updated successfully.');
			}
			
		}elseif($second){
			$upd=array('u_2_result'=>$result,'u_2_screen'=>$fileName);
			$data= $Game_rooms_Model->update_result($room_code,$upd);
			if($data){
				$this->payment($user_istId['tokenable_id'],$room_code);
				return $this->sendResponse($data, 'Game_rooms updated successfully.');
			}
			
		}
        
        
    }
	public function total_game(){
		$token=request()->bearerToken();
		$Game_rooms_Model =new Game_rooms_Model();
		$personal_access_tokens_Model=new personal_access_tokens_Model();
        $user_istId=$personal_access_tokens_Model->get_id($token);
		$total_game=$Game_rooms_Model->total_game($user_istId['tokenable_id']);
		echo $total_game;
		
	}
	public function payment($id,$roomcode){
		$Game_rooms_Model =new Game_rooms_Model();
		$Wallet_Winning_Model = new Wallet_Winning_Model();
		$Admin_Wallet_Model = new Admin_Wallet_Model();
		$payment=$Game_rooms_Model->getResult($id,$roomcode);
		if((($payment['u_1_result']=='win') && ($payment['u_2_result']=='lost')) || (($payment['u_1_result']=='lost') && ($payment['u_2_result']=='win'))){
			if($payment['u_1_result']=='win'){
				$actAmount=$payment['contest_fee']*95*2/100;
				$commintionAmount=$payment['contest_fee']*2-$actAmount;
				$Users_Model=new Users_Model();
				$isreferer=$Users_Model->show($payment['user_i']);
				if(!empty($isreferer)){
					$commintionAmount=$payment['contest_fee']*2-$actAmount;
					$referalAmount=$commintionAmount*40/100;
					$commintionAmount=$commintionAmount-$referalAmount;
					$rdd=['user_id'=>$isreferer['refered_id'],'pay_amnt'=>$referalAmount,'in_out'=>'IN','txn_id'=>'RFLG'.$payment['room_code'],'payment_status'=>'success'];
					$insert=$Wallet_Winning_Model->store($rdd);
				}
				$dta=['user_id'=>$payment['user_i'],'pay_amnt'=>$actAmount,'in_out'=>'IN','txn_id'=>'LG'.$payment['room_code'],'payment_status'=>'success'];
				$find=$Wallet_Winning_Model->check_winning($dta);
				if($find==0){
					$insert=$Wallet_Winning_Model->store($dta);
					$dta['pay_amnt']=$commintionAmount;
					$insert=$Admin_Wallet_Model->store($dta);
				}
			}elseif($payment['u_2_result']=='win'){
				$actAmount=$payment['contest_fee']*95*2/100;
				$commintionAmount=$payment['contest_fee']*2-$actAmount;
				$Users_Model=new Users_Model();
				$isreferer=$Users_Model->show($payment['user_2']);
				if(!empty($isreferer)){
					$commintionAmount=$payment['contest_fee']*2-$actAmount;
					$referalAmount=$commintionAmount*40/100;
					$commintionAmount=$commintionAmount-$referalAmount;
					$rdd=['user_id'=>$isreferer['refered_id'],'pay_amnt'=>$referalAmount,'in_out'=>'IN','txn_id'=>'RFLG'.$payment['room_code'],'payment_status'=>'success'];
					$insert=$Wallet_Winning_Model->store($rdd);
				}
				$dta=['user_id'=>$payment['user_2'],'pay_amnt'=>$actAmount,'in_out'=>'IN','txn_id'=>'LG'.$payment['room_code'],'payment_status'=>'success'];
				$Wallet_Winning_Model = new Wallet_Winning_Model();
				$Admin_Wallet_Model = new Admin_Wallet_Model();
				$find=$Wallet_Winning_Model->check_winning($dta);
				if($find==0){
					$insert=$Wallet_Winning_Model->store($dta);
					$dta['pay_amnt']=$commintionAmount;
					$insert=$Admin_Wallet_Model->store($dta);
				}
			}
		}elseif((($payment['u_1_result']=='cancel') && ($payment['u_2_result']=='')) || (($payment['u_1_result']=='') && ($payment['u_2_result']=='cancel')) || (($payment['u_1_result']=='cancel') && ($payment['u_2_result']=='cancel')) ){
				if($payment['u_1_result']=='cancel'){
					$dta=['user_id'=>$payment['user_i'],'pay_amnt'=>$payment['contest_fee'],'in_out'=>'IN','txn_id'=>'LG'.$payment['room_code'],'payment_status'=>'success'];
					$Wallet_Winning_Model = new Wallet_Winning_Model();
					$Admin_Wallet_Model = new Admin_Wallet_Model();
					$find=$Wallet_Winning_Model->check_winning($dta);
					if($find==0){
						$insert=$Wallet_Winning_Model->store($dta);
						// $dta['pay_amnt']=$commintionAmount;
						// $insert=$Admin_Wallet_Model->store($dta);
					}
				}elseif($payment['u_2_result']=='cancel'){
					$dta=['user_id'=>$payment['user_2'],'pay_amnt'=>$payment['contest_fee'],'in_out'=>'IN','txn_id'=>'LG'.$payment['room_code'],'payment_status'=>'success'];
					$Wallet_Winning_Model = new Wallet_Winning_Model();
					$Admin_Wallet_Model = new Admin_Wallet_Model();
					$find=$Wallet_Winning_Model->check_winning($dta);
					if($find==0){
						$insert=$Wallet_Winning_Model->store($dta);
						// $dta['pay_amnt']=$commintionAmount;
						// $insert=$Admin_Wallet_Model->store($dta);
					}
				}
				
				
		}elseif((($payment['u_1_result']=='win') && ($payment['u_2_result']=='win')) || (($payment['u_1_result']=='lost') && ($payment['u_2_result']=='lost'))){
			$dta=['user_id'=>$payment['user_i']."_".$payment['user_2'],'pay_amnt'=>$payment['contest_fee']*2,'in_out'=>'IN','txn_id'=>'LG'.$payment['room_code'],'payment_status'=>'success'];
				$Admin_Wallet_Model = new Admin_Wallet_Model();
				$find=$Admin_Wallet_Model->check_winning($dta);
				if($find==0){
					$insert=$Admin_Wallet_Model->store($dta);
				}
		}
	}
	
}