<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'sub_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'background' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'text_align' => 'nullable|in:Left,Right'
        ];
    }
}
