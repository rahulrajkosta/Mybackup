<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Monthly_panchang_Resource extends JsonResource
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
		   'year' => $this->year,
			'month' => $this->month,
			'panchang' => $this->panchang,
			'user_id' => $this->user_id,
			
        ];
    }
}
