<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planet_panchang_Resource extends JsonResource
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
		   'planet_id' => $this->planet_id,
			'planet_name' => $this->planet_name,
			'fullDegree' => $this->fullDegree,
			'normDegree' => $this->normDegree,
			'isRetro' => $this->isRetro,
			'sign' => $this->sign,
			'sign_lord' => $this->sign_lord,
			'nakshatra' => $this->nakshatra,
			'nakshatra_lord' => $this->nakshatra_lord,
			'user_id' => $this->user_id,
			
        ];
    }
}
