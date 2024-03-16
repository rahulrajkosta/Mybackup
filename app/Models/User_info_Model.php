<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Token_model;
use App\Models\User;
class User_info_Model extends Model
{
    use HasFactory;
    protected $table = 'user_info';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id'];
    /**
     * To Fetch All Data from a table
     */
	
	public function index()
    {
        return User_info_Model::where("status","!=","D")->get();
    }
	
    /**
     * To Store Data in a table
     */
	
    public function store($input){
       // print_r($input);

       return User_info_Model::insertGetId($input);

    }
	
    /**
     * To show one Data from a table
     */
	
    public function show($id)
	{
        return User_info_Model::where("status","!=","D")->find($id);
    }
	
    /**
     * To Edit Data in a table
     */
	
    public function edit($request,$input)
    { 
       return User_info_Model::where('id', $request->id)->update($input);
               
    }
	
    /**
     * To Disbale Data in a table, practically viewed as deleted
     */
	
    public function remove($request){
        $request->status = "D";
       $request->save();
                
    }
    public function curl_data($token){
        $token=hash('sha256',$token);
        $dta=User_info_Model::select("day as date","month","year","hour","min as minute","lon as longitude","lat as latitude","tzone as timezone","birth_place")->where('user_id',Token_model::select('tokenable_id')->where('token',$token)->first()->toArray())->first()->toArray();
        $dta['name']=User::select("name")->where('id',Token_model::select('tokenable_id')->where('token',$token)->first()->toArray())->first()->toArray()['name'];
        $dta['user_id']=Token_model::select('tokenable_id')->where('token',$token)->first()->toArray()['tokenable_id'];
        return $dta;
    }
}
