<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Horo_chart_image_chartid_Resource extends JsonResource
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
		   'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'day' => $this->day,
			'month' => $this->month,
			'year' => $this->year,
			'hour' => $this->hour,
			'min' => $this->min,
			'lat' => $this->lat,
			'lon' => $this->lon,
			'tzone' => $this->tzone,
			'planetColor' => $this->planetColor,
			'signColor' => $this->signColor,
			'lineColor' => $this->lineColor,
			'chartType' => $this->chartType,
			
        ];
    }
}
