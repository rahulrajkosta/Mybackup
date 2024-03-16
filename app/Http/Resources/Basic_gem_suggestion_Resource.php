<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Basic_gem_suggestion_Resource extends JsonResource
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
		   'LIFE' => $this->LIFE,
			'BENEFIC' => $this->BENEFIC,
			'LUCKY' => $this->LUCKY,
			'user_id' => $this->user_id,
			
        ];
    }
}
