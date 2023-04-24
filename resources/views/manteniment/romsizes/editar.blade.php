@extends('layouts.plantillaManteniment')


@section('title', 'Editando ' . $romsize->romsize)


@section('contenido')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentRomsizes.update', $romsize) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="romsize" class="form-label">Romsize:</label>
                        @error('romsize')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="romsize" name="romsize"
                            value="{{ old('romsize', $romsize->romsize) }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
