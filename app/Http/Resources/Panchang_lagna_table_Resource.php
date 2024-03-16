<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Panchang_lagna_table_Resource extends JsonResource
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
		   'lagna' => $this->lagna,
			'start_time' => $this->start_time,
			'end_time' => $this->end_time,
			'user_id' => $this->user_id,
			
        ];
    }
}
