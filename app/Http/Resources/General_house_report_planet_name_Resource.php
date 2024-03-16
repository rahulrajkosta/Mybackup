<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class General_house_report_planet_name_Resource extends JsonResource
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
		   'planet' => $this->planet,
			'house_report' => $this->house_report,
			'user_id' => $this->user_id,
			
        ];
    }
}
