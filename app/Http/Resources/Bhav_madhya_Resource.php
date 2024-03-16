<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bhav_madhya_Resource extends JsonResource
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
		   'ascendant' => $this->ascendant,
			'midheaven' => $this->midheaven,
			'ayanamsha' => $this->ayanamsha,
			'bhav_madhya' => $this->bhav_madhya,
			'bhav_sandhi' => $this->bhav_sandhi,
			'user_id' => $this->user_id,
			
        ];
    }
}
