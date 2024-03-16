<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Varshaphal_details_Resource extends JsonResource
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
		   'varshaphala_year' => $this->varshaphala_year,
			'age_of_native' => $this->age_of_native,
			'ayanamsha_name' => $this->ayanamsha_name,
			'ayanamsha_degree' => $this->ayanamsha_degree,
			'varshaphala_timestamp' => $this->varshaphala_timestamp,
			'native_birth_date' => $this->native_birth_date,
			'varshaphala_date' => $this->varshaphala_date,
			'panchadhikari' => $this->panchadhikari,
			'varshaphala_year_lord' => $this->varshaphala_year_lord,
			'varshaphala_muntha' => $this->varshaphala_muntha,
			'user_id' => $this->user_id,
			
        ];
    }
}
