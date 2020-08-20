<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,jpeg,png'],
            'code' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'suplier_id' => ['required', 'numeric'],
            'buy_price' => ['required', 'numeric'],
            'sel_price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],
            'buy_at' => ['required', 'date'],
        ];
    }
}
