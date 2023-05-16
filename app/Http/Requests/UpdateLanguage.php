<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLanguage extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'language' => 'required | max:100 | string',
        ];
    }

    public function attributes() {
        return [
            'language' => 'Idioma del juego',
        ];
    }

    public function messages() {
        return [
            'language.max' => 'Nombre de la idioma excesivamente largo.',
        ];
    }
}
