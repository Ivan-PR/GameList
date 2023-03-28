<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGame extends FormRequest {
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
            'id_game' => 'required | numeric',
            'name' => 'required | max:30 | string',
            'location_id' => 'required | numeric',
            'publisher' => 'required | max:50 | string',
            'sourcerom' => 'required | max:15 | string',
            'savetype' => 'required | max:15 | string',
            'romsize_id' => 'required | numeric',
            'language_id' => 'required | numeric',
            'platform_id' => 'required | numeric',
        ];
    }

    public function attributes(){
        return [
            'name' => 'titulo del juego',
        ];
    }

    public function messages(){
        return [
            'name.max' => 'Nombre del titulo excesivamente largo.',
            'publisher.max' => 'Nombre de la desarrolladora excesivamente largo.',
            'sourcerom.max' => 'Nombre  de la source rom excesivamente largo.',
            'savetype.max' => 'Nombre del save type excesivamente largo.',
        ];
    }
}
