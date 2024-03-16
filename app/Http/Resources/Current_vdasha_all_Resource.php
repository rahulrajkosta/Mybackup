<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Current_vdasha_all_Resource extends JsonResource
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
		   'major' => $this->major,
			'minor' => $this->minor,
			'sub_minor' => $this->sub_minor,
			'sub_sub_minor' => $this->sub_sub_minor,
			'sub_sub_sub_minor' => $this->sub_sub_sub_minor,
			'user_id' => $this->user_id,
			
        ];
    }
}
