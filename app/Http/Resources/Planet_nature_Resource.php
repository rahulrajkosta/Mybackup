<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planet_nature_Resource extends JsonResource
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
		   'GOOD' => $this->GOOD,
			'BAD' => $this->BAD,
			'KILLER' => $this->KILLER,
			'YOGAKARAKA' => $this->YOGAKARAKA,
			'user_id' => $this->user_id,
			
        ];
    }
}
