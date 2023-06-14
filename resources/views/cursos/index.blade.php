@extends('template.layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>


        <style>
            footer {
                margin-top: 200px
            }

            @media (max-width: 764px) {
                #areas {
                    margin-top: 20px;
                }
            }
        </style>
        {{-- <link rel="stylesheet" href="{{ asset('assets/css/cursos/index.css') }}"> --}}
        <input type="hidden" name="" id="_token" value="{{csrf_token()}}">
        <div class="container ">
            <div style="height: 500px" class="row align-items-center text-center">
                <div class="col">
                    <div class="name">
                        <h2 class="title"><strong>Cursos de Programação</strong></h2>
                    </div>
                </div>
            </div>
            @if(Auth::check())
                @if(Auth::user()->is_admin == 1)
                <div  class="row align-items-center text-center">
                    <div class="col">
                        <div class="name">
                            <button class="btn btn-success mb-4 add-cursos" data-bs-toggle="modal" data-bs-target="#modal-criar"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div>
                </div>
                @endif
            @endif
            <div class="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                <div class="col-md-6">

                    <input style=" color: black" id="pesquisa" placeholder="Pesquisa" type="text" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="col-md-6">
                    <select id="areas" class="form-select" aria-label="Default select example">
                        <option selected><b>Selecione a área</b></option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->nome }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="row" id="techs" style="opacity: 1">
                @foreach ($cursos as $curso)
                    <div class="col-md-3 mt-3">
                        <a href="{{ route('cursos.show', $curso->id) }}">
                        <div class="techs">
                            <div class="row">
                                <div class="col-2 ms-4 mt-3"><img src="{{ asset('assets/img/front-end.png') }}"
                                        class="img-thumbnail" alt=""></div>
                                <div class="col mt-3" style="color:rgb(0, 0, 0)">
                                    <b>{{ $curso->areasRelacionamento->nome }}</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col ms-4 mt-3" style="color:rgb(164, 173, 36)"><b>{{  strtoupper( $curso->nome )}}</b></div>
                            </div>
                            <div class="row" style="width: 100%">
                                <div class="col ms-4 mt-3" style="color:rgb(0, 0, 0)"><b>{{ $curso->desc }}</b></div>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-criar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Criação de Cursos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3" style="color: black">
                    <label class="form-label"><b>Nome</b> </label>
                    <input id="nome" name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="color: black">
                    <label class="form-label"><b>Área</b> </label>
                    <select id="area" class="form-select" aria-label="Default select example">
                        <option selected>Selecione a área</option>
                        @foreach($areas as $area)
                            <option value="{{$area->id}}">{{$area->nome}}</option>  
                        @endforeach
                      </select>
                </div>
                <div class="mb-3" style="color: black">
                    <label class="form-label"><b>Sobre a tecnologia</b> </label>
                    <input id="desc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="color: black">
                    <label class="form-label"><b>O que o aluno irá aprender?</b> </label>
                    <input id="aprendizado" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3" style="color: black">
                    <select id="linguagem" class="form-select" aria-label="Default select example">
                            <option value="0">LINGUAGEM DE PROGRAMAÇÃO</option>  
                            <option value="1">FRAMEWORK</option>  
                      </select>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button id="criar" type="button" class="btn btn-primary">Criar</button>
            </div>
            </div>
        </div>
        </div>
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/cursos/index.js') }}"></script>

        <footer>
            <div class="container">
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
</body>

</html>
