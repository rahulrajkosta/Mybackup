<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Lalkitab_houses_Resource extends JsonResource
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
		   'khana_number' => $this->khana_number,
			'maalik' => $this->maalik,
			'pakka_ghar' => $this->pakka_ghar,
			'kismat' => $this->kismat,
			'soya' => $this->soya,
			'exalt' => $this->exalt,
			'debilitated' => $this->debilitated,
			'user_id' => $this->user_id,
			
        ];
    }
}
