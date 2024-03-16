<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lalkitab_horoscope_Resource extends JsonResource
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
		   'sign' => $this->sign,
			'sign_name' => $this->sign_name,
			'planet' => $this->planet,
			'user_id' => $this->user_id,
			
        ];
    }
}
