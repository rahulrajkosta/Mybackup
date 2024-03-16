<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Panalty_Model;
use App\Models\Users_Model;
use App\Models\Wallet_Model;
use Validator;
use App\Http\Resources\Panalty_Resource;
use App\Models\personal_access_tokens_Model;

class Panalty_Controller extends BaseController
{
    ////// Multiple Account////
	public function multipleAccount($phone_no){
		$Users_Model= new Users_Model();
		$acounts=$Users_Model->showByPhone($phone_no);
		if(count($acounts)>0){
			foreach($acounts as $acount)
			$Wallet_Model = new Wallet_Model();
			echo $Wallet_Model->sum_in($acount['id']);
			echo $Wallet_Model->sum_out($acount['id']);
			$ttamount=$Wallet_Model->sum_in($acount['id'])-$Wallet_Model->sum_out($acount['id']);
			echo $ttamount;
		}
	}
	////// 5% charge for Amount Withdrow/////
	
	//////wrong update panalty /////
	
	/////Abusing Panalty 25 /////
	
	/////
}