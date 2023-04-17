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
            <form action="" method="POST"{{-- enctype="multipart/form-data" --}}>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Subida de catalogo:</label>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Fucks curious">?</a>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                    <input class="form-control" type="file" id="imageFileMultiple" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection