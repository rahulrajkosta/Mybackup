<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Horo_chart_image_chartid_Resource extends JsonResource
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
		   'svg' => $this->svg,
			'user_id' => $this->user_id,
			
        ];
    }
}
