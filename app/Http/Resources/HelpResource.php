<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HelpResource extends JsonResource
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
            'status_help_id' => $this->status_help_id,
            'user_id' => $this->user_id,
            'help_type' => $this->help_type,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
