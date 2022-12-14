<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
            'nombre_producto' => ['required', 'min:4'],
            'categoria' => ['required'],
            'precio'=>['required'],
            'existencia' => ['required','min:1'],
            'imagen' => ['required','mimes:jpg,png,jpeg,gif,svg','max:2048']
        ];
    }
}