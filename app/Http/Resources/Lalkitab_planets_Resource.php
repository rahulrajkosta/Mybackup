<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lalkitab_planets_Resource extends JsonResource
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
			'rashi' => $this->rashi,
			'soya' => $this->soya,
			'position' => $this->position,
			'nature' => $this->nature,
			'user_id' => $this->user_id,
			
        ];
    }
}
