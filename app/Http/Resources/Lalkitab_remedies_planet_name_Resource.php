<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lalkitab_remedies_planet_name_Resource extends JsonResource
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
			'house' => $this->house,
			'lal_kitab_desc' => $this->lal_kitab_desc,
			'lal_kitab_remedies' => $this->lal_kitab_remedies,
			'user_id' => $this->user_id,
			
        ];
    }
}
