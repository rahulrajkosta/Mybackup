<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Game_rooms_Model extends Model
{
    use HasFactory;
    protected $table = 'game_rooms';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id'];
    /**
     * To Fetch All Data from a table
     */
	
	public function index()
    {
        return Game_rooms_Model::where("status","!=","D")->get();
    }
	
    /**
     * To Store Data in a table
     */
	
    public function store($input){
       // print_r($input);

       return Game_rooms_Model::insertGetId($input);

    }
	
    /**
     * To show one Data from a table
     */
	
    public function show($id)
	{
        return Game_rooms_Model::where("status","!=","D")->find($id);
    }
	
    /**
     * To Edit Data in a table
     */
	
    public function edit($request,$input)
    { 
       return Game_rooms_Model::where('id', $request->id)->update($input);
               
    }
	
    /**
     * To Disbale Data in a table, practically viewed as deleted
     */
	
    public function remove($request){
        $request->status = "D";
       $request->save();
                
    }

    public function get_room($contest_fee,$user_first)
    {
        $data= Game_rooms_Model::where('server_result',null)->where("status","!=","D")->where("contest_fee",$contest_fee)->where("user_2",null)->where("user_i","!=",$user_first)->inRandomOrder()->first();
		if($data)
        {
            return $data->toArray();
        }
        else{
            return $data;
        }
    }
	public function ifActiveRoom($contest_fee,$user_first){
		DB::enableQueryLog();
		$id=$user_first;
		$data= Game_rooms_Model::where(function ($query) use ($id) {
					$query->where('user_2', $id)
					->orWhere('user_i', $id);
				})
				->where(function ($query) {
					$query->where('u_1_result','!=','cancel')->where('u_2_result','!=','cancel')->whereNull('u_1_result')->orWhereNull('u_2_result');
				})->first();
		//dd(DB::getQueryLog());
		if($data)
        {
		
            return $data->toArray();
        }
        else{
            return $data;
        }
	}
	public function set_room($roomcode,$input){
		//DB::getQueryLog();
		return Game_rooms_Model::where('room_code', $roomcode)->update($input);
		//dd(DB::enableQueryLog());
	}
	public function find_user1($id,$roomcode){
		return Game_rooms_Model::where('user_i',$id)->where('room_code',$roomcode)->first();
	}
	public function find_user2($id,$roomcode){
		return Game_rooms_Model::where('user_2',$id)->where('room_code',$roomcode)->first();
	}
	public function total_game($id){
		return Game_rooms_Model::where('user_i',$id)->orwhere('user_2',$id)->count();
		
	}
	public function update_result($id,$input){
		 return Game_rooms_Model::where('room_code', $id)->orwhere('user_i', $id)->update($input);
	}
	public function getResult($id,$roomcode){
		//DB::enableQueryLog();
		return Game_rooms_Model::where('room_code',$roomcode)->where('user_i',$id)->orWhere('user_2',$id)->first()->toArray();
		//dd(DB::getQueryLog());
	}
}
