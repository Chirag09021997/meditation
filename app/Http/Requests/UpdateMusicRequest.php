<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMusicRequest extends FormRequest
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
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'audio_thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'audio_upload' => 'nullable|mimes:mp3,wav,ogg|max:2048',
            'premium_type' => 'nullable|string',
            'total_view' => 'required|integer|min:0',
            'premium_type' => 'required|boolean',
        ];
    }
}
