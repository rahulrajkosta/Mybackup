<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sadhesati_current_status_Resource extends JsonResource
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
		   'consideration_date' => $this->consideration_date,
			'is_saturn_retrograde' => $this->is_saturn_retrograde,
			'moon_sign' => $this->moon_sign,
			'saturn_sign' => $this->saturn_sign,
			'is_undergoing_sadhesati' => $this->is_undergoing_sadhesati,
			'sadhesati_status' => $this->sadhesati_status,
			'what_is_sadhesati' => $this->what_is_sadhesati,
			'user_id' => $this->user_id,
			
        ];
    }
}
