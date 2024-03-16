<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Manglik_Resource extends JsonResource
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
		   'manglik_present_rule' => $this->manglik_present_rule,
			'is_mars_manglik_cancelled' => $this->is_mars_manglik_cancelled,
			'manglik_status' => $this->manglik_status,
			'percentage_manglik_present' => $this->percentage_manglik_present,
			'percentage_manglik_after_cancellation' => $this->percentage_manglik_after_cancellation,
			'manglik_report' => $this->manglik_report,
			'is_present' => $this->is_present,
			'user_id' => $this->user_id,
			
        ];
    }
}
