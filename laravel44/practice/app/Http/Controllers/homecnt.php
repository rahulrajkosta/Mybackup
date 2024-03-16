<?php

namespace App\Http\Controllers;
use App\Models\demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class homecnt extends Controller
{
    public function insert(Request $instert){
        $name=$instert->get('name');
        $img=$instert->file('profiles')->getClientOriginalName();
        $instert->profiles->move(public_path('/Images/'),$img);
        $state=$instert->get('state');
        $pro=new demo;
        $pro->name=$name;
        $pro->profile=$img;
        $pro->state=$state;
        $pro->save();
        echo "<script>alert('Record Saved Successfully');window.location.href='/display'</script>";
        }
        public function display(){
            $data=demo::all();
            return view('display',['data'=>$data]);
        }
        public function delete($id){
            $delete=demo::find($id);
            $file =public_path('/Images/').$delete->profile;
            if(File::exists($file))
            {
                File::delete($file);

            }
            demo::find($id)->delete();
            echo "<script>alert('Data Deleted');window.location.href='../'</script>";
        }
}
