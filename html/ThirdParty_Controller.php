<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\personal_access_tokens_Model;
use Illuminate\Support\Facades\Auth;
use Validator;

class ThirdParty_Controller extends BaseController
{
    
    public function RoomCode() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/roomcode/bot/c?code=ludoguru",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-room-code-api.p.rapidapi.com",
                "X-RapidAPI-Key: 579aac9ca7mshb5110dc5ceee1b3p112b11jsndb2c69e1565e"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    public function Results(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/result?code=%3CREQUIRED%3E",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-room-code-api.p.rapidapi.com",
                "X-RapidAPI-Key: 579aac9ca7mshb5110dc5ceee1b3p112b11jsndb2c69e1565e"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    public function Quick(){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/roomcode/bot/q?code=Autobot",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-room-code-api.p.rapidapi.com",
                "X-RapidAPI-Key: 579aac9ca7mshb5110dc5ceee1b3p112b11jsndb2c69e1565e"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    public function popular(){
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ludo-king-room-code-api.p.rapidapi.com/roomcode/bot/p?code=Autobot",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ludo-king-room-code-api.p.rapidapi.com",
                "X-RapidAPI-Key: 579aac9ca7mshb5110dc5ceee1b3p112b11jsndb2c69e1565e"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
	public function otp($otp,$phone){
       
		$curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=SJ23GINadXcBqWjnyvAzk7UpwoVHi5Ke8ChuFtM16DLbEslZ9rsdByplHMn8JNVXPASUi941qG5OkKtj&route=otp&variables_values=$otp&flash=0&numbers=$phone",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
	}
    public function intialPayment(){
        # API URL
        $url = "https://1uni.infomattic.com/api_upi_pg.php";
        # Define the data
        $accountID = "AID_2308240802041604";                // Account ID
        $secret_key = "KEY_a7d9f421e8c21bbba4fbebe1c90c2b89";               // Secret Key
        $payment_id = "LG".date('Ymd').date('his').rand(1111, 9999);               // Payment ID (40 characters max)
        $payment_purpose = "Testing";          // Purpose (30 characters max)
        $buyer_name = "Rahul";               // Buyer name (30 characters max)
        $buyer_phone = "9569454126";              // Buyer phone number (10 digits)
        $buyer_email = "rahulrajkosta@gmail.com";              // Buyer email (50 characters max)
        $pay_amount = "1";               // Amount (1-100000)


        # Put the data into an array
        $data = [
            "accountID" => $accountID,
            "secret_key" => $secret_key,
            "payment_id" => $payment_id,
            "payment_purpose" => $payment_purpose,
            "buyer_name" => $buyer_name,
            "buyer_phone" => $buyer_phone,
            "buyer_email" => $buyer_email,
            "pay_amount" => $pay_amount
        ];

        # Initialiaze the curl
        $ch = curl_init($url);

        # Setup request to send json via POST.
        $payload = json_encode(["pay_request" => $data]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Send request.
        $result = curl_exec($ch);

        curl_close($ch);

        # Convert the json response into array
        $api_response = json_decode($result, true);
        return $api_response;
    }
    public function payment_status(Request $request){
         $input=json_decode($request->getContent(),true);
		# API URL
        $url = "https://1uni.infomattic.com/api_payment_status.php";

        # Define the data
        $accountID = "AID_2308240802041604";                // Account ID
        $secret_key = "KEY_a7d9f421e8c21bbba4fbebe1c90c2b89";               // Secret Key
		$payment_id=$input['payment_id'];

        # Put the data into an array
        $data = [
            "accountID" => $accountID,
            "secret_key" => $secret_key,
            "payment_id" => $payment_id
        ];

        # Initialiaze the curl
        $ch = curl_init($url);

        # Setup request to send json via POST.
        $payload = json_encode(["fetch_payment" => $data]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Send request.
        $result = curl_exec($ch);

        curl_close($ch);

        # Convert the json response into array
        curl_close($ch);

        # Convert the json response into array
        $api_response = json_decode($result, true);
        return $api_response;
    }
    public function webhook(){
        header("Content-Type:application/json");
        $webhook_data = json_decode(file_get_contents('php://input'), true);
        if (empty($webhook_data)) {
            # If empty response received from the API
        } else {
            # If valid response received from API
            $txn_date = $webhook_data['response']['txn_date'];
            $txn_time = $webhook_data['response']['txn_time'];
            $merchant_id = $webhook_data['response']['merchant_id'];
            $pay_amount = $webhook_data['response']['pay_amount'];
            $pay_name = $webhook_data['response']['pay_name'];
            $pay_phone = $webhook_data['response']['pay_phone'];
            $pay_email = $webhook_data['response']['pay_email'];
            $payment_id = $webhook_data['response']['payment_id'];
            $payment_mode = $webhook_data['response']['payment_mode'];
            $payment_handle = $webhook_data['response']['payment_handle'];
            $payment_hash = $webhook_data['response']['payment_hash'];
            $utr = $webhook_data['response']['utr'];
            $status = $webhook_data['response']['status'];

            # Define the account id
            $accountID = "AID_2308240802041604"; 
            # Define the secret key
            $secret_key = "KEY_a7d9f421e8c21bbba4fbebe1c90c2b89"; 

            # Compute the payment hash
            $payment_hash_compute = md5($secret_key . $accountID . $txn_date . $txn_time . $pay_amount);

            # Validate the payment hash
            if ($payment_hash_compute == $payment_hash) {
                # If payment hash match, mark the payment success
				file_put_contents("test.txt","Hello World. Testing! $payment_hash_compute");
            } else {
                # If payment hash mismatch, suspicious payment
            }
        }
    }
    public function intial_bank_payout(Request $request){
        $input=json_decode($request->getContent(),true);
		# API URL
        $url = "https://1uni.infomattic.com/api_bank_payout.php";

        # Define the data
        $accountID = "AID_2308240802041604";                // Account ID
        $secret_key = "KEY_a7d9f421e8c21bbba4fbebe1c90c2b89"; 
        $payout_id = "LG".date('Ymd').date('his').rand(1111, 9999);                  // Payout ID (40 characters max)
        $account_no = $input['phone_no'];                 // Account number (20 characters max)
        $ifsc = $input['ifsc_code'];                       // IFSC (11 characters max)
        $payout_amount = $input['amount'];              // Amount (10-100000)


        # Put the data into an array
        $data = [
            "accountID" => $accountID,
            "secret_key" => $secret_key,
            "payout_id" => $payout_id,
            "account_no" => $account_no,
            "ifsc" => $ifsc,
            "payout_amount" => $payout_amount
        ];

        # Initialiaze the curl
        $ch = curl_init($url);

        # Setup request to send json via POST.
        $payload = json_encode(["payout_request" => $data]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Send request.
        $result = curl_exec($ch);

        curl_close($ch);

        # Convert the json response into array
        $api_response = json_decode($result, true);
        return $api_response;
    }
    public function initial_upi_payout(Request $request){
        $input=json_decode($request->getContent(),true);
		# API URL
        $url = "https://1uni.infomattic.com/api_upi_payout.php";

        # Define the data
        $accountID = "AID_2308240802041604";                // Account ID
        $secret_key = "KEY_a7d9f421e8c21bbba4fbebe1c90c2b89";               // Secret Key
        $payout_id = "LG".date('Ymd').date('his').rand(1111, 9999);                 // Payout ID (40 characters max)
        $upi_vpa = $input['upi_id'];                   // Upi id (50 characters max)
        $payout_amount = $input['amount'];             // Amount (10-100000)


        # Put the data into an array
        $data = [
            "accountID" => $accountID,
            "secret_key" => $secret_key,
            "payout_id" => $payout_id,
            "upi_vpa" => $upi_vpa,
            "payout_amount" => $payout_amount
        ];
        # Initialiaze the curl
        $ch = curl_init($url);

        # Setup request to send json via POST.
        $payload = json_encode(["payout_request" => $data]);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);

        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # Send request.
        $result = curl_exec($ch);

        curl_close($ch);

        # Convert the json response into array
        return $api_response = json_decode($result, true);
    }
    public function return_url(Request $request){
		header("Content-Type:application/json");
		$webhook_data = json_decode(file_get_contents('php://input'), true);
		if(!empty($webhook_data)){
			echo "Data received redirecting...";
			header('location:https://main-six-ashy.vercel.app/transaction');
		}else{
			echo "Data not received redirecting";
			header('location:https://main-six-ashy.vercel.app/transaction');
		}
    }
}