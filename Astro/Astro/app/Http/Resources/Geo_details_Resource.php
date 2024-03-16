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
		   'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'place' => $this->place,
			'maxRows' => $this->maxRows,
			
        ];
    }
}
