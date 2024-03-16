<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Geo_details_Resource extends JsonResource
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
		   'geonames' => $this->geonames,
			'user_id' => $this->user_id,
			
        ];
    }
}
