<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Moon_biorhythm_Resource extends JsonResource
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
		   'birth_pakshi' => $this->birth_pakshi,
			'birth_pakshi_details' => $this->birth_pakshi_details,
			'requested_day' => $this->requested_day,
			'activity_cycle' => $this->activity_cycle,
			'user_id' => $this->user_id,
			
        ];
    }
}
