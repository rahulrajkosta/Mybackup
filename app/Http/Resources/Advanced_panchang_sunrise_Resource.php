<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Advanced_panchang_sunrise_Resource extends JsonResource
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
		   'day' => $this->day,
			'sunset' => $this->sunset,
			'user_id' => $this->user_id,
			'sunrise' => $this->sunrise,
			'moonrise' => $this->moonrise,
			'moonset' => $this->moonset,
			'tithi' => $this->tithi,
			'nakshatra' => $this->nakshatra,
			'yog' => $this->yog,
			'karan' => $this->karan,
			'hindu_maah' => $this->hindu_maah,
			'paksha' => $this->paksha,
			'ritu' => $this->ritu,
			'sun_sign' => $this->sun_sign,
			'moon_sign' => $this->moon_sign,
			'ayana' => $this->ayana,
			'panchang_yog' => $this->panchang_yog,
			'vikram_samvat' => $this->vikram_samvat,
			'shaka_samvat' => $this->shaka_samvat,
			'shaka_samvat_name' => $this->shaka_samvat_name,
			'vkram_samvat_name' => $this->vkram_samvat_name,
			'disha_shool' => $this->disha_shool,
			'disha_shool_remedies' => $this->disha_shool_remedies,
			'nak_shool' => $this->nak_shool,
			'moon_nivas' => $this->moon_nivas,
			'abhijit_muhurta' => $this->abhijit_muhurta,
			'rahukaal' => $this->rahukaal,
			'guliKaal' => $this->guliKaal,
			'yamghant_kaal' => $this->yamghant_kaal,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			
        ];
    }
}
