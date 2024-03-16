<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Current_vdasha_date_Model extends Model
{
    use HasFactory;
    protected $table = 'current_vdasha_date';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id'];
    /**
     * To Fetch All Data from a table
     */
	
	public function index()
    {
        return Current_vdasha_date_Model::where("status","!=","D")->get();
    }
	
    /**
     * To Store Data in a table
     */
	
    public function store($input){
       // print_r($input);

       return Current_vdasha_date_Model::insertGetId($input);

    }
	
    /**
     * To show one Data from a table
     */
	
    public function show($id)
	{
        return Current_vdasha_date_Model::where("status","!=","D")->find($id);
    }
	
    /**
     * To Edit Data in a table
     */
	
    public function edit($request,$input)
    { 
       return Current_vdasha_date_Model::where('id', $request->id)->update($input);
               
    }
	
    /**
     * To Disbale Data in a table, practically viewed as deleted
     */
	
    public function remove($request){
        $request->status = "D";
       $request->save();
                
    }
}
