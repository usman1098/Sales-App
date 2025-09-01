<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'state_id'       => $this->state_id,
            'name'           => $this->name,
            'sef_url'        => $this->sef_url,
            'type'           => $this->type,
            'publish_status' => $this->publish_status,
            'created_at'     => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at'     => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
    }
}
