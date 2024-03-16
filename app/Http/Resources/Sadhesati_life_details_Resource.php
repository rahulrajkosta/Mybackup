<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sadhesati_life_details_Resource extends JsonResource
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
		   'what_is_sadhesati' => $this->what_is_sadhesati,
			'report' => $this->report,
			'user_id' => $this->user_id,
			
        ];
    }
}
