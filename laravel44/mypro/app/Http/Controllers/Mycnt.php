<?php
namespace App\Http\Controllers;
use App\Models\query;
use Illuminate\Http\Request;

class Mycnt extends Controller
{
    public function home(){
        return view("intex");
    }
    public function insert(Request $rq){
        $name=$rq->get('name');
        //img insert
        $img=$rq->file('profiles')->getClientOriginalName();
        $rq->profiles->move(public_path('/images/'),$img);
        //img end
        $state=$rq->get('state');
        $pro=new query;
        $pro->name=$name;
        $pro->profile=$img;
        $pro->state=$state;
        $pro->save();
        echo "<script>alert('Data saved successfully');window.location.href='../display';</script>";

        
    }
    public function display(){
        $data=query::all();
        return view('display',['data'=>$data]);

    }
    public function update()
    {
        
    }
    public function delete()
    {
        
    }
}
