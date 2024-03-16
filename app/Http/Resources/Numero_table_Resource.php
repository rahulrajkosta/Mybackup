<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Numero_table_Resource extends JsonResource
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
		   'name' => $this->name,
			'date' => $this->date,
			'destiny_number' => $this->destiny_number,
			'radical_number' => $this->radical_number,
			'name_number' => $this->name_number,
			'evil_num' => $this->evil_num,
			'fav_color' => $this->fav_color,
			'fav_day' => $this->fav_day,
			'fav_god' => $this->fav_god,
			'fav_mantra' => $this->fav_mantra,
			'fav_metal' => $this->fav_metal,
			'fav_stone' => $this->fav_stone,
			'fav_substone' => $this->fav_substone,
			'friendly_num' => $this->friendly_num,
			'neutral_num' => $this->neutral_num,
			'radical_num' => $this->radical_num,
			'radical_ruler' => $this->radical_ruler,
			'user_id' => $this->user_id,
			
        ];
    }
}
