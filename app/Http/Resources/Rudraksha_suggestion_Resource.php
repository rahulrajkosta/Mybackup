<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rudraksha_suggestion_Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           // 'id' => $this->id,
		   'img_url' => $this->img_url,
			'rudraksha_key' => $this->rudraksha_key,
			'name' => $this->name,
			'recommend' => $this->recommend,
			'detail' => $this->detail,
			'user_id' => $this->user_id,
			
        ];
    }
}
