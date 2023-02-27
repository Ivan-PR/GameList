@extends('layouts.plantillaManteniment')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Manteniment</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Llistat de Roms</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Descripció</th>
                        <th scope="col">Data</th>
                        <th scope="col">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Super Mario Bros</td>
                        <td>El clàssic de la Nintendo</td>
                        <td>1990</td>
                        <td>
                            <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                            <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Super Mario Bros 2</td>
                        <td>El clàssic de la Nintendo</td>
                        <td>1990</td>
                        <td>
                            <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                            <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Super Mario Bros 3</td>
                        <td>El clàssic de la Nintendo</td>
                        <td>1990</td>
                        <td>
                            <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                            <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection