<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Varshaphal_mudda_dasha_Resource extends JsonResource
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
			'duration' => $this->duration,
			'dasha_start' => $this->dasha_start,
			'dasha_end' => $this->dasha_end,
			'user_id' => $this->user_id,
			
        ];
    }
}
