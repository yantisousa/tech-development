@extends('template.layout')
@section('content')
    <style>
        footer {
            margin-top: 200px
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/cursos/index.css') }}"> --}}
        <div class="container ">
            <div style="height: 500px" class="row align-items-center text-center">
                <div class="col">
                    <div class="name">
                        <h2 class="title"><strong>Cursos de Programação</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                <div class="col-md-6">

                    <input style=" color: black" id="pesquisa" placeholder="Pesquisa" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                </div>
                <div class="col-md-6">
                    <select id="areas" class="form-select" aria-label="Default select example">
                        <option selected><b>Selecione a área</b></option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->nome }}</option>
                        @endforeach
                      </select>
                    {{-- <div class="form-check form-switch">
                        <input id="front" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label  class="form-check-label" for="flexSwitchCheckDefault"><b>FRONT-END</b></label>
                    </div> --}}

                </div>

            </div>
            <div class="row" id="techs" style="opacity: 1">
                @foreach ($cursos as $curso)
                    <div class="col-md-3 mt-3">
                        <div class="techs">
                            <div class="row">
                                <div class="col-2 ms-4 mt-3"><img src="{{ asset('assets/img/front-end.png') }}"
                                        class="img-thumbnail" alt=""></div>
                                <div class="col mt-3" style="color:rgb(0, 0, 0)">
                                    <b>{{ $curso->areasRelacionamento->nome }}</b></div>
                            </div>
                            <div class="row">
                                <div class="col ms-4 mt-3" style="color:rgb(0, 0, 0)"><b>{{ $curso->nome }}</b></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/cursos/index.js') }}"></script>

    <footer>
        <div class="container" style="height: 20vh">
            <div class="row align-items-end mt-6">
                <div style="color:white" class="col text-center">
                       <span style="color:#ddda24"> Termos de uso</span>
                    <h6> Todos os direitos reservados © 2023</h6>
                    <h6>Yan Emanuel</h6>
                </div>
            </div>
        </div>
    </footer>
@endsection
