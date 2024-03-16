<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Kalsarpa_details_Resource extends JsonResource
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
		   'present' => $this->present,
			'type' => $this->type,
			'one_line' => $this->one_line,
			'report' => $this->report,
			'user_id' => $this->user_id,
			
        ];
    }
}
