<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGame extends FormRequest
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
     * Get the validation rules that apply to the request..
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'id_game' => 'required | string',
            'name' => 'required | max:170 | string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location_id' => 'numeric |exists:locations,id| min:1',
            'publisher' => 'max:50 | string',
            'sourcerom' => 'max:40 | string',
            'savetype' => 'max:15 | string',
            'romsize_id' => 'numeric |exists:romsizes,id| min:1',
            'language_id' => 'numeric |exists:languages,id| min:1',
            'platform_id' => 'numeric |exists:platforms,id| min:1',
        ];
    }

    public function attributes(){
        return [
            'name' => 'titulo del juego',
        ];
    }

    public function messages(){
        return [
            'name.max' => 'Nombre del título excesivamente largo.',
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
