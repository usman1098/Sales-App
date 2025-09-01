<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMeetingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'clinic'           => 'sometimes|required|string|max:255',
            'dentist_name'     => 'sometimes|required|string|max:255',
            'visit_date'       => 'sometimes|required|string|max:255',
            'start_time'       => 'sometimes|required|string|max:255',
            'duration'         => 'sometimes|required|string|max:255',
            'visit_type'       => 'sometimes|required|string|max:255',
            'visit_purpose'    => 'sometimes|required|string|max:255',
            'meeting_location' => 'sometimes|required|string|max:255',
            'notes'            => 'sometimes|nullable|string|max:1000',
            'status'           => 'sometimes|required|string|max:255',
        ];
    }
}

