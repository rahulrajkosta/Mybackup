<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Panchang_festival_Resource extends JsonResource
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
		   'festivals' => $this->festivals,
			'user_id' => $this->user_id,
			
        ];
    }
}
