<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use App\Helpers\CustomHelper;
use Auth;
use Validator;
use App\User;
use App\Admin;
use App\Course;

use App\Category;
use App\City;
use App\SubCategory;

use App\SubscriptionHistory;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use Rap2hpoutre\FastExcel\FastExcel;
use Storage;
use DB;
use Hash;

use PhpOffice\PhpWord\IOFactory;




Class SuperDistributorController extends Controller
{

    private $ADMIN_ROUTE_NAME;

    public function __construct()
    {
        $this->ADMIN_ROUTE_NAME = CustomHelper::getAdminRouteName();
    }

    public function index(Request $request)
    {
        $search = isset($request->search) ? $request->search :'';
        $role_id = isset($request->role_id) ? $request->role_id :'';
        $data['search'] = $search;
        $users = Admin::where('is_delete','0')->where('parent_id',1)->orderBy('id','desc');
        if(!empty($search)){
            $users->where('name', 'like', '%' . $search . '%');
            $users->orWhere('email', 'like', '%' . $search . '%');
            $users->orWhere('phone', 'like', '%' . $search . '%');
        }
        if(!empty($role_id)){
            // $users->where('role_id', $role_id);
        }
        $users = $users->paginate(10);
        $data['users'] = $users;
        return view('admin.superdistributor.index',$data);
    }



    public function export(Request $request){
        $search = isset($request->search) ? $request->search:'';
        $users = User::select('id','name','email','phone','wallet','referral_code');
        if(!empty($search)){
            $users->where('name', 'like', '%' . $search . '%');
            $users->orWhere('email', 'like', '%' . $search . '%');
            $users->orWhere('phone', 'like', '%' . $search . '%');

        }
        $users = $users->get();
        if(!empty($users) && $users->count() > 0){
            foreach($users as $user){
             $userArr = [];
             $userArr['ID'] = $user->id;
             $userArr['Name'] = $user->name ?? '';
             $userArr['Email'] = $user->email ?? '';
             $userArr['Phone'] = $user->phone ?? '';
             $userArr['Wallet'] = $user->wallet ?? 0;
             $userArr['Referal Code'] = $user->referral_code ?? 0;
             $exportArr[] = $userArr;
         }
         $filedNames = array_keys($exportArr[0]);
         $fileName = 'users_'.date('Y-m-d-H-i-s').'.xlsx';
         return Excel::download(new UserExport($exportArr, $filedNames), $fileName);
     }

 }







 public function subscriptions(Request $request){
     $id = isset($request->id) ? $request->id : 0;
     $data = [];
     $method = $request->method();


     if($method == 'post' || $method == 'POST'){
        $rules = [];
        $rules['course_id'] = 'required';

        $this->validate($request,$rules);

        $dbArray = [];


        $course_details = Course::where('id',$request->course_id)->first();

        $dbArray['course_id'] = $request->course_id;
        $dbArray['user_id'] = $id;
        $dbArray['start_date'] = date('Y-m-d');
        $dbArray['amount'] = $course_details->full_amount;
        $dbArray['payment_type'] = 'Admin';
        $dbArray['payment_cause'] = 'subscription';
        $dbArray['paid_status'] = 1;
        $dbArray['end_date'] = date('Y-m-d',strtotime("+".$course_details->duration." months", strtotime(date('Y-m-d'))));

        SubscriptionHistory::insert($dbArray);
     }

     $subscriptions = SubscriptionHistory::where('is_delete',0)->where('user_id',$id)->latest()->paginate(10);

     $back_url = $this->ADMIN_ROUTE_NAME.'/user';


     $course = Course::select('id','course_name')->where('status',1)->get();


     $data['user'] = User::where('id',$id)->first();
     $data['subscriptions'] = $subscriptions;
     $data['course'] = $course;

     $data['back_url'] = $back_url;




     return view('admin.user.subscription',$data);


 }


public function update_subscription(Request $request){
    $method = $request->method();
     if($method == 'post' || $method == 'POST'){
            SubscriptionHistory::where('id',$request->subscription_id)->update(['end_date'=>$request->end_date]);
        return back()->with('alert-success', 'Updated Successfully');

     }
}





 public function add(Request $request)
 {
     $details = [];

     $id = isset($request->id) ? $request->id : 0;

     $users = '';

     if(is_numeric($id) && $id > 0)
     {
        $users = User::find($id);
        if(empty($users))
        {
            return redirect($this->ADMIN_ROUTE_NAME.'/user');
        }
    }


    if($request->method() == "POST" || $request->method() == "post")
    {

           // prd($request->toArray());

        if(empty($back_url))
        {
         $back_url = $this->ADMIN_ROUTE_NAME.'/user';
     }


     if(is_numeric($request->id) && $request->id > 0)
     {
         $details['name'] = 'required';
         $details['email'] = 'required';
         $details['phone'] = 'required';
         $details['status'] = 'required';


     }else{

        $details['name'] = 'required';
        $details['email'] = 'required';
        $details['phone'] = 'required';
        $details['status'] = 'required';

    }

    $this->validate($request , $details); 

          // prd($dd);

    $createdDetails = $this->save($request , $id);

    if($createdDetails)
    {
        $alert_msg = "User Created Successfully";

        if(is_numeric($id) & $id > 0)
        {
            $alert_msg = "User Updated Successfully";
        } 
        return redirect(url($back_url))->with('alert-success',$alert_msg);
    }else{

        return back()->with('alert-danger', 'something went wrong, please try again or contact the administrator.');
    }

}

$page_Heading = "Add User";
if(isset($users->id))
{
    $name = $users->name;
    $page_Heading = 'Update User -'.$name;
}



$details['page_Heading'] = $page_Heading;
$details['id'] = $id;
$details['users'] = $users;


return view('admin.user.form',$details);

}


public function save(Request $request, $id = 0)
{
    $details = $request->except(['_token', 'back_url']);

    if(!empty($request->password)){
        $details['password'] = bcrypt($request->password);
    }

    $old_img = '';

    $user = new User;

    if(is_numeric($id) && $id > 0)
    {
        $exist = User::find($id);

        if(isset($exist->id) && $exist->id == $id)
        {   
            $user = $exist;

            $old_img = $exist->image;

        }

    }

    foreach($details as $key => $val)
    {
        $user->$key = $val;
    }

    $isSaved = $user->save();

    if($isSaved)
    {
        $this->saveImage($request , $user , $old_img);
    }

    return $isSaved;
}

private function saveImage($request, $user, $oldImg=''){

    $file = $request->file('image');

    //prd($file);
    if ($file) {
        $path = 'user/';
        $thumb_path = 'user/thumb/';
        $storage = Storage::disk('public');
            //prd($storage);
        $IMG_WIDTH = 768;
        $IMG_HEIGHT = 768;
        $THUMB_WIDTH = 336;
        $THUMB_HEIGHT = 336;

        $uploaded_data = CustomHelper::UploadImage($file, $path, $ext='', $IMG_WIDTH, $IMG_HEIGHT, $is_thumb=true, $thumb_path, $THUMB_WIDTH, $THUMB_HEIGHT);

            // prd($uploaded_data);
        if($uploaded_data['success']){

            if(!empty($oldImg)){
                if($storage->exists($path.$oldImg)){
                    $storage->delete($path.$oldImg);
                }
                if($storage->exists($thumb_path.$oldImg)){
                    $storage->delete($thumb_path.$oldImg);
                }
            }
            $image = $uploaded_data['file_name'];

           // prd($image);
            $user->image = $image;
            $user->save();         
        }

        if(!empty($uploaded_data)){   
            return  $uploaded_data;
        }  

    }

}

public function change_user_role(Request $request){
  $id = isset($request->id) ? $request->id :'';
  $role_id = isset($request->role_id) ? $request->role_id :'';

  $users = User::where('id',$id)->first();
  if(!empty($users)){

   User::where('id',$id)->update(['role_id'=>$role_id]);
   $response['success'] = true;
   $response['message'] = 'Status updated';


   return response()->json($response);
}else{
   $response['success'] = false;
   $response['message'] = 'Not  Found';
   return response()->json($response);  
}

}

public function delete(Request $request)
{
 $id = isset($request->id) ? $request->id : 0;
 $is_delete = 0;

 if(is_numeric($id) && $id > 0)
 {       
    $is_delete = User::where('id', $id)->update(['is_delete'=> '1']);
}

if(!empty($is_delete))
{
    return back()->with('alert-success', 'User Deleted Successfully');
}else{

    return back()->with('alert-danger', 'something went wrong, please try again...');
}    
}

public function delete_subscription(Request $request)
{
 $id = isset($request->id) ? $request->id : 0;
 $is_delete = 0;

 if(is_numeric($id) && $id > 0)
 {       
    $is_delete = SubscriptionHistory::where('id', $id)->update(['is_delete'=> '1']);
}

if(!empty($is_delete))
{
    return back()->with('alert-success', 'Subscription Deleted Successfully');
}else{

    return back()->with('alert-danger', 'something went wrong, please try again...');
}    
}


public function subscription(Request $request){

}
public function wallet(Request $request){

    $method = $request->method();
    if($method == 'post' || $method == 'POST'){
        $rules = [];
        $rules['user_id'] = 'required';
        $rules['amount'] = 'required';
        $rules['type'] = 'required';


        $this->validate($request,$rules);

        $user = User::where('id',$request->user_id)->first();
        if(!empty($user)){
            $wallet = $user->wallet ?? 0 ;
            if($request->type == 'credit'){
                $new_wallet = $wallet + $request->amount;
                $success = User::where('id',$user->id)->update(['wallet'=>$new_wallet]);
                if($success){
                    $transactionArr = [];
                    $transactionArr['user_id'] = $user->id;
                    $transactionArr['txn_no'] = rand(111111,9999999);
                    $transactionArr['reason'] = 'Amount Added By Admin';
                    $transactionArr['amount'] = $request->amount;
                    $transactionArr['type'] = 'credit';
                    $transactionArr['status'] = 1;
                    DB::table('transactions')->insert($transactionArr);
                    return back()->with('alert-success', 'Added  Successfully');
                }else{
                    return back()->with('alert-danger', 'something went wrong, please try again...');
                }
            }
            if($request->type == 'debit'){
                if($wallet >= $request->amount){
                    $new_wallet = $wallet - $request->amount;
                    $success = User::where('id',$user->id)->update(['wallet'=>$new_wallet]);
                    if($success){
                        $transactionArr = [];
                        $transactionArr['user_id'] = $user->id;
                        $transactionArr['txn_no'] = rand(111111,9999999);
                        $transactionArr['reason'] = 'Amount Debited By Admin';
                        $transactionArr['amount'] = $request->amount;
                        $transactionArr['type'] = 'debit';
                        $transactionArr['status'] = 1;
                        DB::table('transactions')->insert($transactionArr);
                        return back()->with('alert-success', 'Debited  Successfully');
                    }else{
                        return back()->with('alert-danger', 'something went wrong, please try again...');
                    }

                }else{
                    return back()->with('alert-danger', 'Insufficient balance');
                }


            }

        }
    }




}











}




