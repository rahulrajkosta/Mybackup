<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Find_nakshatra_nakshatraname_Resource extends JsonResource
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
		   'nakshatra_to_find' => $this->nakshatra_to_find,
			'find_date' => $this->find_date,
			'past_matches' => $this->past_matches,
			'future_matches' => $this->future_matches,
			'user_id' => $this->user_id,
			
        ];
    }
}
