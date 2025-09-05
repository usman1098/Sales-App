<?php

namespace App\Http\Resources;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClinicResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'clinic_name'  => $this->clinic_name,
            'created_by'   => $this->created_by,
            'updated_by'   => $this->updated_by,
            'created_at'   => optional($this->created_at)->toDateTimeString(),
            'updated_at'   => optional($this->updated_at)->toDateTimeString(),
            'clinic_details' => ClinicDetailResource::collection(
                $this->whenLoaded('clinicDetail')
            ),
        ];
    }
}
