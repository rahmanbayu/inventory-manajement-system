<?php

namespace App\Http\Requests\Supliers;

use Illuminate\Foundation\Http\FormRequest;

class CreateSuplierRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:supliers,email'],
            'shop_name' => ['required', 'string', 'unique:supliers,shop_name'],
            'phone_number' => ['required', 'string', 'unique:supliers,phone_number'],
            'address' => ['required', 'string'],
            'image' => ['required', 'mimes:png,jpg,jpeg'],
        ];
    }
}
