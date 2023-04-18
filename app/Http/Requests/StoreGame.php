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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publisher' => 'required | max:50 | string',
            'sourcerom' => 'required | max:15 | string',
            'savetype' => 'required | max:15 | string',
            'location_id' => 'required | numeric | min:1 |exists:locations,id',
            'romsize_id' => 'required | numeric | min:1 ',
            'language_id' => 'required | numeric | min:1',
            'platform_id' => 'required | numeric | min:1',
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
            'id_game.numeric' => 'El id del juego debe ser numerico.',
            'image.mimes' => 'El formato de la imagen no es valido.',
            'image.max' => 'El tamaño de la imagen no es valido.',
            'location_id.numeric' => 'El id de la localizacion debe ser numerico.',
            'romsize_id.numeric' => 'El id del tamaño de la rom debe ser numerico.',
            'language_id.numeric' => 'El id del idioma debe ser numerico.',
            'platform_id.numeric' => 'El id de la plataforma debe ser numerico.',

        ];
    }
}
