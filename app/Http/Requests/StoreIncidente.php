<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncidente extends FormRequest
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
            'descripcionIncidente' => 'required',
            'fechaIncidente' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'descripcionIncidente.required' => 'Se requiere la descripción del incidente.',
            'fechaIncidente.required'  => 'La fecha del incidente es requerida.',
        ];
    }
}
