<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProspectResource extends JsonResource
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
            'name' => $this->name,
            'owner' => $this->owner,
            'image' => $this->image,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'address' => $this->address,
            'phone' => $this->phone,
            'sent_wa' => $this->sent_wa,
            'facebook' => $this->facebook,
            'sent_fb' => $this->sent_fb,
            'instagram' => $this->instagram,
            'sent_ig' => $this->sent_ig,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
