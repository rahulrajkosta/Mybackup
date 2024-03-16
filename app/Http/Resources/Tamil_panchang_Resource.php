<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tamil_panchang_Resource extends JsonResource
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
			'sunrise' => $this->sunrise,
			'sunset' => $this->sunset,
			'moonrise' => $this->moonrise,
			'moonset' => $this->moonset,
			'tithi' => $this->tithi,
			'nakshatra' => $this->nakshatra,
			'yog' => $this->yog,
			'karan' => $this->karan,
			'hindu_month' => $this->hindu_month,
			'tamil_month' => $this->tamil_month,
			'paksha' => $this->paksha,
			'ritu' => $this->ritu,
			'sun_sign' => $this->sun_sign,
			'moon_sign' => $this->moon_sign,
			'ayana' => $this->ayana,
			'vikram_samvat' => $this->vikram_samvat,
			'shaka_samvat' => $this->shaka_samvat,
			'shaka_samvat_name' => $this->shaka_samvat_name,
			'vkram_samvat_name' => $this->vkram_samvat_name,
			'abhijit_muhurta' => $this->abhijit_muhurta,
			'rahu_kaal' => $this->rahu_kaal,
			'gulik_kaal' => $this->gulik_kaal,
			'yamghant_kaal' => $this->yamghant_kaal,
			'dur_muhurtha' => $this->dur_muhurtha,
			'amrit_kaal' => $this->amrit_kaal,
			'varjyam' => $this->varjyam,
			'anandadi_yog' => $this->anandadi_yog,
			'user_id' => $this->user_id,
			
        ];
    }
}
