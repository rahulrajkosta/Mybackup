<?php

namespace App\Models\Response;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Token_model;
use App\Models\User;
class Basic_panchang extends Model
{
    use HasFactory;
    protected $table = 'basic_panchang';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id'];
    protected $connection = 'mysql_second';
    /**
     * To Fetch All Data from a table
     */
	
	
	
    /**
     * To Store Data in a table
     */
	
    public function store($input,$id){
        $input['user_id']=$id;
       return Basic_panchang::insert($input);

    }
	
    /**
     * To show one Data from a table
     */
	
    public function show($id)
	{
        return Basic_panchang::where("status","!=","D")->find($id);
    }
	
    /**
     * To Edit Data in a table
     */
	
    /**
     * To Disbale Data in a table, practically viewed as deleted
     */
    
}
