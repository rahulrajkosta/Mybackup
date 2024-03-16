<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Basic_panchang_Resource extends JsonResource
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
		   'day' => $this->day,
			'tithi' => $this->tithi,
			'nakshatra' => $this->nakshatra,
			'yog' => $this->yog,
			'karan' => $this->karan,
			'sunrise' => $this->sunrise,
			'sunset' => $this->sunset,
			'vedic_sunrise' => $this->vedic_sunrise,
			'vedic_sunset' => $this->vedic_sunset,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'user_id' => $this->user_id,
			
        ];
    }
}
