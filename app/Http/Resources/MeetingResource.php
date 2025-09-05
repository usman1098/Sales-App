<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         return [
            'id'               => $this->id,
            'clinic'           => $this->clinic,
            'dentist_name'     => $this->dentist_name,
            'visit_date'       => $this->visit_date,
            'start_time'       => $this->start_time,
            'end_time'         => $this->end_time,
            'duration'         => $this->duration,
            'visit_type'       => $this->visit_type,
            'visit_purpose'    => $this->visit_purpose,
            'meeting_location' => $this->meeting_location,
            'lat'              => $this->lat,
            'long'             => $this->long,
            'assinged_by'      => $this->assinged_by,
            'notes'            => $this->notes,
            'status'           => $this->status,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
        ];
    }
}
