<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Numero_prediction_daily_Resource extends JsonResource
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
		   'prediction' => $this->prediction,
			'lucky_color' => $this->lucky_color,
			'lucky_number' => $this->lucky_number,
			'prediction_date' => $this->prediction_date,
			'user_id' => $this->user_id,
			
        ];
    }
}
