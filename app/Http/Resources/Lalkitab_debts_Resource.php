<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lalkitab_debts_Resource extends JsonResource
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
		   'debt_name' => $this->debt_name,
			'indications' => $this->indications,
			'events' => $this->events,
			'user_id' => $this->user_id,
			
        ];
    }
}
