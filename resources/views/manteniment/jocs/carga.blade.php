@extends('layouts.plantillaManteniment')

@section('title', 'Carga masiva')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Carga masiva</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentGame.carga') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de catalogo:</label>
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Fucks curious">?</a>
                        @if (session('false'))
                            <p>{{ session('false') }}</p>
                        @endif
                        <input class="form-control" type="file" name="xmlfile" id="imageFileMultiple">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Subir</button>
                </form>
            </div>
        </div>
    </div>
@endsection
