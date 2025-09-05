<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMeetingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'clinic'           => 'required|string|max:255',
            'dentist_name'     => 'required|string|max:255',
            'visit_date'       => 'required|string|max:255',
            'start_time'       => 'required|string|max:255',
            'duration'         => 'required|string|max:255', 
            'visit_type'       => 'required|string|max:255',
            'visit_purpose'    => 'required|string|max:255',
            'meeting_location' => 'required|string|max:255',
            'notes'            => 'nullable|string|max:1000', 
            'status'           => 'required|string|max:255',
            'lat'              =>'required',
            'long'             =>'required',
            'assinged_by'      =>'required',
         ];
    }
}
