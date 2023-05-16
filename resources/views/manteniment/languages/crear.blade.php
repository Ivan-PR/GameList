@extends('layouts.plantillaManteniment')

@section('title', 'Creando Idioma')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentLanguages.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="language" class="form-label">Idioma:</label>
                        @error('language')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="language" name="language"
                            value="{{ old('language') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
