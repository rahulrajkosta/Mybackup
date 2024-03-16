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
use App\Blocks;
use App\Flats;
use Yajra\DataTables\DataTables;


use Storage;
use DB;
use Hash;

use PhpOffice\PhpWord\IOFactory;




Class SubCategoryController extends Controller
{

    private $ADMIN_ROUTE_NAME;

    public function __construct()
    {
        $this->ADMIN_ROUTE_NAME = CustomHelper::getAdminRouteName();
    }

	public function index(Request $request)
    {
		$subcategories = SubCategory::where('is_delete','0')->orderBy('id','desc');

        if(!empty($request->search)){
            $subcategories->where('name', 'like', '%' . $request->search . '%');
        }
        $subcategories = $subcategories->paginate(10);



        $data['subcategories'] = $subcategories;

        return view('admin.subcategories.index',$data);
    }

    
    public function add(Request $request)
    {


         $details = [];
    
        $id = isset($request->id) ? $request->id : 0;

        $subcategories = '';

        if(is_numeric($id) && $id > 0)
        {
            $subcategories = SubCategory::find($id);
            if(empty($subcategories))
            {
                return redirect($this->ADMIN_ROUTE_NAME.'/subcategories');
            }
        }
       

        if($request->method() == "POST" || $request->method() == "post")
        {
            
           // prd($request->toArray());

            if(empty($back_url))
            {
                 $back_url = $this->ADMIN_ROUTE_NAME.'/subcategories';
            }

           
            

            if(is_numeric($request->id) && $request->id > 0)
            {
                 $details['name'] = 'required';
                 $details['category_id'] = 'required';
                
              

            }else{

                 $details['name'] = 'required';
                 $details['category_id'] = 'required';

            }

                $this->validate($request , $details);    



           $createdDetails = $this->save($request , $id);

           if($createdDetails)
           {
                $alert_msg = "SubCategory Created Successfully";

                if(is_numeric($id) & $id > 0)
                {
                    $alert_msg = "SubCategory Updated Successfully";
                } 
                return redirect(url($back_url))->with('alert-success',$alert_msg);
           }else{

            return back()->with('alert-danger', 'something went wrong, please try again or contact the administrator.');
           }

        }

        $page_Heading = "Add SubCategory";
        if(isset($subcategories->id))
        {
            $name = $subcategories->name;
            $page_Heading = 'Update -'.$name;

        }

        $details['page_Heading'] = $page_Heading;
        $details['id'] = $id;
        $details['subcategories'] = $subcategories;
        $details['categories'] = Category::where('is_delete',0)->get();


        return view('admin.subcategories.form',$details);

    }


    public function save(Request $request, $id = 0)
    {
        $details = $request->except(['_token', 'back_url']);


        $old_img = '';

        $categories = new SubCategory;

        if(is_numeric($id) && $id > 0)
        {
            $exist = SubCategory::find($id);

            if(isset($exist->id) && $exist->id == $id)
            {   
                $categories = $exist;

                $old_img = $exist->image;

            }

        }

        foreach($details as $key => $val)
        {
            $categories->$key = $val;
        }

        $isSaved = $categories->save();

        if($isSaved)
        {
            $this->saveImage($request , $categories , $old_img);
        }

        return $isSaved;
    }

    private function saveImage($request, $categories, $oldImg=''){

    $file = $request->file('image');

    //prd($file);
    if ($file) {
        $path = 'subcategory/';
        $thumb_path = 'subcategory/thumb/';
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
            $categories->image = $image;
            $categories->save();         
        }

        if(!empty($uploaded_data)){   
            return  $uploaded_data;
        }  

    }

}

public function change_subcategory_status(Request $request){
  $id = isset($request->id) ? $request->id :'';
  $status = isset($request->status) ? $request->status :'';

  $categories = SubCategory::where('id',$id)->first();
  if(!empty($categories)){

   Category::where('id',$id)->update(['status'=>$status]);
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

     if(empty($back_url))
    {
        $back_url = $this->ADMIN_ROUTE_NAME.'/subcategories';
    }

     if(is_numeric($id) && $id > 0)
     {
        //echo $id;
        $is_delete = SubCategory::where('id', $id)->update(['is_delete'=> '1']);
     }

     //die;

     if(!empty($is_delete))
     {
        return back()->with('alert-success', 'SubCategory Deleted Successfully');
     }else{

        return back()->with('alert-danger', 'something went wrong, please try again...');
     }
    
}

   
}




