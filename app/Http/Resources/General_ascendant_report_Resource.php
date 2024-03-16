<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class General_ascendant_report_Resource extends JsonResource
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
		   'asc_report' => $this->asc_report,
			'user_id' => $this->user_id,
			
        ];
    }
}
