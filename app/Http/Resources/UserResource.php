<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'enabled' => $this->enabled,
            'email' => $this->email,
            'establishment_id' => $this->establishment_id,
            'user_name' => $this->user_name,
            'lastname' => $this->lastname,
            'ref_code' => $this->ref_code,
            'imagen' => $this->imagen,
            'phone' => $this->phone,
            'estabs' => $this->estabs,
            'clients' => $this->clients,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
