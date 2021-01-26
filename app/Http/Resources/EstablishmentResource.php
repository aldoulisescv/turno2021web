<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstablishmentResource extends JsonResource
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
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'name' => $this->name,
            'logo' => $this->logo,
            'stepping' => $this->stepping,
            'street' => $this->street,
            'num_ext' => $this->num_ext,
            'num_int' => $this->num_int,
            'postal_code' => $this->postal_code,
            'zone' => $this->zone,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'email' => $this->email,
            'phone' => $this->phone,
            'holidays_extra' => $this->holidays_extra,
            'holidays_official' => $this->holidays_official,
            'help_tooltip' => $this->help_tooltip,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
