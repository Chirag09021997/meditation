<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'starting_date' => 'nullable|date_format:Y-m-d H:i:s',
            'end_date' => 'nullable|date_format:Y-m-d H:i:s',
            'duration' => 'required|integer',
            'location' => 'nullable|string|max:255',
            'language' => 'required|string',
            'question' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_paid' => 'required|in:On,Off',
            'include_title' => 'nullable',
            'include_image' => 'nullable',
            'include_description' => 'nullable',
            'teaching_title' => 'nullable',
            'teaching_image' => 'nullable',
            'teaching_description' => 'nullable',
            'curriculum' => 'nullable',
            'fees' => 'required_if:is_paid,On|numeric|min:0',
            'total_joining' => 'required|integer|min:0',
            'host_id' => 'nullable',
            'youtube_video' => 'nullable|string'
        ];
    }
}
