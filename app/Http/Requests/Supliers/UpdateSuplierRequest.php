<?php

namespace App\Http\Requests\Supliers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuplierRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:supliers,email,' . $this->route('suplier')->id],
            'shop_name' => ['required', 'string', 'unique:supliers,shop_name,' . $this->route('suplier')->id],
            'phone_number' => ['required', 'string', 'unique:supliers,phone_number,' . $this->route('suplier')->id],
            'address' => ['required', 'string'],
            'image' => ['nullable', 'mimes:png,jpg,jpeg'],
        ];
    }
}
