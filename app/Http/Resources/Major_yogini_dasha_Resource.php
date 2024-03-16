<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Major_yogini_dasha_Resource extends JsonResource
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
		   'dasha_id' => $this->dasha_id,
			'dasha_name' => $this->dasha_name,
			'start_date' => $this->start_date,
			'end_date' => $this->end_date,
			'start_ms' => $this->start_ms,
			'end_ms' => $this->end_ms,
			'duration' => $this->duration,
			'user_id' => $this->user_id,
			
        ];
    }
}
