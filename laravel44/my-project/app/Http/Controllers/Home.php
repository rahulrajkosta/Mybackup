<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Symfony\Component\HttpFoundation\File\File;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function insert(Request $pro)
    {
        $name=$pro->get('name');
        $state=$pro->get('state');
        $profile=$pro->file('profile')->getClientOriginalName();
        //Move Uploded file
        $pro->profile->move(public_path('profiles'),$profile);
        //return $pro->input();
        $file= new profile();
        $file->name=$name;
        $file->profile=$profile;
        $file->state=$state;
        $file->save();
        return redirect('display');
    
    }
    public function display()
    {
        $pfiles=profile::all();
        return view('display',['filedata'=>$pfiles]);
    }
    public function delete($id)
    {
        profile::find($id)->delete();
        //echo"<script>alert('Record Deleted');window.location.href='/display'</script>";
        return redirect('display');
    }
    
    
}
