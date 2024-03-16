<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Astro_details_Resource extends JsonResource
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
		   'ascendant' => $this->ascendant,
			'Varna' => $this->Varna,
			'Vashya' => $this->Vashya,
			'Yoni' => $this->Yoni,
			'Gan' => $this->Gan,
			'Nadi' => $this->Nadi,
			'sign' => $this->sign,
			'NaksahtraLord' => $this->NaksahtraLord,
			'Charan' => $this->Charan,
			'Yog' => $this->Yog,
			'Karan' => $this->Karan,
			'Tithi' => $this->Tithi,
			'yunja' => $this->yunja,
			'tatva' => $this->tatva,
			'name_alphabet' => $this->name_alphabet,
			'paya' => $this->paya,
			'user_id' => $this->user_id,
			
        ];
    }
}
