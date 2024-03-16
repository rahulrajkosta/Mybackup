<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Birth_details_Resource extends JsonResource
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
		   'year' => $this->year,
			'month' => $this->month,
			'day' => $this->day,
			'hour' => $this->hour,
			'minute' => $this->minute,
			'latitude' => $this->latitude,
			'longitude' => $this->longitude,
			'timezone' => $this->timezone,
			'sunrise' => $this->sunrise,
			'sunset' => $this->sunset,
			'ayanamsha' => $this->ayanamsha,
			'user_id' => $this->user_id,
			
        ];
    }
}
