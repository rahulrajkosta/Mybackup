<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Basic_panchang_sunrise_Resource extends JsonResource
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
			'yog' => $this->yog,
			'nakshatra' => $this->nakshatra,
			'karan' => $this->karan,
			'sunrise' => $this->sunrise,
			'sunset' => $this->sunset,
			'user_id' => $this->user_id,
			
        ];
    }
}
