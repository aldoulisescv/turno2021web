<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceResource extends JsonResource
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
            'selectable' => $this->selectable,
            'order_alpha' => $this->order_alpha,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
