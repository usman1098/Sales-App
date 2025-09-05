<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class ClinicDetailResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'clinic_id'      => $this->clinic_id,
            'city'           => $this->whenLoaded('city', function () {
                return [
                    'id'   => $this->city->id,
                    'name' => $this->city->name ?? null,
                ];
            }),
            'area'           => $this->whenLoaded('area', function () {
                return [
                    'id'   => $this->area->id,
                    'name' => $this->area->name ?? null,
                ];
            }),
            'clinic_address' => $this->clinic_address,
            'created_by'     => $this->created_by,
            'updated_by'     => $this->updated_by,
            'created_at'     => optional($this->created_at)->toDateTimeString(),
            'updated_at'     => optional($this->updated_at)->toDateTimeString(),
        ];
    }
}
