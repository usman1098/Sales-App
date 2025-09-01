<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'city_id'          => $this->city_id,
            'line_manger_id'   => $this->line_manger_id,
            'employee_code'    => $this->employee_code,
            'employee_name'    => $this->employee_name,
            'phone'            => $this->phone,
            'employee_email'   => $this->employee_email,
            'designation'      => $this->designation,
            'active'           => $this->active,
            'role'             => 'sales',   
            'created_at'       => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at'       => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
