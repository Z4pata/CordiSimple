<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'date' => 'required|date|after:today',
            'time' => 'required',
            'location' => 'required|string|max:150',
            'max_seats' => 'required|integer|min:1',
            'status' => 'required|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The event name is required.',
            'description.required' => 'The event description is required.',
            'date.required' => 'The event date is required.',
            'date.after' => 'The event date must be after today.',
            'time.required' => 'The event time is required.',
            'location.required' => 'The event location is required.',
            'max_seats.required' => 'You must specify the maximum number of seats.',
            'max_seats.integer' => 'The maximum number of seats must be an integer.',
            'max_seats.min' => 'The maximum number of seats must be at least 1.',
            'status.required' => 'The event status is required.',
        ];
    }
}
