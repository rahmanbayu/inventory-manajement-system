<?php

namespace App\Http\Requests\Employes;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:employes'],
            'phone_number' => ['required', 'string'],
            'nik' => ['required', 'string'],
            'birth_date' => ['required'],
            'salary' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,jpeg,png'],
        ];
    }
}
