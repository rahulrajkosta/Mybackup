<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Varshaphal_harsha_bala_Resource extends JsonResource
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
		   'stana_bala' => $this->stana_bala,
			'ucchaswachetri_bala' => $this->ucchaswachetri_bala,
			'gender_bala' => $this->gender_bala,
			'dinratri_bala' => $this->dinratri_bala,
			'total_bala' => $this->total_bala,
			'user_id' => $this->user_id,
			
        ];
    }
}
