<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Varshaphal_panchavargeeya_bala_Resource extends JsonResource
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
		   'kshetra_bala' => $this->kshetra_bala,
			'uccha_bala' => $this->uccha_bala,
			'hadda_bala' => $this->hadda_bala,
			'drekkana_bala' => $this->drekkana_bala,
			'navmansha_bala' => $this->navmansha_bala,
			'total_bala' => $this->total_bala,
			'final_bala' => $this->final_bala,
			'user_id' => $this->user_id,
			
        ];
    }
}
