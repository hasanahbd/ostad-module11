<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'sku' => 'string|required|unique:products,sku',
            'name' => 'string|required',
            'description' => 'string|required',
            'price' => 'numeric|required:min:0.01',
            'stock' => 'numeric|required|min:1'
        ];
    }
}
