<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sub_yogini_dasha_dashacycle_dashaname_Resource extends JsonResource
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
			'user_id' => $this->user_id,
			
        ];
    }
}
