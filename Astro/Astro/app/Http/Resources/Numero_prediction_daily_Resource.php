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
		   'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'day' => $this->day,
			'month' => $this->month,
			'year' => $this->year,
			'name' => $this->name,
			
        ];
    }
}
