<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
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
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max file size
            'country_name' => 'required|string|max:255',
            'mobile_no' => [
                'nullable',
                'string',
                'max:15',
                Rule::unique('customers')->ignore($this->customer),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('customers')->ignore($this->customer),
            ],
            'business_category' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
        ];
    }
}
