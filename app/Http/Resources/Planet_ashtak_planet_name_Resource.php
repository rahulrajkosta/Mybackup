<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planet_ashtak_planet_name_Resource extends JsonResource
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
		   'ashtak_varga' => $this->ashtak_varga,
			'ashtak_points' => $this->ashtak_points,
			'user_id' => $this->user_id,
			
        ];
    }
}
