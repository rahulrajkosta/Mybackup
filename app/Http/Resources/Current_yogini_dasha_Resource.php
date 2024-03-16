<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Current_yogini_dasha_Resource extends JsonResource
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
		   'major_dasha' => $this->major_dasha,
			'sub_dasha' => $this->sub_dasha,
			'sub_sub_dasha' => $this->sub_sub_dasha,
			'user_id' => $this->user_id,
			
        ];
    }
}
