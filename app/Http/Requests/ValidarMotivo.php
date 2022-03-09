<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarMotivo extends FormRequest
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
         if ($this->route('id')) {
    return [
        'nombre_motivo' => 'required|max:50|unique:motivos,nombre_motivo,' . $this->route('id'),

    ];
} else {
    return [
        'nombre_motivo' => 'required|max:50|unique:motivos,nombre_motivo,sede_id,' . $this->route('id'),

    ];
}
    }
}
