<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Numero_place_vastu_Resource extends JsonResource
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
		   'title' => $this->title,
			'description' => $this->description,
			'user_id' => $this->user_id,
			
        ];
    }
}
