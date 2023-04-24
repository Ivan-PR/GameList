<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlatform extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'platform' => 'required | max:100 | string',
        ];
    }

    public function attributes(){
        return [
            'platform' => 'Plataforma del juego',
        ];
    }

    public function messages(){
        return [
            'platform.max' => 'Nombre de la plataforma excesivamente largo.',
        ];
    }
}
