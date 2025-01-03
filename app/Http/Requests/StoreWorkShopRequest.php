<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkShopRequest extends FormRequest
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
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
            'hi_video_upload' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:204800',
            'en_video_upload' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:204800',
            'hi_video_url' => 'nullable|url',
            'en_video_url' => 'nullable|url',
            'interest_type' => 'nullable|array',
            'workshop_category' => 'nullable|array',
            'second' => 'nullable|integer|min:0',
            'total_view' => 'required|integer|min:0',
            'premium_type' => 'required|boolean',
        ];
    }
}
