<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ghat_chakra_Resource extends JsonResource
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
		   'month' => $this->month,
			'tithi' => $this->tithi,
			'day' => $this->day,
			'nakshatra' => $this->nakshatra,
			'yog' => $this->yog,
			'karan' => $this->karan,
			'pahar' => $this->pahar,
			'moon' => $this->moon,
			'user_id' => $this->user_id,
			
        ];
    }
}
