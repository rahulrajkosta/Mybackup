<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Validate_user_Model as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Validate_user_Model extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	protected $table = 'personal_access_tokens';

	public function validate(){
		$token=request()->bearerToken();
        $htoken=hash('sha256', $token);
		Validate_user_Model::->where('token', $htoken)->first();
	}
}
