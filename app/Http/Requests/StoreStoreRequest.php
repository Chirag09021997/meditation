<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreStoreRequest extends FormRequest
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
            'product_name' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'product_thumb' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_preview' => 'nullable|string',
            'total_stock' => 'required|integer|min:0',
            'total_sale' => 'nullable|integer|min:0',
            'tags' => 'nullable|string|max:255',
            'product_photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'finance_country' => 'nullable',
            'finance_price' => 'nullable',
            'finance_discount' => 'nullable',
            'finance_deliverycharge' => 'nullable',
            'currency_symbol' => 'nullable',
        ];
    }
}
