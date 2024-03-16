<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Major_vdasha_Resource extends JsonResource
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
		   'planet' => $this->planet,
			'start' => $this->start,
			'end' => $this->end,
			'user_id' => $this->user_id,
			
        ];
    }
}
