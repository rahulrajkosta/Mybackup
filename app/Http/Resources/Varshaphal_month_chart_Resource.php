<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Varshaphal_month_chart_Resource extends JsonResource
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
		   'month_id' => $this->month_id,
			'chart' => $this->chart,
			'user_id' => $this->user_id,
			
        ];
    }
}
