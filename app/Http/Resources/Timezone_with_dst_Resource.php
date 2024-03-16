<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Timezone_with_dst_Resource extends JsonResource
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
		   'timezone' => $this->timezone,
			'timezone_in_ms' => $this->timezone_in_ms,
			'date' => $this->date,
			'user_id' => $this->user_id,
			
        ];
    }
}
