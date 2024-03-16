<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Daily_nakshatra_consolidated_Resource extends JsonResource
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
		   'birth_moon_sign' => $this->birth_moon_sign,
			'birth_moon_nakshatra' => $this->birth_moon_nakshatra,
			'prediction' => $this->prediction,
			'prediction_date' => $this->prediction_date,
			'user_id' => $this->user_id,
			
        ];
    }
}
