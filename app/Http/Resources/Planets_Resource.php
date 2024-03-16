<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Planets_Resource extends JsonResource
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
			'speed' => $this->speed,
			'isRetro' => $this->isRetro,
			'sign' => $this->sign,
			'signLord' => $this->signLord,
			'nakshatra' => $this->nakshatra,
			'nakshatraLord' => $this->nakshatraLord,
			'house' => $this->house,
			'user_id' => $this->user_id,
			
        ];
    }
}
