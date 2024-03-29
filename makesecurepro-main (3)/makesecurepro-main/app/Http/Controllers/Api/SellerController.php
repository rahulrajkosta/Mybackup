<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\Controller;

use App\User;

use App\UserLogin;

use App\AppVersion;

use App\State;

use App\SubscriptionHistory;

use App\City;

use App\UserOtp;

use App\Transaction;

use App\Chats;

use App\AssignCoupon;

use App\Coupon;

use App\MobileDetails;

use App\UserKyc;

use App\Admin;

use Validator;

use JWTAuth;

use Str;

use Tymon\JWTAuth\Exceptions\JWTException;

use JWT;

use Razorpay\Api\Api;

use Mail;

use Storage;

use PDF;

use Hash;

use App\Helpers\CustomHelper;

use DB;



class SellerController extends Controller

{



    public function __construct()

    {

        $this->user = new User;

        date_default_timezone_set("Asia/Kolkata");

        $this->url = env('BASE_URL');
    }



    public function login(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'username' => 'required',

            'password' => 'required'

        ]);

        $token = null;

        $qr_code = [];

        if ($validator->fails()) {

            return response()->json([

                'result' => 'false',

                'message' => json_encode($validator->errors()),

                'token' => $token,

            ], 400);
        }

        // config()->set( 'auth.defaults.guard', 'admin' );

        // \Config::set('jwt.user', 'App\Admin'); 

        // \Config::set('auth.providers.coupons.model', \App\Admin::class);

        auth()->shouldUse('admin');



        $credentials = $request->only('username', 'password');

        try {

            if (!$token = auth('admins')->attempt($credentials)) {

                return response()->json([

                    'result' => 'false',

                    'message' => 'invalid_credentials',

                    'token' => $token,

                ], 401);
            }
        } catch (JWTException $e) {

            return response()->json([

                'result' => 'false',

                'message' => 'something went wrong',

                'token' => $token,

            ], 500);
        }

        $user = Admin::where('username', $request->username)->first();
        $user->password_change = 0;
        $user->device_token = $request->device_token??'';
        $user->save();


        $qr_code = DB::table('qr_code')->first();
        $qr_data = '{
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_COMPONENT_NAME": "com.google.android.apps.work.clouddpc/.receivers.CloudDeviceAdminReceiver",
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_SIGNATURE_CHECKSUM": "I5YvS0O5hXY46mb01BlRjq4oJJGs2kuUcHvVkAPEXlg",
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_PACKAGE_DOWNLOAD_LOCATION": "https://play.google.com/managed/downloadManagingApp?identifier=setup",
            "android.app.extra.PROVISIONING_ADMIN_EXTRAS_BUNDLE": {
                "com.google.android.apps.work.clouddpc.EXTRA_ENROLLMENT_TOKEN": "YPXLFHAZKCHQSGXUGKUJBZKM"
            }
        }';

        return response()->json([

            'result' => 'success',

            'message' => 'Successfully login',

            'token' => $token,

            'qr_code' => $qr_code,
            'qr_data' => json_decode($qr_data),

        ], 200);
    }





    public function banners(Request $request)
    {

        $banners = DB::table('banners')->where('status', 1)->where('is_delete', 0)->get();

        if (!empty($banners)) {

            foreach ($banners as $ban) {



                $ban->city_id = (string)$ban->city_id;



                if ($ban->type == 'video') {

                    $ban->image = url('storage/app/public/banners/' . $ban->image);
                } else {

                    $ban->image = url('storage/app/public/banners/' . $ban->image);
                }
            }
        }

        return response()->json([

            'result' => 'success',

            'message' => 'Successfully ',

            'banners' => $banners,

        ], 200);
    }










    public function check_version(Request $request)
    {

        $version = DB::table('app_versions')->first();

        return response()->json([

            'result' => 'success',

            'message' => 'Successfully ',

            'version' => $version,

        ], 200);
    }


    public function check_phone_status(Request $request)
    {
        DB::table('new')->insert(['data' => json_encode($request->toArray())]);
        $validator = Validator::make($request->all(), [
            'imei_no' => 'required',
            'imei_no2' => 'required',
            'serial_no' => 'required',
        ]);


        $this->get_devices($request->serial_no,$request->imei_no);


        $data = null;
        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'message' => json_encode($validator->errors()),
            ], 400);
        }
        $mobile_details = MobileDetails::where('imei_no', $request->imei_no)->orWhere('imei_no2', $request->imei_no2)->latest()->limit(1)->get();
        if (!empty($mobile_details) && count($mobile_details) > 0) {
            foreach ($mobile_details as $mobile_detail) {

                $dbArray = [];
                $dbArray['serial_no'] = $request->serial_no ?? '';
                $dbArray['android_version'] = $request->android_version ?? '';
                $dbArray['version'] = $request->version ?? '';
                $dbArray['phone_model'] = $request->phone_model ?? '';
                $dbArray['mobile_name'] = $request->mobile_name ?? '';

                MobileDetails::where('id', $mobile_detail->id)->update($dbArray);


                if ($mobile_detail->app_status == 'remove') {
                    $this->send_remove_notification($request->device_id);
                } else {
                    if ($mobile_detail->phone_status == 'locked') {


                        if(!empty($mobile_detail)){
                            MobileDetails::where('id', $mobile_detail->id)->update(['phone_status' => 'locked', 'app_status' => '']);

                        }
                        $type = 'locked';
                        $device_token = $request->device_token??'';

                        $title = 'Phone status changed';
                        $seller_name = '';
                        $seller_contact = '';
                        $user_number = '';
                        $coupon_code = '';

                        $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $type . ' '];

                        $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number, $coupon_code);
                        if(!empty($mobile_details->device_id)){
                            $this->send_lock_notification($request->device_id);
                        }
                    }
                    if ($mobile_detail->phone_status == 'unlock') {

                        /////Remove/////    
                        MobileDetails::where('id', $mobile_detail->id)->update(['phone_status' => 'unlock', 'app_status' => '','device_token'=>$request->device_token]);
                        $type = 'unlock';
                        $device_token = $request->device_token??'';

                        $title = 'Phone status changed';
                        $seller_name = '';
                        $seller_contact = '';
                        $user_number = '';
                        $coupon_code = '';

                        $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $type . ' '];

                        $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number, $coupon_code);
                        if(!empty($mobile_details->device_id)){
                            $this->send_unlock_notification($request->device_id);
                        }

                        // $this->send_remove_notification($request->serial_no);
                        // $this->send_unlock_notification($request->serial_no);

                    }
                }
            }
        } else {
            $dbArray = [];
            $dbArray['imei_no'] = $request->imei_no ?? '';
            $dbArray['imei_no2'] = $request->imei_no2 ?? '';
            $dbArray['serial_no'] = $request->serial_no ?? '';
            $dbArray['phone_status'] = 'unlock';
            /////Remove/////
            $mobile_details = MobileDetails::where('serial_no',$request->serial_no)->latest()->first();
            $this->send_remove_notification($mobile_details->device_id);
            MobileDetails::insert($dbArray);
        }
        return response()->json([
            'result' => true,
            'message' => "successfully",
        ], 200);
    }


    public function fetch_device_ids(){
        $mobile_details = MobileDetails::select('imei_no','serial_no')->get();
        foreach($mobile_details as $mob){
            $this->get_devices($mob->serial_no,$mob->imei_no);
        }
    }


    public function get_devices($serial_no,$imei_no){

        $mobile_details = MobileDetails::count();

         $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://e-mimic.com/get_device_id?serialNumber='.$serial_no.'&total_count=200',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        // $response = json_decode($response);
        $response = implode(",", $response);
       

        // var_dump($response);
        // die;
       
        MobileDetails::where('imei_no',$imei_no)->update(['device_id'=>$response]);

    }


    public function send_lock_notification($serial_no)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://e-mimic.com/lockdevice_2?devices_id=' . $serial_no,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    public function send_unlock_notification($serial_no)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://e-mimic.com/unlockdevice_2?devices_id=' . $serial_no,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function send_remove_notification($serial_no)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://e-mimic.com/remove_app_2?devices_id=' . $serial_no,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }


    public function bearerToken($request)

    {

        $header = $request->header('Authorization', '');

        if (Str::startsWith($header, 'Bearer ')) {

            return Str::substr($header, 7);
        }
    }

    public function user_list_new(Request $request)
    {

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);



        $validator = Validator::make($request->all(), [

            'token' => 'required',

        ]);

        $users = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'failure',

                'message' => json_encode($validator->errors()),

                'users' => $users,

            ], 400);
        }

        $user = auth('admins')->user();

        if (empty($user)) {

            return response()->json([

                'result' => "failure",

                'message' => 'Token Not Available',

                'users' => $user,

            ], 401);
        }

        if ($user->password_change == 1) {
            return response()->json([

                'result' => "failure",

                'message' => 'Token Not Available',

                'users' => $user,

            ], 401);
        }

        $old_password = $user->password_value ?? '';
        $admins = Admin::where('id', $user->id)->first();
        $new_password = $admins->password_value ?? '';

        if ($old_password != $new_password) {
            return response()->json([
                'result' => "failure",
                'message' => 'Token Not Available',
                'users' => null,
            ], 401);
        }






        $search = $request->search ?? '';

        $sort_by = $request->sort_by ?? '';

        // echo $user->id;

        $mobile_details = MobileDetails::select('id', 'user_id', 'user_name as name', 'user_phone as mobile', 'user_image as image', 'phone_status', 'image_version');

        if (!empty($search)) {
            $mobile_details->where(function ($query) use ($search) {
                $query->where('user_name', 'like', '%' . $search . '%');
                $query->orWhere('user_phone', 'like', '%' . $search . '%');
            });
        }

        if (!empty($sort_by)) {

            if ($sort_by == 'removed') {

                $mobile_details->where('phone_status', 'remove');
            }

            if ($sort_by == 'locked') {

                $mobile_details->where('phone_status', 'locked');
            }

            if ($sort_by == 'unlocked') {

                $mobile_details->where('phone_status', 'unlock');
            }

            if ($sort_by == 'removedByUser') {

                $mobile_details->where('phone_status', 'removedByUser');
            }
        }


        $mobile_details->where('coupon_parent_id', $user->id);
        $allusers = [];

        $mobile_details = $mobile_details->latest()->paginate(30);

        if (!empty($mobile_details)) {

            foreach ($mobile_details as $mob) {
                $mob->id = $mob->user_id;
                if ($mob->image_version == 1) {
                    $image = url('public/storage/user/' . $mob->image);
                } else {
                    $image = url('public/storage/user/' . $mob->image);
                }
                $mob->image = $image;
                $allusers[] = $mob;
            }
        }



        $users_count = $mobile_details->total();



        return response()->json([

            'result' => "success",

            'message' => 'Successfully',

            'users' => $allusers,

            'count' => $users_count,

            'total_pages' => 1,

        ], 200);
    }





    public function getseller_coupons_new(Request $request)
    {

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);



        $validator = Validator::make($request->all(), [

            'token' => 'required',

        ]);

        $coupons = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'failure',

                'message' => json_encode($validator->errors()),

                'coupons' => $coupons,

            ], 400);
        }

        $user = auth('admins')->user();

        if (empty($user)) {

            return response()->json([

                'result' => "failure",

                'message' => 'Token Not Available',

                'coupons' => $coupons,

            ], 401);
        }

        if ($user->password_change == 1) {
            return response()->json([

                'result' => "failure",

                'message' => 'Token Not Available',

                'users' => $user,

            ], 401);
        }

        $old_password = $user->password_value ?? '';
        $admins = Admin::where('id', $user->id)->first();
        $new_password = $admins->password_value ?? '';
        if ($old_password != $new_password) {
            return response()->json([
                'result' => "failure",
                'message' => 'Token Not Available',
                'coupons' => null,
            ], 401);
        }
        $coupons = [];

        // echo $user->id;

        // if($request->page == 1){

        $allcoupons = AssignCoupon::select('id', 'is_used', 'is_view', 'coupon_id')->where('child_id', $user->id)->where('is_used', 0)->orderBy('coupon_id');

        $allcoupons = $allcoupons->paginate(15);



        // }



        if (!empty($allcoupons)) {

            foreach ($allcoupons as $coupon) {



                $coupon_data = Coupon::where('id', $coupon->coupon_id)->first();

                $coupon->coupon_code = $coupon_data->coupon_code ?? '';

                $seller_viewed = 'N';

                if ($coupon->is_view == 1) {

                    $seller_viewed = 'Y';
                }

                $coupon->couponID = $coupon_data->couponID ?? '';

                $coupon->seller_viewed = $seller_viewed;

                $coupon->user_allocated = 'N';

                $coupon->applied_status = 0;

                $coupon->seller_id = $user->id;



                $coupons[] = $coupon;
            }
        }



        $coupon_count = 0;

        // if(!empty($coupons)){

        $coupon_count = $allcoupons->total();

        // }



        return response()->json([

            'result' => "success",

            'message' => 'Successfully',

            'coupons' => $coupons,

            'coupon_count' => $coupon_count,

            'total_pages' => 0,

        ], 200);
    }





    public function user_details_new(Request $request)
    {
        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);


        $validator = Validator::make($request->all(), [

            'token' => 'required',

            'user_id' => 'required',

        ]);

        $user_details = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'failure',

                'message' => json_encode($validator->errors()),

                'user_details' => $user_details,

            ], 400);
        }

        $user = auth('admins')->user();

        // if (empty($user)) {

        //     return response()->json([

        //         'result' => "failure",

        //         'message' => 'Not Available',

        //         'user_details' => $user_details,

        //     ], 401);

        // }



        $user_details = MobileDetails::where('user_id', $request->user_id)->first();

        if (!empty($user_details)) {

            // echo "dafasdasd".$user_details->location_updated_at;



            // $user_details->updated_on = $user_details->location_updated_at??'';

            // 2022-11-27 07:53 PM

            if (!empty($user_details->latitude) && !empty($user_details->longitude)) {

                $user_details->updated_on = date('Y-m-d h:i A', strtotime($user_details->location_updated_at));
            } else {

                $user_details->updated_on = "";
            }


            $user_details->added_on = date('Y-m-d h:i:s', strtotime($user_details->date_of_purchase)) ?? '';

            // $user_details->image = url('public/storage/user/'.$user_details->user_image);


            $user_details->name = $user_details->user_name ?? '';

            $user_details->mobile = $user_details->user_phone ?? '';

            $user_details->user_id = $user_details->user_id ?? '';

            $user_details->name = $user_details->user_name ?? '';

            $user_details->mobile_id = $user_details->id ?? '';

            $user_details->sim1_operator = $user_details->sim1_operator ?? '';

            $user_details->sim2_operator = $user_details->sim2_operator ?? '';

            $user_details->sim1 = $user_details->sim1 ?? '';

            $user_details->sim2 = $user_details->sim2 ?? '';

            $user_details->latitude = $user_details->latitude ?? '';

            $user_details->longitude = $user_details->longitude ?? '';



            $user_details->loan_provider = $user_details->loan_provider ?? '';

            $user_details->user_imei_no = $user_details->imei_no ?? '';
            $user_details->phone_status = $user_details->phone_status;
            $user_details->is_locked = $user_details->is_locked ?? "0";

            $user_details->is_active = 'Y';



            if ($user_details->image_version == 1) {

                $image = url('public/storage/user/' . $user_details->user_image);
            } else {

                $image = url('public/storage/user/' . $user_details->user_image);
            }



            $user_details->image = $image;





            $imei_no = (string)$user_details->imei_no;

            $password = $imei_no . date('d/m/Y H:i');

            $new_password = hash('sha256', $password);

            $user_details->old_password = $password;

            $user_details->password = substr($new_password, 0, 10);

            $signature = '';

            $thumb = '';

            if (!empty($user_details->signature)) {

                $signature = url('public/storage/signature/' . $user_details->signature);
            }

            if (!empty($user_details->thumb)) {

                $thumb = url('public/storage/signature/' . $user_details->thumb);
            }



            $user_details->signature = $signature;

            $user_details->thumb = $thumb;

            $user_details->version = $user_details->version ?? '';
        }



        return response()->json([

            'result' => "success",

            'message' => 'Successfully',

            'user_details' => $user_details,

        ], 200);
    }





    public function change_password(Request $request)
    {

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);

        $validator = Validator::make($request->all(), [

            'token' => 'required',

            'current_password' => 'required',

            'password' => 'required',

            'confirm_password' => 'required|same:password',

        ]);

        $user_details = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'false',

                'message' => json_encode($validator->errors()),

            ], 400);
        }

        $user = auth('admins')->user();

        if (empty($user)) {

            return response()->json([

                'result' => "false",

                'message' => 'Not Available',

            ], 401);
        }



        $old_password = $request->current_password ?? '';

        $hash_chack = Hash::check($old_password, $user->password);

        if ($hash_chack) {
            auth()->logout();

            $is_updated = Admin::where('id', $user->id)->update(['password' => bcrypt($request->password), 'password_value' => $request->password, 'password_change' => 1]);

            return response()->json([

                'result' => "success",

                'message' => 'Password Changed Successfully',

            ], 200);
        } else {

            return response()->json([

                'result' => "false",

                'message' => 'Old password Doesnt Match',

            ], 200);
        }
    }


    public function decode_token(Request $request)
    {
        $user = auth('admins')->user();
        return response()->json([

            'result' => "success",

            'message' => 'Successfully',

            'user' => $user,

        ], 200);
    }




    public function seller_profile(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'token' => 'required',

        ]);

        $user_details = null;

        $data = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'false',

                'message' => json_encode($validator->errors()),

                'user_details' => $user_details,

            ], 400);
        }

        $user = auth('admins')->user();

        if (empty($user)) {

            return response()->json([

                'result' => "false",

                'message' => 'Not Available',

                'user_details' => $user_details,

            ], 401);
        }

        $qr_code = DB::table('qr_code')->first();



        $parent = Admin::where('id', $user->parent_id)->first();



        $parent_parent = Admin::where('id', $parent->parent_id)->first();



        $state = State::where('id', $user->state_id)->first();

        $city = City::where('id', $user->city_id)->first();

        $qr_data = '{
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_COMPONENT_NAME": "com.google.android.apps.work.clouddpc/.receivers.CloudDeviceAdminReceiver","android.app.extra.PROVISIONING_LEAVE_ALL_SYSTEM_APPS_ENABLED" : true,
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_SIGNATURE_CHECKSUM": "I5YvS0O5hXY46mb01BlRjq4oJJGs2kuUcHvVkAPEXlg",
            "android.app.extra.PROVISIONING_DEVICE_ADMIN_PACKAGE_DOWNLOAD_LOCATION": "https://play.google.com/managed/downloadManagingApp?identifier=setup",
            "android.app.extra.PROVISIONING_ADMIN_EXTRAS_BUNDLE": {
                "com.google.android.apps.work.clouddpc.EXTRA_ENROLLMENT_TOKEN": "BQDRKSXKRDFUGBRZMOHSWWED"
            }
        }';


        $data = array(

            'id' => $user->id ?? '',

            'name' => $user->name ?? '',



            'email' => $user->email ?? '',

            'phone' => $user->phone ?? '',

            'image' =>  url('public/storage/admin/' . $user->image),

            'gender' => $user->gender ?? '',

            'dob' => $user->dob ?? '',

            'address' => $user->address ?? '',

            'state' => $state->name ?? '',

            'city' => $city->name ?? '',

            'pincode' => $user->pincode ?? '',

            'tsm_name' => $parent->name ?? '',

            'tsm_number' => $parent->phone ?? '',

            'tsm_id' => $parent->id ?? '',

            'seller_bussiness_name' => $user->business_name ?? '',

            'distributor_name' => $parent_parent->name ?? '',

            'distributor_number' => $parent_parent->phone ?? '',

            'distributor_bussiness_name' => $parent_parent->business_name ?? ''



        );





        return response()->json([

            'result' => "success",

            'message' => 'Successfully',

            'data' => $data,

            'qr_code' => $qr_code,

            'qr_data' => $qr_data,

        ], 200);
    }

    public function send_notification($title, $body, $deviceToken, $type, $seller_name = '', $seller_contact = '', $amount = '', $user_id = '', $user_number = '', $coupon_code = '')
    {

        $sendData = array(

            'body' => !empty($body) ? $body : '',

            'title' => !empty($title) ? $title : '',

            'type' => !empty($type) ? $type : '',

            'seller_name' => !empty($seller_name) ? $seller_name : '',

            'seller_contact' => !empty($seller_contact) ? $seller_contact : '',

            'amount' => !empty($amount) ? $amount : '',

            'user_number' => !empty($user_number) ? $user_number : '',

            'user_id' => !empty($user_id) ? $user_id : '',
            'coupon_code' => !empty($coupon_code) ? $coupon_code : '',

            'sound' => 'Default',



        );

        return $this->fcmNotification($deviceToken, $sendData);
    }







    public function fcmNotification($device_id, $sendData)

    {

        // echo $device_id;

        // DB::table('new')->insert(['data'=>json_encode($sendData)]);


        if (!defined('API_ACCESS_KEY')) {

            // define('API_ACCESS_KEY', 'AAAA8o3PkfY:APA91bFQqBjudr62Agn_I1PTY_e33BmC6Yr4_HiZMtavQAgn7tiIP6Q1hZJPmwan0fH11q7YaXQFYa8Zvsdamg-qENgQZb-D_GW0MnlbOqrM8hwShybzezI44Hb7kkC_bG9XOHBgwyAv');
            define('API_ACCESS_KEY', 'AAAAbVxUREs:APA91bHRAIp2DxJMGYYNnUQbp5DI4ShxYsmP6LXgw8zCoz19D7hl71rfBTmMTYpn8kvjsh3WFXnzTBi7W96N6sSiUdxAphyIHOdS9Xo3mWmH5KL1dKSG-cDcI5OdRNtFDpSgUKi0tx0A');
        }



        $fields = array(

            'to'        => $device_id,

            'data'  => $sendData,

            'priority' => 'high',

            // 'notification'  => $sendData

        );





        $headers = array(

            'Authorization: key=' . API_ACCESS_KEY,

            'Content-Type: application/json'

        );

        #Send Reponse To FireBase Server

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);



        if ($result === false)

            die('Curl failed ' . curl_error($ch));



        curl_close($ch);



        // print_r($result);

        // DB::table('new')->insert(['data'=>json_encode(($result))]);

        // $this->db->insert('notification_log',['data'=>json_encode($result),'device_id'=>$device_id]);



        // print_r($result);

        // die;



        return $result;
    }





    public function send_lock_sms_user($mobile, $code, $seller_name = '', $seller_contact = '')
    {

        $mobile = substr($mobile, -10);

        $curl = curl_init();

        curl_setopt_array($curl, [

            CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_ENCODING => "",

            CURLOPT_MAXREDIRS => 10,

            CURLOPT_TIMEOUT => 30,

            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

            CURLOPT_CUSTOMREQUEST => "POST",

            CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"6400d870d6fc0543e13707b4\",\n  \"sender\": \"MTXEML\",\n  \"mobiles\": \"91$mobile\",\n  \"otp\": \"$code\"}",
            CURLOPT_HTTPHEADER => [
                "authkey: 391180A1MFhb0R63f757e9P1",
                "content-type: application/JSON"
            ],

        ]);



        $response = curl_exec($curl);

        $err = curl_error($curl);



        curl_close($curl);



        if ($err) {

            //echo "cURL Error #:" . $err;

        } else {

            // echo $response;

        }
    }

    public function unlock_request(Request $request)
    {

        DB::table('new')->insert(['data' => json_encode($request->toArray())]);



        $validator = Validator::make($request->all(), [

            'token' => 'required',

            'status' => 'required',

            'coupon_code' => '',

            'user_id' => 'required',

            'imei' => '',

        ]);

        $seller_name = "";

        $seller_contact = "";

        $data = null;

        if ($validator->fails()) {

            return response()->json([

                'result' => 'failure',

                'message' => json_encode($validator->errors()),

                'seller_name' => $seller_name,

                'seller_contact' => $seller_contact,

            ], 400);
        }

        $user = auth('admins')->user();

        if (empty($user)) {

            return response()->json([

                'result' => "failure",

                'message' => 'Not Available',

                'seller_name' => $seller_name,

                'seller_contact' => $seller_contact,

            ], 401);
        }

        //echo $user->id;die;

        $status = $request->status ?? '';

        // $mobile_details = MobileDetails::where('coupon_code',$request->coupon_code)->orWhere('imei_no',$request->imei)->orWhere('imei_no2',$request->imei)->first();

        $mobile_details = MobileDetails::where('coupon_code', $request->coupon_code)->where('user_id', $request->user_id)->where('coupon_parent_id', $user->id)->latest()->first();

        MobileDetails::where('user_id', $request->user_id)->update(['is_locked' => 0]);


        if (!empty($mobile_details)) {

            if ($mobile_details->phone_status == 'remove') {

                return response()->json([

                    'result' => "failure",

                    'message' => 'Application Already Removed',

                    'seller_name' => $seller_name,

                    'seller_contact' => $seller_contact,

                ], 200);
            }



            $device_token = $mobile_details->device_token ?? '';
            $coupon_code = $mobile_details->coupon_code ?? '';

            $user_number = $mobile_details->user_phone ?? '';

            $seller_name = $user->business_name ?? '';

            $seller_contact = $user->phone ?? '';
            // $user_number = $mobile_details->user_phone??'';
            // $seller_contact = $seller_contact . " " . $user_number;

            $seller_name1 = $user->business_name ?? '';
            $seller_name1 .= '.';

            $seller_contact1 = $user->phone ?? '';
            // $user_number = $mobile_details->user_phone??'';
            $seller_contact1 = $seller_contact1 . " " . $user_number . " " . $coupon_code;





            if ($status == 'locked') {



                $mobile = isset($mobile_details->sim1) ? $mobile_details->sim1 : '';

                if (empty($mobile)) {

                    $mobile = isset($mobile_details->sim2) ? $mobile_details->sim2 : '';
                }







                $code = rand(11111, 999999);

                // $this->send_lock_sms_user($mobile,$code,$seller_name1,$seller_contact1);

                MobileDetails::where('id', $mobile_details->id)->update(['phone_status' => 'locked', 'app_status' => '']);

                $type = 'locked';

                $title = 'Phone status changed';

                $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $status . ' '];

                $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number, $coupon_code);
                if(!empty($mobile_details->device_id)){
                   $this->send_lock_notification($mobile_details->device_id);
               }

               return response()->json([

                'result' => "success",

                'message' => 'Phone locked successfully',

                'seller_name' => $seller_name,

                'seller_contact' => $seller_contact,

            ], 200);
           } else if ($status == 'unlock') {






            MobileDetails::where('id', $mobile_details->id)->update(['phone_status' => 'unlock', 'app_status' => '']);

            $type = 'unlock';

            $title = 'Phone status changed';

            $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $status . ' '];

            $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number, $coupon_code);
            if(!empty($mobile_details->device_id)){
               $this->send_unlock_notification($mobile_details->device_id);
           }
           return response()->json([

            'result' => "success",

            'message' => 'Phone unlock successfully',

            'seller_name' => $seller_name,

            'seller_contact' => $seller_contact,

        ], 200);
       } else if ($status == 'message_locked') {

        $mobile = $request->mobile_number ?? '';
        MobileDetails::where('id', $mobile_details->id)->update(['phone_status' => 'locked']);

                //  $mobile = isset($mobile_details->sim1) ? $mobile_details->sim1 :'';

                //  if(empty($mobile)){

                //     $mobile = isset($mobile_details->sim2) ? $mobile_details->sim2 :'';

                // }


        $seller_name1 = $user->business_name ?? '';
        $seller_name1 .= '.';

        $seller_contact1 = $user->phone ?? '';
                // $user_number = $mobile_details->user_phone??'';
                // $seller_contact1 = $seller_contact1." ".$user_number;

        $seller_contact1 = $seller_contact1 . " " . $user_number . " " . $coupon_code;



        $code = rand(11111, 999999);

        $this->send_lock_sms_user($mobile, $code, $seller_name1, $seller_contact1);

        return response()->json([

            'result' => "success",

            'message' => 'Phone locked successfully',

            'seller_name' => $seller_name,

            'seller_contact' => $seller_contact,

        ], 200);
    } else if ($status == 'message_unlock') {

        $coupon_code = $mobile_details->coupon_code ?? '';
        $seller_name1 = $user->business_name ?? '';
        $seller_name1 .= '.';

        $seller_contact1 = $user->phone ?? '';
                // $user_number = $mobile_details->user_phone??'';
                // $seller_contact1 = $seller_contact1." ".$user_number;

        $seller_contact1 = $seller_contact1 . " " . $user_number . " " . $coupon_code;


        MobileDetails::where('id', $mobile_details->id)->update(['phone_status' => 'unlock']);


        $mobile = $request->mobile_number ?? '';
                // MobileDetails::where('sim1',$mobile)->orWhere('sim2',$mobile)->update(['phone_status'=>'unlock']);
        $code = rand(11111, 999999);

        $success = $this->send_unlock_sms_user($mobile, $code, $seller_name1, $seller_contact1);
        print_r($success);
        return response()->json([

            'result' => "success",

            'message' => 'Phone unlock successfully',

            'seller_name' => $seller_name,

            'seller_contact' => $seller_contact,

        ], 200);
    } else if ($status == 'remove') {

        MobileDetails::where('id', $mobile_details->id)->update(['phone_status' => 'remove']);

        $type = 'remove';

        $title = 'Phone status changed';

        $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $status . ' '];

        $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number, $coupon_code);

        return response()->json([

            'result' => "success",

            'message' => 'Phone remove successfully',

            'seller_name' => $seller_name,

            'seller_contact' => $seller_contact,

        ], 200);
    }
} else {

    return response()->json([

        'result' => "success",

        'message' => 'Not FOund',

        'seller_name' => $seller_name,

        'seller_contact' => $seller_contact,

    ], 200);
}
}

public function update_mobile_status(Request $request)
{
    $validator = Validator::make($request->all(), [
        'imei_no' => '',
        'imei_no2' => '',
        'is_locked' => '',
    ]);
    $data = null;
    if ($validator->fails()) {
        return response()->json([
            'result' => 'failure',
            'message' => json_encode($validator->errors()),
        ], 400);
    }
    MobileDetails::where('imei_no', $request->imei_no)->orWhere('imei_no2', $request->imei_no2)->update(['is_locked' => $request->is_locked]);
    return response()->json([
        'result' => "success",
        'message' => 'Updated Successfully',
    ], 200);
}



public function upload_screenshot(Request $request)
{
    $validator = Validator::make($request->all(), [
        'imei_no' => '',
        'imei_no2' => '',
        'image' => 'required',
    ]);
    $data = null;
    if ($validator->fails()) {
        return response()->json([
            'result' => 'failure',
            'message' => json_encode($validator->errors()),
        ], 400);
    }
    $file = $request->file('image');
    if (!empty($file)) {
        $image = $this->saveScreenShot($file);
        MobileDetails::where('imei_no', $request->imei_no)->orWhere('imei_no2', $request->imei_no2)->update(['screenshot' => $image]);
    }


    return response()->json([
        'result' => "success",
        'message' => 'Updated Successfully',
    ], 200);
}


private function saveScreenShot($file)
{



        // $file = $request->file('signature');



    if ($file) {

        $path = 'screenshot/';

        $thumb_path = 'screenshot/thumb/';

        $storage = Storage::disk('public');

        $IMG_WIDTH = 768;

        $IMG_HEIGHT = 768;

        $THUMB_WIDTH = 336;

        $THUMB_HEIGHT = 336;

        $uploaded_data = CustomHelper::UploadImage($file, $path, $ext = '', $IMG_WIDTH, $IMG_HEIGHT, $is_thumb = true, $THUMB_WIDTH, $THUMB_HEIGHT);

        if ($uploaded_data['success']) {

            $image = $uploaded_data['file_name'];

            return $image;
        } else {

            return "";
        }
    }
}



public function send_unlock_sms_user($mobile, $code, $seller_name = '', $seller_contact = '')
{

    $mobile = substr($mobile, -10);

    $curl = curl_init();

    curl_setopt_array($curl, [

        CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => "",

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 30,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => "POST",

        CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"6400d8c0d6fc0553a67c6272\",\n  \"sender\": \"MTXEML\",\n  \"mobiles\": \"91$mobile\",\n  \"otp\": \"$code\"}",
        CURLOPT_HTTPHEADER => [
            "authkey: 391180A1MFhb0R63f757e9P1",
            "content-type: application/JSON"
        ],

    ]);



    $response = curl_exec($curl);

    $err = curl_error($curl);



    curl_close($curl);



    if ($err) {

            //echo "cURL Error #:" . $err;

    } else {

            // echo $response;

    }
}



public function send_unlock_sms_user_old($mobile, $code, $seller_name = '', $seller_contact = '')
{
    $mobile = substr($mobile, -10);
    echo $mobile;
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"6400d8c0d6fc0553a67c6272\",\n  \"sender\": \"MTXEML\",\n  \"mobiles\": \"91$mobile\",\n  \"otp\": \"$code\"}",
        CURLOPT_HTTPHEADER => [
            "authkey: 380431Au1h7Cvbj62ea5d93P1",
            "content-type: application/JSON"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    return $response;
    if ($err) {
            //echo "cURL Error #:" . $err;
    } else {
            // echo $response;
    }
}




    // public function locked_cron(Request $request){
    //     $allmobile_details = MobileDetails::where('phone_status','locked')->get();
    //     if(!empty($allmobile_details)){
    //         foreach($allmobile_details as $mobile_details){
    //             $user = Admin::where('id',$mobile_details->coupon_parent_id)->first();
    //             $device_token = $mobile_details->device_token??'';
    //             $user_number = $mobile_details->user_phone??'';
    //             $seller_name = $user->business_name??'';
    //             $seller_contact = $user->phone??'';
    //             $type ='locked';
    //             $title = 'Phone status changed';
    //             $body = ['notification_type'=>'text','title'=>'Phone status changed','msg'=>'Phone'.$type.' '];
    //             $success = $this->send_notification($title, $body, $device_token,$type,$seller_name,$seller_contact,'','',$user_number);
    //         }
    //     }
    // }


public function locked_cron(Request $request)
{
    MobileDetails::latest('id')
    ->select('coupon_parent_id', 'device_token', 'user_phone')
    ->where('phone_status', 'locked')
    ->chunk(100, function ($allmobile_details) {
        foreach ($allmobile_details as $mobile_details) {
            $user = Admin::where('id', $mobile_details->coupon_parent_id)->first();
            $device_token = $mobile_details->device_token ?? '';
            $user_number = $mobile_details->user_phone ?? '';
            $seller_name = $user->business_name ?? '';
            $seller_contact = $user->phone ?? '';
            $type = 'locked';
            $title = 'Phone status changed';
            $body = ['notification_type' => 'text', 'title' => 'Phone status changed', 'msg' => 'Phone' . $type . ' '];
            $is_lock = MobileDetails::where('id', $mobile_details->id)->first();
            if ($is_lock->phone_status == 'locked') {
                $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, '', '', $user_number);
            }
        }
    });
}



public function update_location(Request $request)
{

        // DB::table('new')->insert(['data'=>json_encode(($request->toArray()))]);



    $validator = Validator::make($request->all(), [

        'token' => '',

        'user_id' => 'required',

        'latitude' => '',

        'longitude' => '',

    ]);

    $seller_name = "";

    $seller_contact = "";

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

        // $user = auth('admins')->user();

        // if (empty($user)) {

        //     return response()->json([

        //         'result' => "failure",

        //         'message' => 'Not Available',

        //     ], 401);

        // }

    $mobile_details = MobileDetails::where('user_id', $request->user_id)->get();

    if (!empty($mobile_details)) {

        foreach ($mobile_details as $mob) {

            MobileDetails::where('id', $mob->id)->update(['address' => $request->address, 'latitude' => $request->latitude, 'longitude' => $request->longitude, 'location_updated_at' => date('Y-m-d H:i:s')]);
        }

        return response()->json([

            'result' => "success",

            'message' => 'Location Updated Successfully',

        ], 200);
    } else {



        return response()->json([

            'result' => "success",

            'message' => 'Invalid User',

        ], 200);
    }
}





public function request_location(Request $request)
{

        // DB::table('new')->insert(['data'=>json_encode(($request->toArray()))]);

    $validator = Validator::make($request->all(), [

        'user_id' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user_id = $request->user_id ?? '';



    $users = MobileDetails::where('user_id', $request->user_id)->get();

        // prd($response);
    if (!empty($users)) {

        foreach ($users as $user) {

            $this->send_notification_old($request->user_id, $user->coupon_code);
            $user_number = $user->user_phone ?? '';

            $device_token = $user->device_token ?? '';

            $type = 'Location';

            $user_id = $user->user_id;

            $title = 'Update Location Request';

            $body = ['notification_type' => 'text', 'title' => $title, 'msg' => 'A Request Arrived From Seller To Update Your Location'];

            $success = $this->send_notification($title, $body, $device_token, $type, "", "", "", $user_id, $user_number);
        }
    }




    return response()->json([

        'result' => "success",

        'message' => 'Location Updated Successfully',

    ], 200);
}



public function send_notification_old($user_id, $coupon_code)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://admin.reptileindia.co.in/webservice/request_location_fetch_notification',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '{"user_id":"' . $user_id . '","coupon_code":"' . $coupon_code . '"}',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Cookie: eazy_m_admin_session=tni4k8kq1c29aeq94td7vmu4m66d77bl'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
        // return $response;

}



public function get_states(Request $request)
{

    $states = State::get();

    return response()->json([

        'result' => "success",

        'message' => '',

        'state' => $states,

    ], 200);
}





public function qr_code(Request $request)
{

    $qr_code = DB::table('qr_code')->first();

    return response()->json([

        'result' => "success",

        'message' => '',

        'qr_code' => $qr_code,

    ], 200);
}





public function privacy_policy(Request $request)
{

    $cms = DB::table('cms')->first();

    return response()->json([

        'result' => "success",

        'data' => $cms->privacy_policy ?? '',

    ], 200);
}

public function terms_and_condition(Request $request)
{

    $cms = DB::table('cms')->first();

    return response()->json([

        'result' => "success",

        'data' => $cms->terms_conditions ?? '',

    ], 200);
}





public function send_sms_verification($mobile, $type)
{

    $mobile = substr($mobile, -10);

    $curl = curl_init();

    curl_setopt_array($curl, [

        CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => "",

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 30,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => "POST",

        CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"633417eee6dbfb439e6864d1\",\n  \"sender\": \"CCTREP\",\n  \"mobiles\": \"91$mobile\",\n  \"sim\": \"$type\"}",

        CURLOPT_HTTPHEADER => [

            "authkey: 380431Au1h7Cvbj62ea5d93P1",

            "content-type: application/JSON"

        ],

    ]);



    $response = curl_exec($curl);

    $err = curl_error($curl);



    curl_close($curl);



    if ($err) {

            //echo "cURL Error #:" . $err;

    } else {

            // echo $response;

    }
}



public function get_city(Request $request)
{

    $validator = Validator::make($request->all(), [

        'state_id' => 'required',

    ]);



    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $city = City::where('state_id', $request->state_id)->get();



    return response()->json([

        'result' => "success",

        'message' => '',

        'city' => $city,

    ], 200);
}









public function user_emi_listing(Request $request)
{

    $validator = Validator::make($request->all(), [

        'user_id' => 'required',

        'mobile_id' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user_id = $request->user_id ?? '';

    $mobile_id = $request->mobile_id ?? '';

    $check = MobileDetails::where(['id' => $mobile_id, 'user_id' => $user_id])->first();

    if (!empty($check)) {

        $user_emi_details = [];

            // $this->db->select('mobile_name,imei_no,date_of_purchase,total_price,downpayment,emi,total_months,start_date,users.id as user_id');

            // $this->db->from('users'); 

            // $this->db->join('mobile_details','users.id = users.id', 'left');

            // $this->db->where('mobile_details.id',$mobile_id);  

            // $query = $this->db->get();

            // $user = $query->row();

        $user_emi_details['user_id'] = $user_id;

        $user_emi_details['mobile_name'] = $check->mobile_name ?? '';

        $user_emi_details['imei_no'] = $check->imei_no ?? '';

        $user_emi_details['date_of_purchase'] = $check->date_of_purchase ?? '';

        $user_emi_details['total_price'] = $check->total_price ?? '';

        $user_emi_details['downpayment'] = $check->downpayment ?? '';

        $user_emi_details['emi'] = $check->emi ?? '';

        $user_emi_details['total_months'] = $check->total_months ?? '';

        $user_emi_details['start_date'] = $check->start_date ?? '';



        $user_emi_details['mobile_emi'] = DB::table('emis')->where(['user_id' => $user_id, 'mobile_id' => $mobile_id])->get();





        return response()->json([

            'result' => "success",

            'message' => 'User Emi Details',

            'user_emi_details' => $user_emi_details,

        ], 200);
    } else {



        return response()->json([

            'result' => "success",

            'message' => 'Invalid User',

            'user_emi_details' => [],

        ], 200);
    }
}



public function emi_status_update(Request $request)
{

    $validator = Validator::make($request->all(), [

        'user_id' => 'required',

        'mobile_id' => 'required',

        'emi_id' => 'required',

        'paid_status' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user_id = $request->user_id ?? '';

    $mobile_id = $request->mobile_id ?? '';

    $emi_id = $request->emi_id ?? '';

    $paid_status = $request->paid_status ?? '';

    if ($paid_status == '1') {

        $status = 'paid';
    } else {

        $status = 'pending';
    }

    $check = DB::table('emis')->where(['user_id' => $user_id, 'mobile_id' => $mobile_id, 'id' => $emi_id])->first();

    if (!empty($check)) {

        $month = date('F', strtotime($check->date));

        DB::table('emis')->where('id', $check->id)->update(['paid_status' => $paid_status, 'recieved_date' => date('Y-m-d H:i:s')]);



        return response()->json([

            'result' => "success",

            'message' => 'User Emi Updated',

            'user_emi_status' => 'Emi ' . $status . ' of month ' . $month

        ], 200);
    } else {



        return response()->json([

            'result' => false,

            'message' => 'Invalid User',

            'user_emi_status' => ''

        ], 200);
    }
}







public function check_seller_status(Request $request)
{



    $validator = Validator::make($request->all(), [

        'token' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'status' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user = auth('admins')->user();

    if (empty($user)) {

        return response()->json([

            'status' => "failure",

            'message' => 'Token Not Available',

        ], 401);
    }



    if ($user->status == 'N') {



        return response()->json([

            'status' => "failure",

            'message' => 'Unauthenticated',

        ], 200);
    } else {

        return response()->json([

            'status' => "success",

            'message' => 'Successful',

        ], 200);
    }
}

public function logout(Request $request)
{

    $validator = Validator::make($request->all(), [

        'token' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user = auth('admins')->user();

    if (empty($user)) {

        return response()->json([

            'result' => "failure",

            'message' => 'Token Not Available',

        ], 401);
    }

    $user_login = UserLogin::where(['user_id' => $user->id, 'role' => 'seller'])->delete();

        // JWTAuth::invalidate($request->token);

    return response()->json([

        'result' => "success",

    ], 200);
}







    // public function ferch_sim_card_of_user(Request $request){

    //    $validator = Validator::make($request->all(), [

    //     'user_id'=> 'required',

    // ]);

    //    $data = null;

    //    if ($validator->fails()) {

    //     return response()->json([

    //         'result' => 'failure',

    //         'message' => json_encode($validator->errors()),

    //     ],400);

    // }

    // // $device_info = UserLogin::where('user_id',$request->user_id)->get();

    // $device_info = MobileDetails::where('user_id',$request->user_id)->first();

    // // if (!empty($device_info)) {

    // //     foreach ($device_info as $d){

    // $device_token = $device_info->device_token??'';

    // $seller_name ='';

    // $seller_contact ='';

    // $type ='fetch_simcard';

    // $title = 'Simcard Fetch';

    // $body = ['notification_type'=>'text','title'=>'Simcard Fetch','msg'=>'Simcard Fetch'];

    // $success = $this->send_notification($title, $body, $device_token,$type,$seller_name,$seller_contact);

    // // print_r($success);

    // //     }

    // // }

    // return response()->json([

    //     'result' => true,

    //     'message' => "Notification Sent successfully",

    // ],200);



    // }







public function ferch_sim_card_of_user(Request $request)
{

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);



    $validator = Validator::make($request->all(), [

        'user_id' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

        // $device_info = UserLogin::where('user_id',$request->user_id)->get();

    $device_info = MobileDetails::where('user_id', $request->user_id)->get();



    if (!empty($device_info)) {

        foreach ($device_info as $info) {

                // $dbArray = ['sim1'=>'','sim2'=>'','sim1_operator'=>'','sim2_operator'=>''];

                // MobileDetails::where('id',$info->id)->update($dbArray);

            $device_token = $info->device_token ?? '';

            $seller_name = '';

            $seller_contact = '';

            $type = 'fetch_simcard';

            $title = 'Simcard Fetch';

            $body = ['notification_type' => 'text', 'title' => 'Simcard Fetch', 'msg' => 'Simcard Fetch'];

            $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact);
        }
    }

    return response()->json([

        'result' => true,

        'message' => "Notification Sent successfully",

    ], 200);
}







public function update_user_sim_card(Request $request)
{

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);



    $validator = Validator::make($request->all(), [

        'imei_no' => '',

        'imei_no2' => '',

        'sim1' => '',

        'sim2' => '',

        'sim1_operator' => '',

        'sim2_operator' => '',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }





    $imei_no = (!empty($request->imei_no)) ? $request->imei_no : '';

    $imei_no2 = (!empty($request->imei_no2)) ? $request->imei_no2 : '';

    $sim1 = (!empty($request->sim1)) ? $request->sim1 : '';

    $sim2 = (!empty($request->sim2)) ? $request->sim2 : '';

    $sim1_operator = (!empty($request->sim1_operator)) ? $request->sim1_operator : '';

    $sim2_operator = (!empty($request->sim2_operator)) ? $request->sim2_operator : '';

    $response = [];

    if (!empty($imei_no) || !empty($imei_no2)) {

        $mobile_details = MobileDetails::where('imei_no', $imei_no)->orWhere('imei_no2', $imei_no2)->get();

        if (!empty($mobile_details)) {

            foreach ($mobile_details as $mob) {

                $dbArray = ['sim1' => $sim1, 'sim2' => $sim2, 'sim1_operator' => $sim1_operator, 'sim2_operator' => $sim2_operator];

                MobileDetails::where('imei_no', $imei_no)->orWhere('imei_no2', $imei_no2)->update($dbArray);
            }

            $response = array('result' => true, 'message' => 'successfully');
        } else {

            $response = array('result' => false, 'message' => 'Imei Not Found');
        }
    } else {

        $response = array('result' => false, 'message' => 'IMEI Required');
    }

    return response()->json($response, 200);
}



public function send_emi_alert(Request $request)
{

    $validator = Validator::make($request->all(), [

        'token' => 'required',

        'user_id' => 'required',

        'amount' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }



    $user = auth('admins')->user();

    if (empty($user)) {

        return response()->json([

            'result' => "failure",

            'message' => 'Token Not Available',

        ], 401);
    }

    $seller_id = $user->id;

    $amount = $request->amount ?? 0;



    $mobile_details = MobileDetails::where('user_id', $request->user_id)->first();





        // $device_info = UserLogin::where('user_id',$request->user_id)->get();

        // if (!empty($device_info)) {

        //     foreach ($device_info as $d){





    if (!empty($mobile_details)) {



        $admin = Admin::where('id', $mobile_details->coupon_parent_id)->first();



        $device_token = $mobile_details->device_token ?? '';

        $type = 'emi_alert_notify';

        $title = 'Emi Alert';

        $status = '';

        $seller_name = $admin->business_name ?? '';

        $seller_contact = $admin->phone ?? '';

        $body = ['notification_type' => 'text', 'title' => 'Emi Alert', 'msg' => 'Phone' . $status . ' '];

        $success = $this->send_notification($title, $body, $device_token, $type, $seller_name, $seller_contact, $amount);
    }



        //     }

        // }

    return response()->json([

        'result' => "success",

        'message' => "Notification Sent successfully",

    ], 200);
}





public function coupon_viewed_status(Request $request)

{


        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);
    $validator = Validator::make($request->all(), [

        'seller_id' => 'required',

        'coupon_id' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $check = [];

        // $check = $this->webservice_m->get_single_table("coupons",array('couponID'=>$coupon_id,'seller_id'=>$seller_id));
    $check = Coupon::where('couponID', $request->coupon_id)->first();
    if (!empty($check)) {
        Coupon::where('id', $check->id)->update(['is_view' => 1]);
        AssignCoupon::where('coupon_id', $check->id)->update(['is_view' => 1]);
            // $this->db->where('id', $check->id);

            // $this->db->update('coupons', array('seller_viewed' => 'Y','updated_on' => date('Y-m-d H:i:s')));

        $response = array('result' => 'success', 'message' => 'Seller Viewed This Coupon');
    } else {

        $response = array('result' => false, 'message' => 'Invalid Coupon');
    }

    return response()->json($response, 200);
}



public function update_user_profile(Request $request)

{



    $validator = Validator::make($request->all(), [

        'mobile_id' => 'required',

        'signature' => '',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => 'failure',

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $file = $request->file('signature');

    $thumb = $request->file('thumb');



    $image = '';

    $thumbimage = '';

    $loan_provider = $request->loan_provider ?? '';

    if (!empty($file)) {

        $image = $this->saveImage($file);
    }

    if (!empty($thumb)) {

        $thumbimage = $this->saveImage($thumb);
    }

    MobileDetails::where('id', $request->mobile_id)->update(['signature' => $image, 'loan_provider' => $loan_provider, 'thumb' => $thumbimage]);



    return response()->json([

        'result' => 'success',

        'message' => "Signature Updated Successfully",

    ], 200);
}















private function saveImage($file)
{



        // $file = $request->file('signature');



    if ($file) {

        $path = 'signature/';

        $thumb_path = 'signature/thumb/';

        $storage = Storage::disk('public');

        $IMG_WIDTH = 768;

        $IMG_HEIGHT = 768;

        $THUMB_WIDTH = 336;

        $THUMB_HEIGHT = 336;

        $uploaded_data = CustomHelper::UploadImage($file, $path, $ext = '', $IMG_WIDTH, $IMG_HEIGHT, $is_thumb = true, $THUMB_WIDTH, $THUMB_HEIGHT);

        if ($uploaded_data['success']) {

            $image = $uploaded_data['file_name'];

            return $image;
        } else {

            return "";
        }
    }
}







public function seller_coupon_transaction(Request $request)
{

        // DB::table('new')->insert(['data'=>json_encode($request->toArray())]);



    $validator = Validator::make($request->all(), [

        'token' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => false,

            'message' => json_encode($validator->errors()),

        ], 400);
    }



    $user = auth('admins')->user();

    if (empty($user)) {

        return response()->json([

            'result' => false,

            'message' => 'Token Not Available',

        ], 401);
    }

    $seller_id = $user->id;

    $transactions = null;

    $alltransactions = DB::table('coupon_transaction')->where('parent_id', $seller_id)->orderBy('date', 'desc')->get();

    if (!empty($alltransactions)) {

        foreach ($alltransactions as $transaction) {

            $dbArray = [];

            $dbArray['count'] = $transaction->no_of_coupons ?? '';

            $dbArray['seller_assign_date'] = date('d M Y', strtotime($transaction->date)) ?? '';

            $transactions[] = $dbArray;
        }
    }



    return response()->json([

        'result' => true,

        'message' => "successfully",

        'transactions' => $transactions,

    ], 200);
}





public function video_playlists(Request $request)
{

    $video_playlists = [];

    $video_playlists = DB::table('video_playlists')->where('is_delete', 0)->get();

    return response()->json([

        'result' => true,

        'message' => "successfully",

        'video_playlists' => $video_playlists,

    ], 200);
}



public function finances(Request $request)
{

    $finArr = [];

    $finances = config('custom.finances');

    if (!empty($finances)) {

        foreach ($finances as $key => $value) {

            $finance = [];

            $finance['name'] =  $key;

            $finance['value'] =  $value;

            $finArr[] = $finance;
        }
    }

    return response()->json([

        'result' => true,

        'message' => "successfully",

        'finances' => $finArr,

    ], 200);
}

public function notification_list(Request $request)
{

    $validator = Validator::make($request->all(), [

        'token' => 'required',

    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => false,

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user = auth('admins')->user();
    $seller_id = $user->id ?? '';

    $notification = DB::table('notifications')->where(['user_id' => $seller_id])->latest()->limit(50)->get();
    if (!empty($notification)) {
        return response()->json([
            'result' => true,
            'details' => $notification
        ], 200);
    } else {
        return response()->json([
            'result' => false,
            'details' => $notification
        ], 200);
    }
}


public function get_customer_data(Request $request)
{

    $validator = Validator::make($request->all(), [
        'imei_no' => 'required',
    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([

            'result' => false,

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $details = [];
    $details = MobileDetails::where('imei_no', $request->imei_no)->first();
    if (!empty($details)) {
        $seller = Admin::where('id', $details->coupon_parent_id)->first();
        if (!empty($seller)) {
            $details->seller_name = $seller->business_name ?? '';
            $details->seller_phone = $seller->phone ?? '';
        }
    }

    return response()->json([
        'result' => false,
        'details' => $details
    ], 200);
}

public function update_status(Request $request)
{

    $validator = Validator::make($request->all(), [
        'token' => 'required',
        'imei_no' => 'required',
        'app_status' => 'required',
    ]);

    $data = null;

    if ($validator->fails()) {

        return response()->json([
            'result' => false,
            'message' => json_encode($validator->errors()),

        ], 400);
    }

    if ($validator->fails()) {

        return response()->json([

            'result' => false,

            'message' => json_encode($validator->errors()),

        ], 400);
    }

    $user = auth('admins')->user();

    $details = [];
        // MobileDetails::where('imei_no',$request->imei_no)->update(['phone_status'=>$request->status]);
        // if($request->app_status == 'remove'){
    MobileDetails::where('imei_no', $request->imei_no)->update(['app_status' => $request->app_status]);
        // }


    $mobile_details = MobileDetails::where('imei_no', $request->imei_no)->first();
    if (!empty($mobile_details) && !empty($mobile_details->serial_no)) {
        if ($mobile_details->app_status == 'locked') {
            $this->send_lock_notification($mobile_details->device_id);
        }
        if ($mobile_details->app_status == 'unlock') {
            $this->send_unlock_notification($mobile_details->device_id);
        }
        if ($mobile_details->app_status == 'remove') {
            $this->send_remove_notification($mobile_details->device_id);
        }
    }


    MobileDetails::where('imei_no', $request->imei_no)->update(['phone_status' => "remove"]);
    return response()->json([
        'result' => false,
        'message' => 'Status Updated Successfully'
    ], 200);
}


public function enable_apps(Request $request){
    DB::table('new')->insert(['data' => json_encode($request->toArray())]);
    $validator = Validator::make($request->all(), [
        'token' => 'required',
        'package_name' => 'required',
        'is_disable' => 'required',
        'mobile_id' => 'required',
    ]);

    $data = null;
    if ($validator->fails()) {
        return response()->json([
            'result' => false,
            'message' => json_encode($validator->errors()),
        ], 400);
    }

    $user = auth('admins')->user();
    if (empty($user)) {
        return response()->json([
            'result' => "failure",
            'message' => 'Token Not Available',
            'users' => $user,
        ], 401);
    }

    $dbArray = [];
    $dbArray['package_name'] = $request->package_name??'';
    $dbArray['is_disable'] = $request->is_disable??'';
    $dbArray['mobile_id'] = $request->mobile_id??'';
    $dbArray['status'] = 1;

    DB::table('enable_apps')->insert($dbArray);
    $mobile_details = MobileDetails::where('user_id',$request->mobile_id)->first();

    $this->send_enable_apps_notification($mobile_details->device_token,$request->package_name,$request->is_disable);

    return response()->json([
        'result' => false,
        'message' => 'Status Updated Successfully'
    ], 200);
}


public function send_enable_apps_notification($device_token,$package_name,$is_disable){
 $body = ['notification_type' => 'text', 'title' => 'Package Enable Disable', 'msg' => ''];
 $sendData = array(
    'body' => !empty($body) ? $body : '',
    'package_name' => !empty($package_name) ? $package_name : '',
    'is_disable' => !empty($is_disable) ? $is_disable : '',
    'title' => 'Package Enable Disable',
    'type' => 'package_access',
    'sound' => 'Default',
);
 return $this->fcmNotification($device_token, $sendData);
}















}
