@extends('layouts.plantillaManteniment')

@section('title', 'Editando ' . $language->language)

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentPlataformes.update', $language) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="language" class="form-label">Idioma:</label>
                        @error('language')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="language" name="language"
                            value="{{ old('language', $language->language) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
