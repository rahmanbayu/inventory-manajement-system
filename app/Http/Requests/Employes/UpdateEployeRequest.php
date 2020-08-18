<?php

namespace App\Http\Requests\Employes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEployeRequest extends FormRequest
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
            'email' => ['required', 'email', 'unique:employes,email,' . $this->route('employe')->id],
            'phone_number' => ['required', 'string', 'unique:employes,phone_number,' . $this->route('employe')->id],
            'nik' => ['required', 'string', 'unique:employes,nik,' . $this->route('employe')->id],
            'birth_date' => ['required'],
            'salary' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'image' => ['nullable', 'mimes:jpg,jpeg,png'],
        ];
    }
}
