<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCouponSystemRequest extends FormRequest
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
            'type' => 'nullable|in:Percentage,Amount',
            'coupon_code' => 'required|string|max:255',
            'value' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) {
                    if ($this->input('type') === 'Percentage') {
                        if ($value < 0 || $value > 100) {
                            return $fail('The value must be between 0 and 100 when type is Percentage.');
                        }
                    } elseif ($this->input('type') === 'Amount') {
                        if ($value <= 0) {
                            return $fail('The value must be greater than 0 when type is Amount.');
                        }
                    }
                },
            ],
            'start_date' => 'nullable|date|after_or_equal:today',
            'end_date' => 'nullable|date|after:start_date',
        ];
    }
}
