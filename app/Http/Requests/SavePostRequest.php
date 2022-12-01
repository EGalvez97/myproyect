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
            'nombre' => ['required', 'min:4'],
            'tipo' => ['required'],
            'color'=>['required'],
            'talla' => ['required','min:1'],
            'cantidad' => ['required','min:1'],
            'image' => ['required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']
        ];
    }
}