<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCargoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //si el usuario no está autenticado
        //entonces retorna falso -> acceso denegado
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
                'cargo' => 'required|max:20|unique:cargos,cargo',
                'descripcion' => 'required|max:255'
        ];
    }
}
