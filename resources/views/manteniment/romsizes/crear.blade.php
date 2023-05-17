@extends('layouts.plantillaManteniment')

@section('title', 'Creando Romsize')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><b>* Campo requerido</b></p>
                <form action="{{ route('mantenimentRomsizes.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="romsize" class="form-label">Romsize: *</label>
                        @error('romsize')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="romsize" name="romsize" value="{{ old('romsize') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
