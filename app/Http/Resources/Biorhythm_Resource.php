<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Biorhythm_Resource extends JsonResource
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
		   'physical' => $this->physical,
			'emotional' => $this->emotional,
			'intellectual' => $this->intellectual,
			'average' => $this->average,
			'user_id' => $this->user_id,
			
        ];
    }
}
