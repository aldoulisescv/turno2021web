<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'id' => $this->id,
            'enabled' => $this->enabled,
            'resource_id' => $this->resource_id,
            'start_hour' => $this->start_hour,
            'end_hour' => $this->end_hour,
            'sunday' => $this->sunday,
            'monday' => $this->monday,
            'tuesday' => $this->tuesday,
            'wednesday' => $this->wednesday,
            'thrusday' => $this->thrusday,
            'friday' => $this->friday,
            'saturday' => $this->saturday,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
