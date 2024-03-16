<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Major_chardasha_Resource extends JsonResource
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
		   'sign_id' => $this->sign_id,
			'sign_name' => $this->sign_name,
			'duration' => $this->duration,
			'start_date' => $this->start_date,
			'end_date' => $this->end_date,
			'user_id' => $this->user_id,
			
        ];
    }
}
