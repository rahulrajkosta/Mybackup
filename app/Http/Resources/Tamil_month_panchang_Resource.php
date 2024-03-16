<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tamil_month_panchang_Resource extends JsonResource
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
		   'month' => $this->month,
			'year' => $this->year,
			'panchang_data' => $this->panchang_data,
			'user_id' => $this->user_id,
			
        ];
    }
}
