<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
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
            'establishment_id' => $this->establishment_id,
            'name' => $this->name,
            'duration' => $this->duration,
            'cost' => $this->cost,
            'max_days_schedule' => $this->max_days_schedule,
            'max_hours_schedule' => $this->max_hours_schedule,
            'max_minutes_schedule' => $this->max_minutes_schedule,
            'min_days_schedule' => $this->min_days_schedule,
            'min_hours_schedule' => $this->min_hours_schedule,
            'min_minutes_schedule' => $this->min_minutes_schedule,
            'standby_time' => $this->standby_time,
            'time_btwn_session' => $this->time_btwn_session,
            'end_date' => $this->end_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
