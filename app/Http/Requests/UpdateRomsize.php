<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRomsize extends FormRequest {
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
            'romsize' => 'required | max:20 | string',
        ];
    }

    public function attributes() {
        return [
            'romsize' => 'Romsize del juego',
        ];
    }

    public function messages() {
        return [
            'romsize.max' => 'Nombre de la romsize excesivamente largo.',
        ];
    }
}
