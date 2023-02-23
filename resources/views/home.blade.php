@extends('layouts.plantilla')

@section('contenido')
    <div class="container-xl bg-secondary d-flex w-100">
        <div class="col-4">
            <div>
                <ol>
                    <li><img src="imgs/japanFlag.png"> 1050 - Sword of Mana </li>
                    <li><img src="imgs/japanFlag.png"> 1051 - Harvest Moon </li>
                    <li><img src="imgs/japanFlag.png"> 1052 - Finding Nemo </li>
                    <li><img src="imgs/japanFlag.png"> 1053 - Spiro Adventure </li>
                    <li><img src="imgs/japanFlag.png"> 1054 - Kim Possible </li>
                    <li><img src="imgs/japanFlag.png"> 1055 - Terminator 3 </li>
                    <li><img src="imgs/japanFlag.png"> 1056 - Mario & Luigi RPG </li>
                </ol>
            </div>
            <div class="">Listas de xmls a escoger.</div>
        </div>
        <div class="col-8 game_info d-flex flex-column">
            <div class="d-flex flex-row">
                <div class="w-50 img1"><img src="img1" alt="img" title="img1"></div>
                <div class="w-50 img2"><img src="img2" alt="img" title="img2"></div>
            </div>
            <div class="d-flex flex-column">
                <h4>1050 - Sword of Mana</h4>
                <p><b>Location: </b> USA</p>
                <p><b>Publisher: </b> Nintendo</p>
                <p><b>Source Rom: </b> Mode 7</p>
                <p><b>Save Type: </b> Flash 512v131</p>
                <p><b>Rom Size: </b> 128bits</p>
                <p><b>Language: </b> English</p>
            </div>
        </div>

    </div>
@endsection
